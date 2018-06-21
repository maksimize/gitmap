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

function dj($data, $before = '', $after = '', $colorize = true)
{
    header('Content-Type: application/json');
    echo json_encode($data);
    die(1);
}
