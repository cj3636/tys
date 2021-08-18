(function e(t, n, r) {
    function s(o, u) {
        if (!n[o]) {
            if (!t[o]) {
                var a = typeof require == "function" && require;
                if (!u && a) return a(o, !0);
                if (i) return i(o, !0);
                var f = new Error("Cannot find module '" + o + "'");
                throw f.code = "MODULE_NOT_FOUND", f
            }
            var l = n[o] = {exports: {}};
            t[o][0].call(l.exports, function (e) {
                var n = t[o][1][e];
                return s(n ? n : e)
            }, l, l.exports, e, t, n, r)
        }
        return n[o].exports
    }

    var i = typeof require == "function" && require;
    for (var o = 0; o < r.length; o++) s(r[o]);
    return s
})({
    1: [function (require, module, exports) {
        var Get = require('./get');
        var get = new Get();

        var exports = function () {
            var Camera = function () {
                this.width = 1;
                this.height = 1;
                this.rad1 = 0;
                this.rad2 = 0;
                this.x = 0;
                this.y = 0;
                this.z = 0;
                this.r = 0;
                this.obj;
            };

            Camera.prototype.init = function (rad1, rad2, width, height) {
                this.width = width;
                this.height = height;
                this.r = 4500;
                this.rad1 = rad1;
                this.rad2 = rad2;
                this.obj = new THREE.PerspectiveCamera(35, this.width / this.height, 1, 10000);
                this.setPosition(this.rad1, this.rad2, this.r);
            };

            Camera.prototype.setPosition = function (rad1, rad2) {
                var points = get.pointSphere(rad1, rad2, this.r);
                this.obj.position.set(points[0], points[1], points[2]);
                this.obj.up.set(0, 1, 0);
                this.obj.lookAt({
                    x: 0,
                    y: 0,
                    z: 0
                });
            };

            return Camera;
        };

        module.exports = exports();

    }, {"./get": 3}],
    2: [function (require, module, exports) {
        module.exports = function (object, eventType, callback) {
            var timer;

            object.addEventListener(eventType, function (event) {
                clearTimeout(timer);
                timer = setTimeout(function () {
                    callback(event);
                }, 500);
            }, false);
        };

    }, {}],
    3: [function (require, module, exports) {
        var exports = function () {
            var Get = function () {
            };

            Get.prototype.randomInt = function (min, max) {
                return Math.floor(Math.random() * (max - min)) + min;
            };

            Get.prototype.degree = function (radian) {
                return radian / Math.PI * 180;
            };

            Get.prototype.radian = function (degrees) {
                return degrees * Math.PI / 180;
            };

            Get.prototype.pointSphere = function (rad1, rad2, r) {
                var x = Math.cos(rad1) * Math.cos(rad2) * r;
                var y = Math.sin(rad1) * Math.cos(rad1) * r;
                var z = Math.cos(rad1) * Math.sin(rad2) * r;
                return [x, y, z];
            };

            return Get;
        };

        module.exports = exports();

    }, {}],
    4: [function (require, module, exports) {
        var Get = require('./get');
        var get = new Get();

        var exports = function () {
            var HemiLight = function () {
                this.rad1 = .0;
                this.rad2 = 0;
                this.x = 0;
                this.y = 0;
                this.z = 0;
                this.r = 0;
                this.obj;
            };

            HemiLight.prototype.init = function (scene, rad1, rad2, r, hex1, hex2, intensity) {
                this.r = r;
                this.obj = new THREE.HemisphereLight(hex1, hex2, intensity);
                this.setPosition(rad1, rad2);
                scene.add(this.obj);
            };

            HemiLight.prototype.setPosition = function (rad1, rad2) {
                var points = get.pointSphere(rad1, rad2, this.r);
                this.obj.position.set(points[0], points[1], points[2]);
            };

            return HemiLight;
        };

        module.exports = exports();

    }, {"./get": 3}],
    5: [function (require, module, exports) {
        var Get = require('./get');
        var get = new Get();
        var debounce = require('./debounce');
        var Camera = require('./camera');
        var PointLight = require('./pointLight');
        var HemiLight = require('./hemiLight');
        var Mover = require('./mover');

        var bodyWidth = document.body.clientWidth;
        var bodyHeight = document.body.clientHeight;
        var fps = 60;
        var lasttimeRender = +new Date();
        var raycaster = new THREE.Raycaster();
        var mouseVector = new THREE.Vector2(-2, -2);
        var intersects;

        var canvas;
        var renderer;
        var scene;
        var camera;
        var light;

        var bufferGeometry = new THREE.BufferGeometry();
        var bufferMaterial = new THREE.MeshBasicMaterial({
            color: 0xffffff,
            vertexColors: THREE.VertexColors
        });
        var bufferMesh;
        //var boxGeometry = new THREE.BoxGeometry(16, 16, 16);
        var boxGeometry = new THREE.SphereGeometry(12, 8, 8);
        //var boxGeometry = new THREE.CylinderGeometry(0, 6, 300, 3);
//boxGeometry.applyMatrix(new THREE.Matrix4().makeRotationFromEuler(new THREE.Euler(Math.PI / 2, Math.PI, 0)));
//var boxGeometry = new THREE.Geometry();
//boxGeometry.vertices.push(
        //new THREE.Vector3( 4, 0, 0 ),
        //new THREE.Vector3( 0, 4, 0 ),
        //new THREE.Vector3( 0, 0, 4 )
//);
//boxGeometry.faces.push( new THREE.Face3( 0, 1, 2 ) );
        var boxMesh = new THREE.Mesh(boxGeometry);

        var boxArr = [];
        //TODO number of shapes
        var boxNum = 1255;
        var boxVertices = boxMesh.geometry.vertices;
        var boxFaces = boxMesh.geometry.faces;


// ==========

        var initThree = function () {
            canvas = document.getElementById('canvas');
            renderer = new THREE.WebGLRenderer({
                antialias: true
            });
            if (!renderer) {
                alert('Three.jsの初期化に失敗しました。');
            }

            scene = new THREE.Scene();
            scene.fog = new THREE.Fog(0xfffff, 7000, 10000);
            canvas.appendChild(renderer.domElement);
            renderer.setSize(bodyWidth, bodyHeight);
            renderer.setClearColor(0xd3d3d3, 1.0);


        };

        var init = function () {
            initThree();

            camera = new Camera();
            camera.init(get.radian(20), get.radian(45), bodyWidth, bodyHeight);

            light = new HemiLight();
            light.init(scene, get.radian(45), get.radian(45), 1000, 0xffffff, 0x000000, 1);


            // Moverのインスタンス生成
            for (var i = 0; i < boxNum; i++) {
                var radius = get.randomInt(0, 1200);
                var rad1 = get.radian(get.randomInt(0, 360));
                var rad2 = get.radian(get.randomInt(0, 360));

                boxArr[i] = new Mover();
                boxArr[i].init(radius, rad1, rad2);
            }

            // Buffer用の変数
            var vertices;
            var verticesArr = [];
            var colors;
            var colorsArr = [];
            var color = new THREE.Color();
            var indices;
            var indicesArr = [];

            // 頂点とindexを更新 ここから
            for (var i = 0; i < boxArr.length; i++) {
                //TODO set colors
                var r = get.randomInt(0, 128);
                var g = get.randomInt(64, 255);
                var b = get.randomInt(64, 255);
                var verticesLength = boxVertices.length;
                var facesLength = boxFaces.length;

                for (var index = 0; index < boxFaces.length; index++) {
                    //TODO ALSO SOMETHING WITH SHAPE
                    indicesArr[facesLength * 11 * i + index * 3 + 0] = boxFaces[index].a + i * verticesLength;
                    indicesArr[facesLength * 7 * i + index * 3 + 1] = boxFaces[index].b + i * verticesLength;
                    indicesArr[facesLength * 13 * i + index * 3 + 2] = boxFaces[index].c + i * verticesLength;
                }
                for (var index = 0; index < boxVertices.length; index++) {
                    verticesArr[verticesLength * 3 * i + index * 3 + 0] = boxVertices[index].x + boxArr[i].position.x;
                    verticesArr[verticesLength * 3 * i + index * 3 + 1] = boxVertices[index].y + boxArr[i].position.y;
                    verticesArr[verticesLength * 3 * i + index * 3 + 2] = boxVertices[index].z + boxArr[i].position.z;
                    colorsArr[verticesLength * 3 * i + index * 3 + 0] = r / 255//boxArr[i].colors[index][0];
                    colorsArr[verticesLength * 3 * i + index * 3 + 1] = g / 255//boxArr[i].colors[index][1];
                    colorsArr[verticesLength * 3 * i + index * 3 + 2] = b / 255//boxArr[i].colors[index][2];
                }
            }
            vertices = new Float32Array(verticesArr);
            colors = new Float32Array(colorsArr);
            indices = new Uint32Array(indicesArr);
            bufferGeometry.addAttribute('position', new THREE.BufferAttribute(vertices, 3));
            bufferGeometry.addAttribute('color', new THREE.BufferAttribute(colors, 3));
            bufferGeometry.addAttribute('index', new THREE.BufferAttribute(indices, 1));
            // 頂点とindexを更新 ここまで


            bufferMesh = new THREE.Mesh(bufferGeometry, bufferMaterial);
            scene.add(bufferMesh);

            renderloop();
            debounce(window, 'resize', function (event) {
                resizeRenderer();
            });
        };

        var render = function () {
            renderer.clear();

            var verticesArr = bufferMesh.geometry.attributes.position.array;
            var verticesLength = boxVertices.length;

            for (var i = 0; i < boxArr.length; i++) {
                boxArr[i].move(velocity);
                //TODO SHAPE OF ARTIFACTS
                for (var index = 0; index < boxVertices.length; index++) {
                    var vector = boxVertices[index].clone().applyQuaternion(boxArr[i].q);
                    verticesArr[verticesLength * 11 * i + index * 3 + 0] = vector.x + boxArr[i].position.x;
                    verticesArr[verticesLength * 13 * i + index * 3 + 1] = vector.y + boxArr[i].position.y;
                    verticesArr[verticesLength * 7 * i + index * 3 + 2] = vector.z + boxArr[i].position.z;
                }
            }

            bufferMesh.geometry.attributes.position.needsUpdate = true;
            bufferMesh.geometry.attributes.index.needsUpdate = true;

            renderer.render(scene, camera.obj);
        };

        var renderloop = function () {
            var now = +new Date;
            velocity = (now - lasttimeRender) / 100;
            render();
            lasttimeRender = now;
            setTimeout(renderloop, 1000 / fps)
        };

        var resizeRenderer = function () {
            bodyWidth = document.body.clientWidth;
            bodyHeight = document.body.clientHeight;
            renderer.setSize(bodyWidth, bodyHeight);
            camera.init(get.radian(20), get.radian(45), bodyWidth, bodyHeight);
        };

        init();

    }, {"./camera": 1, "./debounce": 2, "./get": 3, "./hemiLight": 4, "./mover": 6, "./pointLight": 7}],
    6: [function (require, module, exports) {
        var Get = require('./get');
        var get = new Get();

        var exports = function () {
            var Mover = function () {
                this.id = 0;
                this.position = new THREE.Vector3();
                this.velocity = new THREE.Vector3();
                this.verticesBase = [];
                this.faces = [];
                this.radius = 0;
                this.rad1 = 0;
                this.rad2 = 0;
                this.verocityPoint = 0;
                this.up = new THREE.Vector3(0, 1, 0);
                this.q = new THREE.Quaternion();
            };

            Mover.prototype.init = function (radius, rad1, rad2) {
                var points;

                this.radius = radius;
                this.rad1 = rad1;
                this.rad2 = rad2;
                this.verocityPoint = get.randomInt(1, 6);
                points = this.getPosition();
                this.position.set(points[0], points[1], points[2]);
            };

            Mover.prototype.getPosition = function () {
                var points = get.pointSphere(this.rad1, this.rad2, this.radius);
                return points;
            };

            Mover.prototype.updateQuaternion = function () {
                var dir = this.velocity.clone().sub(this.position).normalize();
                var cross = new THREE.Vector3().crossVectors(this.up, dir).normalize();
                var dot = this.up.normalize().dot(dir);
                var rad = Math.acos(dot);
                this.q.setFromAxisAngle(cross, rad);
            };

            Mover.prototype.move = function (velocity) {
                var points;

                this.rad2 += get.radian(velocity * this.verocityPoint);
                points = this.getPosition();
                this.velocity.set(points[0], points[1], points[2]);
                this.updateQuaternion();
                this.position = this.velocity.clone();
            };

            return Mover;
        };

        module.exports = exports();

    }, {"./get": 3}],
    7: [function (require, module, exports) {
        var Get = require('./get');
        var get = new Get();

        var exports = function () {
            var PointLight = function () {
                this.rad1 = 0;
                this.rad2 = 0;
                this.x = 0;
                this.y = 0;
                this.z = 0;
                this.r = 0;
                this.obj;
            };

            PointLight.prototype.init = function (scene, rad1, rad2, r, hex, intensity, distance) {
                this.r = r;
                this.obj = new THREE.PointLight(hex, intensity, distance);
                this.setPosition(rad1, rad2);
                scene.add(this.obj);
            };

            PointLight.prototype.setPosition = function (rad1, rad2) {
                var points = get.pointSphere(rad1, rad2, this.r);
                this.obj.position.set(points[0], points[1], points[2]);
            };

            return PointLight;
        };

        module.exports = exports();

    }, {"./get": 3}]
}, {}, [5])