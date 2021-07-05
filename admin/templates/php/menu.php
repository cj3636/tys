<div class="sixteen wide column">
    <div class="ui stackable secondary pointing menu">
        <a id="home" class="item" href="/index.php"><i class="large green home icon"></i>
            <div class="ui title">Home</div>
        </a>
        <a id="about" class="item" href="/about.php"><i class="large blue users icon"></i>
            <div class="ui title">About Us</div>
        </a>
        <a id="help" class="item" href="/faq.php"><i class="large yellow question icon"></i>
            <div class="ui title">FAQ</div>
        </a>
        <?php
        if (!isset($_SESSION['logged_in'])) {
            require_once 'signupModal.php';
            require_once 'loginModal.php';
            echo '<a id="signup" class="right floated item" onclick="showSignup()"><i class="large blue user plus icon"></i>
            <div class="ui title">Sign Up</div>
        </a>
        <a id="login" class="item" onclick="showLogin()"><i class="large green user icon"></i>
            <div class="ui title">Login</div>
        </a>';
        } else {
            echo '<a id="profile" class="item" href="/profile.php"><i class="large blue user circle icon"></i>
            <div class="ui title">Profile</div>
        </a>';
        }
        ?>
    </div>
    <script src="/templates/js/menu.js"></script>
</div>
<script>
    function showLogin() {
        $('.ui.basic.modal.login').modal('show');
    }

    function showSignup() {
        $('.ui.basic.modal.signup').modal('show');
    }
</script>
