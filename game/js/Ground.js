function CreateBorders() {
    function tick(e) {
        this.x = this.body.GetPosition().x * SCALE;
        this.y = this.body.GetPosition().y * SCALE;
    }
    this.ground = new createjs.Bitmap("img/black.png")
    this.ground.regX = 0;
    this.ground.regY = 20;

    let groundFix = new Box2D.b2FixtureDef();
    groundFix.density = 1;
    groundFix.friction = 0.5;
    let groundBody = new Box2D.b2BodyDef();
    groundBody.type = Box2D.b2Body.b2_staticBody;
    groundBody.position.x = 0;
    groundBody.position.y = 800 / SCALE;
    groundFix.shape = new Box2D.b2PolygonShape(1000 / SCALE, 20 / SCALE);
    world.CreateBody(groundBody).CreateFixture(groundFix);

    this.ground.body = world.CreateBody(groundBody);
    this.ground.body.CreateFixture(groundFix);
    this.ground.onTick = tick;

    //Roof
    this.roof = new createjs.Bitmap("img/black.png")
    this.roof.regX = 0;
    this.roof.regY = 800;

    let roofFix = new Box2D.b2FixtureDef();
    roofFix.density = 1;
    roofFix.friction = 0.5;
    let roofBody = new Box2D.b2BodyDef();
    roofBody.type = Box2D.b2Body.b2_staticBody;
    roofBody.position.x = 0;
    roofBody.position.y = 800 / SCALE;
    roofFix.shape = new Box2D.b2PolygonShape(20 / SCALE, 1000 / SCALE);
    world.CreateBody(roofBody).CreateFixture(roofFix);

    this.roof.body = world.CreateBody(roofBody);
    this.roof.body.CreateFixture(roofFix);
    this.roof.onTick = tick;

    //Right Wall
    this.rightWall = new createjs.Bitmap("img/black2.png")
    this.rightWall.regX = 20;
    this.rightWall.regY = 0;

    let rightWallFix = new Box2D.b2FixtureDef();
    rightWallFix.density = 1;
    rightWallFix.friction = 0.5;
    let rightWallBody = new Box2D.b2BodyDef();
    rightWallBody.type = Box2D.b2Body.b2_staticBody;
    rightWallBody.position.x = 1000 / SCALE;
    rightWallBody.position.y = 0;
    rightWallFix.shape = new Box2D.b2PolygonShape(1000 / SCALE, 1000 / SCALE);
    world.CreateBody(rightWallBody).CreateFixture(rightWallFix);

    this.rightWall.body = world.CreateBody(rightWallBody);
    this.rightWall.body.CreateFixture(rightWallFix);
    this.rightWall.onTick = tick;

    //Left Wall
    this.leftWall = new createjs.Bitmap("img/black2.png")
    this.leftWall.regX = 0;
    this.leftWall.regY = 0;

    let leftWallFix = new Box2D.b2FixtureDef();
    leftWallFix.density = 1;
    leftWallFix.friction = 0.5;
    let leftWallBody = new Box2D.b2BodyDef();
    leftWallBody.type = Box2D.b2Body.b2_staticBody;
    leftWallBody.position.x = 0;
    leftWallBody.position.y = 0;
    leftWallFix.shape = new Box2D.b2PolygonShape(1000 / SCALE, 20 / SCALE);
    world.CreateBody(leftWallBody).CreateFixture(leftWallFix);

    this.leftWall.body = world.CreateBody(leftWallBody);
    this.leftWall.body.CreateFixture(leftWallFix);
    this.leftWall.onTick = tick;
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
