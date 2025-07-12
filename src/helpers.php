<?php

function asset(string $path): string
{
    $fullPath = 'assets/'.$path;
    $time = filemtime($fullPath);

    return '/'.$fullPath.'?v='.$time;
}
