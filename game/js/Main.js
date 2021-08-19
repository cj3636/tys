let box2d =
    {
        b2Vec2: Box2D.Common.Math.b2Vec2,
        b2BodyDef: Box2D.Dynamics.b2BodyDef,
        b2Body: Box2D.Dynamics.b2Body,
        b2FixtureDef: Box2D.Dynamics.b2FixtureDef,
        b2Fixture: Box2D.Dynamics.b2Fixture,
        b2World: Box2D.Dynamics.b2World,
        b2MassData: Box2D.Collision.Shapes.b2MassData,
        b2PolygonShape: Box2D.Collision.Shapes.b2PolygonShape,
        b2CircleShape: Box2D.Collision.Shapes.b2CircleShape,
        b2EdgeShape: Box2D.Collision.Shapes.b2EdgeShape,
        b2DebugDraw: Box2D.Dynamics.b2DebugDraw
    };
//Divide by scale to convert pixels into meters, creates entire world stage
let SCALE = 10;
let world, stage;
const canvas = document.getElementById('canvas');
const canvasCTX = document.getElementById('debug').getContext('2d')
const debug = document.getElementById('debug');
const debugCTX = document.getElementById('debug').getContext('2d');
//Creates world for physics, stage for createjs/easeljs graphics, debug
function init() {
    world = new box2d.b2World(new box2d.b2Vec2(xGravity, yGravity), true);
    stage = new createjs.Stage(canvas);

    //Create walls/ground
    let border = new SetupBorder();
    stage.addChild(border.groundView);
    views.forEach(function (view) {
        stage.addChild(view);
    })
    stage.addChild(border.roofView);
    stage.addChild(border.rightView);
    stage.addChild(border.leftView);
    // new Body(world, { type: "static", x: 0, y: 0, height: 50,  width: 0.5 });

    //easel stuff
    createjs.Ticker.addListener(this);
    createjs.Ticker.setFPS(60);
    createjs.Ticker.useRAF = true;
}

// shim layer with setTimeout fallback
window.requestAnimFrame = (function () {
    return window.requestAnimationFrame ||
        window.webkitRequestAnimationFrame ||
        window.mozRequestAnimationFrame ||
        function (callback) {
            window.setTimeout(callback, 1000 / 60);
        };
})();


// usage:
// instead of setInterval(render, 16) ....

(function animloop() {
    requestAnimFrame(animloop);
    //render();
})();
let lastFrame = new Date().getTime();
window.gameLoop = function () {
    let tm = new Date().getTime();
    requestAnimationFrame(gameLoop);
    let dt = (tm - lastFrame) / 1000;
    if (dt > 1 / 15) {
        dt = 1 / 15;
    }
    console.log(dt)
    //world.step(dt);
    lastFrame = tm;
};
//requestAnimationFrame(gameLoop);

let debugDraw = new box2d.b2DebugDraw();
debugDraw.SetSprite(debugCTX);
debugDraw.SetDrawScale(SCALE);
debugDraw.SetFillAlpha(0.5);
debugDraw.SetLineThickness(1.0);
debugDraw.SetFlags(box2d.b2DebugDraw.e_shapeBit | box2d.b2DebugDraw.e_jointBit | box2d.b2DebugDraw.e_aabbBit | box2d.b2DebugDraw.e_centerOfMassBit);

function reset() {
    console.log('ran');
}

//e.button 0,1,2 on mouse
$('#debug').mousedown(function (e) {
    if (world != null) {
        switch (e.button) {
            case 0:
                getPosition(e, e.button);
                break;
            case 1:
                break;
            case 2:
                getPosition(e, e.button);
                break;
            default:
                console.error('Unrecognized mouse click!', [e, e.button()]);
                break;
        }
    } else console.warn('World not Initialized.', ['mouseDown', e.button]);
});

function getPosition(e, btn) {
    const bound = canvas.getBoundingClientRect();
    const x = event.clientX - bound.left;
    const y = e.clientY - bound.top;
    switch (btn) {
        case 0:
            genBall(x, y);
            break;
        case 1:
            break;
        case 2:
            genSquare(x, y);
            break;
        default:
            console.error('Unrecognized mouse click!', [e, e.button()]);
            break;
    }
}

//Creates new Ball.js at x, y
function genBall(xP, yP) {
    let b = new Ball(xP, yP);
    stage.addChild(b.view);
}

//Creates new Square.js at x, y
function genSquare(xP, yP) {
    let s = new Square(xP, yP);
    stage.addChild(s.view);
}

//Time Step
function tick() {
    //gameLoop();
    stage.update();
    if (doDebug) {
        world.SetDebugDraw(debugDraw);
        world.DrawDebugData();
    }
    world.Step(1 / 60, 10, 10);
    world.ClearForces();
}