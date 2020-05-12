<!doctype html>
<html lang="en_US">
<?php
require 'head.php';
?>
<body>
<div id="page" class="ui stackable grid">
    <div class="five wide center aligned column">
        <div class="content" id="bc">
            <div class="ui inverted divider"></div>
            <h1 id="white" class="inverted header">
                Seizure Warning
            </h1>
            <p id="white" class="left aligned description">
                A very small percentage of people may experience a seizure when exposed to certain visual images,
                including flashing lights or visual patterns. Even people who have no history of seizures or epilepsy
                may have an undiagnosed condition that can cause these "photosensitive epileptic seizures" while
                watching video games.
                <br>
                <br>
                These seizures may have a variety of symptoms, including lightheadedness, altered vision, eye or face
                twitching, jerking or shaking of arms or legs, disorientation, confusion, or momentary loss of
                awareness. Seizures may also cause loss of consciousness or convulsions that can lead to injury from
                falling down or striking nearby objects.
                <br>
                <br>
                Immediately stop viewing and consult a doctor if you experience any of these symptoms. Parents should
                watch for or ask their children about the above symptoms. Children and teenagers are more likely than
                adults to experience these seizures.
                <br>
                The risk of photosensitive epileptic seizures may be reduced by taking the following precautions:
                <br>
                <br>
            </p>
            <div id="white" class="ui left aligned bulleted list">
                <div class="item">View in a well-lit room</div>
                <div class="item">View with some distance from the image so that it fills less of one's field of
                    vision
                </div>
                <div class="item">If you or any of your relatives have a history of seizures or epilepsy, it is
                    recommended that you
                    consult a doctor before viewing.
                </div>
                <div class="item">Warranty</div>
            </div>
            <div class="ui inverted divider"></div>
        </div>
        <button class="ui secondary button"><a href="https://en.wikipedia.org/wiki/Causes_of_seizures" target="_blank">Read More</a></button>
        <br>
        <br>
        <button class="ui black button"><a href="index.php" target="_blank">Home</a></button>
    </div>
</body>
<script>
    function openModal() {
        $('.ui.modal')
            .modal('show')
        ;
    }
</script>
</html>
