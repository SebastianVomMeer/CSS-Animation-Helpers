<?php
/**
 * CSS Animation Helpers
 *
 * A small numbers of function to simplify writing of CSS Animations
 *
 * @author Sebastian Gaul <sebastian@dev.mgvmedia.com>
 * @link http://sgaul.de
 */

function css_animation($keyframe, $duration = '10s', $iterationCount = 'infinite', $direction = 'alternate') {
    return
       '-webkit-animation-name: ' . $keyframe . ';
        -webkit-animation-duration: ' . $duration . ';
        -webkit-animation-iteration-count: ' . $iterationCount . ';
        -webkit-animation-direction: ' . $direction . ';
        -moz-animation-name: ' . $keyframe . ';
        -moz-animation-duration: ' . $duration . ';
        -moz-animation-iteration-count: ' . $iterationCount . ';
        -moz-animation-direction: ' . $direction . ';
        -ms-animation-name: ' . $keyframe . ';
        -ms-animation-duration: ' . $duration . ';
        -ms-animation-iteration-count: ' . $iterationCount . ';
        -ms-animation-direction: ' . $direction . ';';
}

function css_keyframes($name, $body) {
    return
       '@-webkit-keyframes ' . $name . ' {' . $body . '}
        @-moz-keyframes ' . $name . ' {' . $body . '}
        @-ms-keyframes ' . $name . ' {' . $body . '}';
}
