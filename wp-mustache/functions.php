<?php

function mustache($template, $data, $options = NULL) {

    if ( is_array($options) ) {
        $generator = new Mustache_Engine($options);
    } else {
        $generator = new Mustache_Engine;
    }

    return $generator->render($template, $data);
}
