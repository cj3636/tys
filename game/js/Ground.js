function setupPhysics() {
    function tick(e) {
        this.x = this.body.GetPosition().x * SCALE;
        this.y = this.body.GetPosition().y * SCALE;
    }

    // create ground
    this.view = new createjs.Bitmap("img/black.png")
    this.view.regX = 0;
    this.view.regY = 20;

    var fixDef = new box2d.b2FixtureDef();
    fixDef.density = 1;
    fixDef.friction = 0.5;
    var bodyDef = new box2d.b2BodyDef();
    bodyDef.type = box2d.b2Body.b2_staticBody;
    bodyDef.position.x = 0;
    bodyDef.position.y = 800 / SCALE;
    fixDef.shape = new box2d.b2PolygonShape();
    fixDef.shape.SetAsBox(1000 / SCALE, 20 / SCALE);
    world.CreateBody(bodyDef).CreateFixture(fixDef);

    this.view.body = world.CreateBody(bodyDef);
    this.view.body.CreateFixture(fixDef);
    this.view.onTick = tick;

    //Roof
    this.view1 = new createjs.Bitmap("img/black.png")
    this.view1.regX = 0;
    this.view1.regY = 800;

    var fixDef = new box2d.b2FixtureDef();
    fixDef.density = 1;
    fixDef.friction = 0.5;
    var bodyDef = new box2d.b2BodyDef();
    bodyDef.type = box2d.b2Body.b2_staticBody;
    bodyDef.position.x = 0;
    bodyDef.position.y = 800 / SCALE;
    fixDef.shape = new box2d.b2PolygonShape();
    fixDef.shape.SetAsBox(20 / SCALE, 1000 / SCALE);
    world.CreateBody(bodyDef).CreateFixture(fixDef);

    this.view1.body = world.CreateBody(bodyDef);
    this.view1.body.CreateFixture(fixDef);
    this.view1.onTick = tick;

    //Right
    this.view2 = new createjs.Bitmap("img/black2.png")
    this.view2.regX = 20;
    this.view2.regY = 0;

    var fixDef = new box2d.b2FixtureDef();
    fixDef.density = 1;
    fixDef.friction = 0.5;
    var bodyDef = new box2d.b2BodyDef();
    bodyDef.type = box2d.b2Body.b2_staticBody;
    bodyDef.position.x = 1000 / SCALE;
    bodyDef.position.y = 0;
    fixDef.shape = new box2d.b2PolygonShape();
    fixDef.shape.SetAsBox(20 / SCALE, 1000 / SCALE);
    world.CreateBody(bodyDef).CreateFixture(fixDef);

    this.view2.body = world.CreateBody(bodyDef);
    this.view2.body.CreateFixture(fixDef);
    this.view2.onTick = tick;

    //left
    this.view3 = new createjs.Bitmap("img/black2.png")
    this.view3.regX = 0;
    this.view3.regY = 0;

    var fixDef = new box2d.b2FixtureDef();
    fixDef.density = 1;
    fixDef.friction = 0.5;
    var bodyDef = new box2d.b2BodyDef();
    bodyDef.type = box2d.b2Body.b2_staticBody;
    bodyDef.position.x = 0;
    bodyDef.position.y = 0;
    fixDef.shape = new box2d.b2PolygonShape();
    fixDef.shape.SetAsBox(1000 / SCALE, 20 / SCALE);
    world.CreateBody(bodyDef).CreateFixture(fixDef);

    this.view3.body = world.CreateBody(bodyDef);
    this.view3.body.CreateFixture(fixDef);
    this.view3.onTick = tick;

    //debug draw
    var debugDraw = new box2d.b2DebugDraw();
    debugDraw.SetSprite(debug.getContext('2d'));
    debugDraw.SetDrawScale(SCALE);
    debugDraw.SetFillAlpha(0)
    debugDraw.SetFlags(box2d.b2DebugDraw.e_shapeBit | box2d.b2DebugDraw.e_jointBit);
    world.SetDebugDraw(debugDraw);
}