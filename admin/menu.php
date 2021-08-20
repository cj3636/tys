<div class="sixteen wide column">
    <div class="ui stackable secondary pointing menu">
        <?php if (!isset($_SESSION['logged_in'])) {
            require_once 'C:\wamp64\www\signup.html';
            require_once 'C:\wamp64\www\login.html';
            echo '<a id="signup" class="right floated item" onclick="showSignup()"><i class="large blue user plus icon"></i>
            <div class="ui title">Sign Up</div>
        </a>
        <a id="login" class="item" onclick="showLogin()"><i class="large green user icon"></i>
            <div class="ui title">Login</div>
        </a>';
        } else {
            echo '<a id="profile" class="item" href="profile.php"><i class="large blue user circle icon"></i>
            <div class="ui title">Profile</div>
        </a>';
        }
        ?>
    </div>
    <script src="../js/title.js"></script>
</div>
<script>
  function showLogin() {
    $('.ui.basic.modal.login').modal('show');
  }

  function showSignup() {
    $('.ui.basic.modal.signup').modal('show');
  }
</script>
