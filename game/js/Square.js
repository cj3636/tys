(function (window) {
    function Square(xP, yP) {
        this.view = new createjs.Bitmap("img/cube.png");
        this.view.regX = this.view.regY = 50;

        let fixDef = new box2d.b2FixtureDef();
        fixDef.density = 1;
        fixDef.friction = 0.5;
        fixDef.restitution = 0.9;
        let bodyDef = new box2d.b2BodyDef();
        bodyDef.type = box2d.b2Body.b2_staticBody;
        bodyDef.position.x = xP / SCALE;
        bodyDef.position.y = yP / SCALE;
        fixDef.shape = new box2d.b2PolygonShape();
        fixDef.shape.SetAsBox(50 / SCALE, 50 / SCALE);
        this.view.body = world.CreateBody(bodyDef);
        this.view.body.CreateFixture(fixDef);
        this.view.onTick = tick;
        console.log(xP, yP);
    }

    function tick(e) {
        this.x = this.body.GetPosition().x * SCALE;
        this.y = this.body.GetPosition().y * SCALE;
        this.rotation = this.body.GetAngle() * (180 / Math.PI);
    }

    window.Square = Square;
})(window);