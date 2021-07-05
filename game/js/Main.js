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
        b2DebugDraw: Box2D.Dynamics.b2DebugDraw
    };

//Divide by scale to convert pixels into meters, creates entire world stage
let SCALE = 30;
let stage, world, debug;

//calls canvas, adds timer to 'tick'
function init() {
    world = new box2d.b2World(new box2d.b2Vec2(xGravity, yGravity), true);
    stage = new createjs.Stage(document.getElementById('canvas'));
    debug = document.getElementById('debug');
    debug.addEventListener("contextmenu", getPositionR, false);
    debug.addEventListener("click", getPosition, false);

    //Create walls/ground
    let c = new setupPhysics();
    stage.addChild(c.view);
    stage.addChild(c.view1);
    stage.addChild(c.view2);
    stage.addChild(c.view3);
    setupPhysics();

    //easel stuff
    createjs.Ticker.addListener(this);
    createjs.Ticker.setFPS(60);
    createjs.Ticker.useRAF = true;

// When called generates ball under cursor
    function genBall(xP, yP) {
        var b = new Ball(xP, yP);
        stage.addChild(b.view);
    }

//When called generates static square
    function genSquare(xP, yP) {
        var b = new Square(xP, yP);
        stage.addChild(b.view);
    }

//Obtains cursor position for left click, then runs genBall		
    function getPosition() {
        var xP;
        var yP;
        var canvas = document.getElementById("canvas");

        if (event.x !== undefined && event.y !== undefined) {
            xP = event.x;
            yP = event.y;
        } else // Firefox method to get the position
        {
            xP = event.clientX + document.body.scrollLeft + document.documentElement.scrollLeft;
            yP = event.clientY + document.body.scrollTop + document.documentElement.scrollTop;
        }
        xP -= canvas.offsetLeft;
        yP -= canvas.offsetTop;
        genBall(xP, yP)
    }

//Obtains cursor position for right click, then runs genSquare		
    function getPositionR() {
        var xP = new Number();
        var yP = new Number();
        var canvas = document.getElementById("canvas");

        if (event.x !== undefined && event.y !== undefined) {
            xP = event.x;
            yP = event.y;
        } else {
            xP = event.clientX + document.body.scrollLeft + document.documentElement.scrollLeft;
            yP = event.clientY + document.body.scrollTop + document.documentElement.scrollTop;
        }
        xP -= canvas.offsetLeft;
        yP -= canvas.offsetTop;
        genSquare(xP, yP)
    }
}

//causes world update
function tick() {
    stage.update();
    //world.DrawDebugData();
    world.Step(1 / 60, 10, 10);
    world.ClearForces();
}