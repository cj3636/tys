<?php
require_once 'templates/php/header.php';
?>
<div class="five wide centered column">
    <div class="ui center aligned inverted segment">
        <h1 class="header">
            <?php
            if (isset($_SESSION['message']) and !empty($_SESSION['message'])) {
                echo $_SESSION['message'];
            } else {
                echo "An unknown error has occurred.";
            }
            ?>
        </h1>
    </div>
</div>
<?php
require_once 'templates/php/footer.php';
?>
