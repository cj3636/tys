function createGround() {
    this.view = new createjs.Bitmap("img/black.png")
    this.view.regX = 0;
    this.view.regY = 20;

    let groundFix = new Box2D.b2FixtureDef();
    groundFix.density = 1;
    groundFix.friction = 0.5;
    let groundBody = new Box2D.b2BodyDef();
    groundBody.type = Box2D.b2Body.b2_staticBody;
    groundBody.position.x = 0;
    groundBody.position.y = 800 / SCALE;
    groundFix.shape = new Box2D.b2PolygonShape(1000 / SCALE, 20 / SCALE);
    world.CreateBody(groundBody).CreateFixture(groundFix);

    this.view.body = world.CreateBody(groundBody);
    this.view.body.CreateFixture(groundFix);
    this.view.onTick = tick;

}

function createRoof() {
    function tick(e) {
        this.x = this.body.GetPosition().x * SCALE;
        this.y = this.body.GetPosition().y * SCALE;
    }
    this.view = new createjs.Bitmap("img/black.png")
    this.view.regX = 0;
    this.view.regY = 800;

    let roofFix = new Box2D.b2FixtureDef();
    roofFix.density = 1;
    roofFix.friction = 0.5;
    let roofBody = new Box2D.b2BodyDef();
    roofBody.type = Box2D.b2Body.b2_staticBody;
    roofBody.position.x = 0;
    roofBody.position.y = 800 / SCALE;
    roofFix.shape = new Box2D.b2PolygonShape(20 / SCALE, 1000 / SCALE);
    world.CreateBody(roofBody).CreateFixture(roofFix);

    this.view.body = world.CreateBody(roofBody);
    this.view.body.CreateFixture(roofFix);
    this.view.onTick = tick;
}

function CreateBorders() {
    createGround();
    createRoof();
    //Roof
//     //Roof
//     this.view1 = new createjs.Bitmap("img/black.png")
//     this.view1.regX = 0;
//     this.view1.regY = 800;
//
//     var fixDef = new Box2D.b2FixtureDef();
//     fixDef.density = 1;
//     fixDef.friction = 0.5;
//     var groundBody = new Box2D.b2BodyDef();
//     groundBody.type = Box2D.b2Body.b2_staticBody;
//     groundBody.position.x = 0;
//     groundBody.position.y = 800 / SCALE;
//     fixDef.shape = new Box2D.b2PolygonShape();
//     fixDef.shape.SetAsBox(20 / SCALE, 1000 / SCALE);
//     world.CreateBody(groundBody).CreateFixture(fixDef);
//
//     this.view1.body = world.CreateBody(groundBody);
//     this.view1.body.CreateFixture(fixDef);
//     this.view1.onTick = tick;
//
//     //Right
//     this.view2 = new createjs.Bitmap("img/black2.png")
//     this.view2.regX = 20;
//     this.view2.regY = 0;
//
//     var fixDef = new Box2D.b2FixtureDef();
//     fixDef.density = 1;
//     fixDef.friction = 0.5;
//     var groundBody = new Box2D.b2BodyDef();
//     groundBody.type = Box2D.b2Body.b2_staticBody;
//     groundBody.position.x = 1000 / SCALE;
//     groundBody.position.y = 0;
//     fixDef.shape = new Box2D.b2PolygonShape();
//     fixDef.shape.SetAsBox(20 / SCALE, 1000 / SCALE);
//     world.CreateBody(groundBody).CreateFixture(fixDef);
//
//     this.view2.body = world.CreateBody(groundBody);
//     this.view2.body.CreateFixture(fixDef);
//     this.view2.onTick = tick;
//
//     //left
//     this.view3 = new createjs.Bitmap("img/black2.png")
//     this.view3.regX = 0;
//     this.view3.regY = 0;
//
//     var fixDef = new Box2D.b2FixtureDef();
//     fixDef.density = 1;
//     fixDef.friction = 0.5;
//     var groundBody = new Box2D.b2BodyDef();
//     groundBody.type = Box2D.b2Body.b2_staticBody;
//     groundBody.position.x = 0;
//     groundBody.position.y = 0;
//     fixDef.shape = new Box2D.b2PolygonShape();
//     fixDef.shape.SetAsBox(1000 / SCALE, 20 / SCALE);
//     world.CreateBody(groundBody).CreateFixture(fixDef);
//
//     this.view3.body = world.CreateBody(groundBody);
//     this.view3.body.CreateFixture(fixDef);
//     this.view3.onTick = tick;
//
//     //debug draw
    let debugDraw = new Box2D.JSDraw();
    // debugDraw.SetSprite(debug.getContext('2d'));
    // debugDraw.SetDrawScale(SCALE);
    // debugDraw.SetFillAlpha(0)
    // debugDraw.SetFlags(Box2D.b2DebugDraw.e_shapeBit | Box2D.b2DebugDraw.e_jointBit);
    // world.SetDebugDraw(debugDraw);
}
