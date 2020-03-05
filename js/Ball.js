(function(window) {
		function Ball(xP, yP) {

				this.view = new createjs.Bitmap(ballImage)
				this.view.width = 64;
				this.view.regX = this.view.regY = 50;
				
				var fixDef = new box2d.b2FixtureDef();
				fixDef.density = ballDensity;
				fixDef.friction = ballFriction;
				fixDef.restitution = ballBounce;

				var bodyDef = new box2d.b2BodyDef();
				bodyDef.type = box2d.b2Body.b2_dynamicBody;
				bodyDef.position.x = xP / SCALE;
				bodyDef.position.y = yP / SCALE;
				fixDef.shape = new box2d.b2CircleShape(50 / SCALE);

				this.view.body = world.CreateBody(bodyDef);
				this.view.body.CreateFixture(fixDef);				
				this.view.onTick = tick;

				console.log(xP, yP);
			}
			function tick(e) {
				this.x = this.body.GetPosition().x * SCALE;
				this.y = this.body.GetPosition().y * SCALE;
				this.rotation = this.body.GetAngle() * (180/Math.PI);	
			}
		window.Ball = Ball;
	})(window);