<?php
echo preg_replace_callback('~-([a-z])~', function ($match) {
return strtoupper($match[1]);
}, 'hello-world');
echo preg_replace_callback('~-([a-z])~', function ($match) {
    return strtoupper($match[0]);
    }, 'hello-world');
echo preg_replace_callback('~[w]~', function ($match) {
    return strtoupper($match[1]);
    }, 'hello-world');