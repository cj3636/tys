<!doctype html>
<html lang="en_US">
<?php require 'head.php'; ?>
<body>
    <div id="page" class="ui stackable grid">
        <?php require_once 'title.php'; ?>
        <div class="sixteen wide centered column">
            <div class="ui stackable centered center aligned cards">
                <?php ?>
            </div>
        </div>
</body>
</html>
<?php function createDownloadCard($logo, $title, $meta, $desc, $color, $file) {
    return '<div class="ui center aligned card dark">
                <div class="content">
                    <img id="downloadLogo" alt="TYS LOGO" class="right floated small ui image"
                         src="/img/' . $logo . '">
                    <div id="downloadTitle" class="header">' . $title . '</div>
                    <div id="downloadMeta" class="meta">' . $meta . '</div>
                    <div id="downloadDescription" class="description">' . $desc . '</div>
                    <div class="ui divider"></div>
                    <div class="extra content">
                        <a href="' . $file . '">
                            <div class="ui basic' . $color . 'button"><i class="download icon"></i>Download</div>
                        </a>
                    </div>
                </div>
            </div>';
}
?>
