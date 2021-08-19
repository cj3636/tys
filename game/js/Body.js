(function (window) {
    function Body(details) {
        this.details = details = details || {};

        // Create the definition
        this.definition = new box2d.b2BodyDef();

        // Set up the definition
        for (var k in this.definitionDefaults) {
            this.definition[k] = details[k] || this.definitionDefaults[k];
        }
        this.definition.position = new box2d.b2Vec2(details.x || 0, details.y || 0);
        this.definition.linearVelocity = new box2d.b2Vec2(details.vx || 0, details.vy || 0);
        this.definition.userData = this;
        this.definition.type = details.type == "static" ? box2d.b2Body.b2_staticBody : box2d.b2Body.b2_dynamicBody;

        // Create the Body
        this.body = world.CreateBody(this.definition);

        // Create the fixture
        this.fixtureDef = new box2d.b2FixtureDef();
        for (var l in this.fixtureDefaults) {
            this.fixtureDef[l] = details[l] || this.fixtureDefaults[l];
        }


        details.shape = details.shape || this.defaults.shape;

        switch (details.shape) {
            case "circle":
                details.radius = details.radius || this.defaults.radius;
                this.fixtureDef.shape = new box2d.b2CircleShape(details.radius);
                break;
            case "polygon":
                this.fixtureDef.shape = new box2d.b2PolygonShape();
                this.fixtureDef.shape.SetAsArray(details.points, details.points.length);
                break;
            case "block":
            default:
                details.width = details.width || this.defaults.width;
                details.height = details.height || this.defaults.height;

                this.fixtureDef.shape = new box2d.b2PolygonShape();
                this.fixtureDef.shape.SetAsBox(details.width / 2,
                    details.height / 2);
                break;
        }

        this.body.CreateFixture(this.fixtureDef);
    }


    Body.prototype.defaults = {
        shape: "block",
        width: 5,
        height: 5,
        radius: 2.5
    };

    Body.prototype.fixtureDefaults = {
        density: 2,
        friction: 1,
        restitution: 0.2
    };

    Body.prototype.definitionDefaults = {
        active: true,
        allowSleep: true,
        angle: 0,
        angularVelocity: 0,
        awake: true,
        bullet: false,
        fixedRotation: false
    };
    window.Body = Body;
})(window);