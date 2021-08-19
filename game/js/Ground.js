let views = [];

function SetupBorder() {
    const w = canvasSize()[0];
    const h = canvasSize()[1];
    const wS = w / SCALE;
    const hS = h / SCALE;
    const gW = h / 50;
    const gWS = gW / SCALE;
    //Ground
    createRect(0, hS - gWS, wS, gWS, w, gW * 2, '#000000');
    //Roof
    createRect(0, gWS, wS, gWS, w, gW * 2, '#000000');
    //Left
    createRect(0, gWS, gWS, wS, gW * 2, h, '#000000');
    //Right
    createRect(wS - gWS * 2, gWS, gWS, wS, gW * 2, h, '#000000');

    function createRect(posX, posY, width, height, rWidth, rHeight, color) {
        let tile = new createjs.Shape();
        tile.graphics.beginFill(color);
        tile.graphics.drawRect(0, -gW, rWidth, rHeight);
        tile.graphics.endFill();
        this.view = tile;
        this.view.width = w;
        this.view.height = gW;
        this.view.regX = 0;
        this.view.regY = 0;

        let fixtureDef = new box2d.b2FixtureDef();
        fixtureDef.density = 1;
        fixtureDef.friction = 0.5;
        let bodyDef = new box2d.b2BodyDef();
        bodyDef.type = box2d.b2Body.b2_staticBody;
        bodyDef.position.x = posX;
        bodyDef.position.y = posY;
        fixtureDef.shape = new box2d.b2PolygonShape();
        fixtureDef.shape.SetAsBox(width, height);
        world.CreateBody(bodyDef).CreateFixture(fixtureDef);

        this.view.body = world.CreateBody(bodyDef);
        this.view.body.CreateFixture(fixtureDef);
        this.view.onTick = tick;

        views.push(this.view);
    }

    // this.view = new createjs.Bitmap("img/black.png")
    // this.view.regX = 0;
    // this.view.regY = 800;
    //
    // let roofFixDef = new box2d.b2FixtureDef();
    // roofFixDef.density = 1;
    // roofFixDef.friction = 0.5;
    // let roofBodyDef = new box2d.b2BodyDef();
    // roofBodyDef.type = box2d.b2Body.b2_staticBody;
    // roofBodyDef.position.x = 0;
    // roofBodyDef.position.y = 800 / SCALE;
    // roofFixDef.shape = new box2d.b2PolygonShape();
    // roofFixDef.shape.SetAsBox(20 / SCALE, 1000 / SCALE);
    // world.CreateBody(roofBodyDef).CreateFixture(roofFixDef);
    //
    // this.view.body = world.CreateBody(roofBodyDef);
    // this.view.body.CreateFixture(roofFixDef);
    // this.view.onTick = tick;

    // //Right Wall
    // this.rightView = new createjs.Bitmap("img/black2.png")
    // this.rightView.regX = 20;
    // this.rightView.regY = 0;
    //
    // let rightFixDef = new box2d.b2FixtureDef();
    // rightFixDef.density = 1;
    // rightFixDef.friction = 0.5;
    // let rightBodyDef = new box2d.b2BodyDef();
    // rightBodyDef.type = box2d.b2Body.b2_staticBody;
    // rightBodyDef.position.x = 1000 / SCALE;
    // rightBodyDef.position.y = 100 / SCALE;
    // rightFixDef.shape = new box2d.b2PolygonShape();
    // rightFixDef.shape.SetAsBox(20 / SCALE, 1000 / SCALE);
    // world.CreateBody(rightBodyDef).CreateFixture(rightFixDef);
    //
    // this.rightView.body = world.CreateBody(rightBodyDef);
    // this.rightView.body.CreateFixture(rightFixDef);
    // this.rightView.onTick = tick;
    //
    // //left
    // this.leftView = new createjs.Bitmap("img/black2.png")
    // this.leftView.regX = 0;
    // this.leftView.regY = 0;
    //
    // let leftFixDef = new box2d.b2FixtureDef();
    // leftFixDef.density = 1;
    // leftFixDef.friction = 0.5;
    // let leftBodyDef = new box2d.b2BodyDef();
    // leftBodyDef.type = box2d.b2Body.b2_staticBody;
    // leftBodyDef.position.x = 0;
    // leftBodyDef.position.y = 0;
    // leftFixDef.shape = new box2d.b2PolygonShape();
    // leftFixDef.shape.SetAsBox(1000 / SCALE, 20 / SCALE);
    // world.CreateBody(leftBodyDef).CreateFixture(leftFixDef);
    //
    // this.leftView.body = world.CreateBody(leftBodyDef);
    // this.leftView.body.CreateFixture(leftFixDef);
    // this.leftView.onTick = tick;

    function tick(e) {
        this.x = this.body.GetPosition().x * SCALE;
        this.y = this.body.GetPosition().y * SCALE;
    }
}
