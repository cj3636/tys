<div class="ui basic mini modal login">
    <h1>Welcome Back!</h1>
    <form class="ui inverted form" action="/loginAction.php" method="post" autocomplete="on">
        <div class="required field">
            <input type="text" required name="email" placeholder="Username or Email"/>
        </div>
        <div class="required field">
            <input type="password" required name="password" placeholder="Password"/>
        </div>
        <a href="/forgot.php" class="ui orange basic inverted left floated button icon" data-inverted=""
             data-tooltip="Forgot your password?" data-position="right center">
            <i class="question icon"></i>
        </a>
        <button class="ui blue basic ok inverted right floated button item" name="login">
            <i class="sign-in icon"></i>
            Login
        </button>
    </form>
</div>
