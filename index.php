<!doctype html>
<html lang="en_US">
<?php require_once 'head.php'; ?>
<style>
  @media (pointer: fine) {
    body {
      /*background-color: linear-gradient(#14534a, #6c7b50);*/
      background-image:
      url("img/px/6.png"),
      url("img/px/5.png"),
      url("img/px/4.png"),
      url("img/px/3.png"),
      url("img/px/2.png"),
      url("img/px/1.png"),
      url("img/px/0.png");
      background-repeat: no-repeat;
      background-size: 125%;
      /*background-size: 120%;*/
      background-position: 50% 50%;
    }
  }
</style>
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
      (function() {
        document.addEventListener('mousemove', parallax);
        const elem = document.querySelector('body');

        function parallax(e) {
          let _w = window.innerWidth / 2;
          let _h = window.innerHeight / 2;
          let _mouseX = e.clientX;
          let _mouseY = e.clientY;
          let _depth1 = `${50 - (_mouseX - _w) * 0.01}% ${50 - (_mouseY - _h) * 0.01}%`;
          let _depth2 = `${50 - (_mouseX - _w) * 0.02}% ${50 - (_mouseY - _h) * 0.02}%`;
          let _depth3 = `${50 - (_mouseX - _w) * 0.03}% ${50 - (_mouseY - _h) * 0.03}%`;
          let _depth4 = `${50 - (_mouseX - _w) * 0.04}% ${50 - (_mouseY - _h) * 0.04}%`;
          let _depth5 = `${50 - (_mouseX - _w) * 0.05}% ${50 - (_mouseY - _h) * 0.05}%`;
          let _depth6 = `${50 - (_mouseX - _w) * 0.06}% ${50 - (_mouseY - _h) * 0.06}%`;
          let _depth7 = `${50 - (_mouseX - _w) * 0.07}% ${50 - (_mouseY - _h) * 0.07}%`;
          let x = `${_depth7}, ${_depth6}, ${_depth5}, ${_depth4}, ${_depth3}, ${_depth2}, ${_depth1}`;
          console.log(x);
          elem.style.backgroundPosition = x;
        }
      })();
    </script>
</body>
</html>
