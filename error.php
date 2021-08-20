<!doctype html>
<html lang="en_US">
<?php
require 'head.php'; ?>
<body>
<div id="page" class="ui stackable grid">
    <?php
    require 'title.php'; ?>
    <div class="six wide centered column">
        <?php
        $message = '<div class="ui center aligned centered card dark">
            <div class="content">
                <h1 id="header" class="ui red header">%s</h1>
                <div id="meta" class="meta">
                    <input class="ui centered center aligned input" value="%s" readonly>
                </div>
                <div id="description" class="description">%s</div>
                <div class="ui divider"></div>
                <div class="extra content">
                    <a data-tooltip="Home" data-inverted="basic" class="icon item" href="home.php"><i class="big green home icon"></i></a>
                    <a data-tooltip="Downloads" data-inverted="" class="icon item" href="download.php"><i class="big inverted purple download icon"></i></a>
                </div>
            </div>
        </div>';
        if (isset($_SESSION['message']) and !empty($_SESSION['message'])) {
            echo sprintf($message, $_SESSION['message'], null, null);
            $_SESSION['old_message'] = $_SESSION['message'];
            $_SESSION['message'] = '';
        } else {
            errorMsg($message);
        }

        function errorMsg($message) {
            $error = getenv('REDIRECT_STATUS');
            $requestPage = str_replace('/', '', $_SERVER['REQUEST_URI']);
            $desc = 'Unknown Error';
            switch ($error) {
                case 404:
                    $desc = 'Was not found on the server.';
                    break;
                case 401:
                    $desc = 'Requires authorization to access.';
                    break;
                case 403:
                    $desc = 'Requires you to be logged in to access.';
                    break;
                case 500:
                    $desc = 'Internal server error.';
                    break;
                default:
                    $desc = 'Unknown/Unexpected Error.';
            }
            echo sprintf($message, $error, $requestPage, $desc);
        }

        ?>
    </div>
</div>
</body>
</html>
