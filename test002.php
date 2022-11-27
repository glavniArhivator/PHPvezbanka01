<?php
echo preg_replace_callback('~-([a-z][a-z])~', function ($match) {
    echo $match[0];
    echo $match[1];
    echo $match[2];
    return strtoupper($match[1]);
}, 'hello-world');
