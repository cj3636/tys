<!doctype html>
<html lang="en_US">
<?php require 'head.php'; ?>
<body>
<div id="page" class="ui stackable grid">
    <div class="sixteen wide column"></div>
    <?php require 'title.php'; ?>
    <div class="sixteen wide column">
        <?php require 'menu.php'; ?>
    </div>
</div>
<br>
<div class="ui stackable grid">
    <div class="sixteen wide centered column">
        <div class="ui stackable centered center aligned cards">
            <div class="ui center aligned card dark">
                <div class="content">
                    <div id="downloadTitle" class="header"></div>
                    <div id="downloadMeta" class="meta"></div>
                    <div id="downloadDescription"
                    ="description"></div>
            </div>
            <div class="extra content">
                <div class="ui basic green button"><i class="download icon"></i>Download</div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
