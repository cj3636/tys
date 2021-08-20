<?php
require_once ROOT_PATH . 'templates/php/header.php';
?>
<div class="four wide centered column">
    <div class="ui center aligned inverted segment">
        <h1 class="header">Success</h1>
        <h2>
            <?php if (isset($_SESSION['message']) and !empty($_SESSION['message'])) {
                echo $_SESSION['message'];
            }
            ?>
        </h2>
    </div>
</div>
<?php require_once ROOT_PATH . 'templates/php/footer.php';
?>
