<div class="four wide centered column">
    <div class="card">
        <div class="content">
            <div class="header">
                <?php
                $username = $_SESSION['username'];
                $email = $_SESSION['email'];
                $active = $_SESSION['active'];
                echo $username ?>
            </div>
            <div class="meta">
                <?php echo $email ?>
            </div>
            <div class="description">
                <?php
                if (isset($_SESSION['message'])) {
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                }
                ?>
            </div>
        </div>
        <div class="extra content">
            <?php
            if (!$active) {
                echo
                '<div class="info">
              Account is unverified, please confirm your email by clicking
              on the email link!
              </div>';
            }
            ?>
        </div>
        <div class="extra content">
            <div class="ui two buttons">
                <a class="ui basic button" href="?p=logout">Log Out</a>
            </div>
        </div>
    </div>
</div>
