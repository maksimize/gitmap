<?php

function dump($data, $before = '', $after = '', $colorize = true)
{
    echo "<br>" . $before;
    if ($colorize) {
        highlight_string(var_export($data, true));
    } else {
        echo '<pre>' . var_export($data, true) . '</pre>';
    }
    echo "<br>" . $after;
}


function ddd($data, $before = '', $after = '', $colorize = true)
{
    dump($data, $before, $after, $colorize);
    die(1);
}
