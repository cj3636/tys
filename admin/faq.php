<?php
require_once 'templates/php/header.php';
?>
<div class="centered eight wide column">
    <div class="ui items">
        <div class="item">
            <div class="content">
                <h2 class="ui yellow header">
                    Frequently Asked Questions
                </h2>
                <div class="ui divider"></div>
                <div class="ui styled fluid accordion">
                    <div class="title">
                        <h3 class="ui header"><i class="dropdown icon"></i>
                            Question?</h3>
                    </div>
                    <div class="content">
                        <div class="ui relaxed divided list">
                            <div class="item"><h2>Main Point.</h2>
                            </div>
                            <div class="item"><h4>Details.</h4>
                            </div>
                            <div class="item">
                                <h4><i class="blue question circle icon"></i>A <a
                                            target="_blank" href="https://optifine.net/downloads">reference</a> for more
                                    info.
                                </h4>
                                <h4><i class="yellow exclamation circle icon"></i>A warning.</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    new ClipboardJS('#copyVanilla');
    $('.ui.accordion').accordion({exclusive: false});
    $('.ui.buttons .button').on('click', function () {
        $(this).addClass('positive')
            .siblings()
            .removeClass('positive');
        $('.treemenu').toggleClass('boxed');
    });
</script>
<?php
require_once 'templates/php/footer.php';
?>
