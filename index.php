<!doctype html>
<html lang="en_US">
<?php
require_once 'head.php'; ?>
<body id="body">
<div id="page" class="ui stackable grid">
    <div class="sixteen wide center aligned column">

        <h1 class="ui fluid header" id="h1">Yellow<br/>Submarine</h1>
        <div id="test" class="ui black button">
            <a href="home.php">
                <button id="h11" class="ui primary icon button">GO</button>
            </a>
        </div>
    </div>
    <div class="sixteen wide center aligned column">
        <a href="download.php">
            <button class="ui huge purple button">
                <i class="white download icon"></i>Downloads
            </button>
        </a>
    </div>
    <div class="sixteen wide center aligned column">
        <a href="https://www.paypal.com/donate?hosted_button_id=REUAFVC9PPVBC" target="_blank">
            <button class="ui huge blue button">
                <i class="white paypal icon"></i>Donate
            </button>
        </a>
    </div>
</div>
<div id="login" class="ui basic mini modal login">
    <form class="ui inverted form" action="loginAction.php" method="post" autocomplete="on">
        <div class="required field">
            <input type="text" required name="email" placeholder="Username or Email"/>
        </div>
        <div class="required field">
            <input type="password" required name="password" placeholder="Password"/>
        </div>
        <button class="ui blue basic ok inverted right floated button item" name="login">
            <i class="sign-in icon"></i>
            Login
        </button>
    </form>
</div>
<footer>&copy;P.o.P Industries 2021</footer>
<script>
  document.getElementById('body').addEventListener('keypress', function(e) {
    if (e.code.toString() === 'KeyE') {
      $('#login').modal('toggle');
    }
  });
</script>
</body>
</html>
