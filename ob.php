<?php

//start php -doutput_buffering=32 -dimplicit_flush=1 -S127.0.0.1:8000

ob_start(function ($str) {
    return strtoupper($str);
}, 10);
ob_start(function ($str) {
    $count = str_word_count($str);
    return "<div>$str - в буфер поместилось $count слов </div>";
}, 4);

echo "test";
sleep (2);
echo " ob";
sleep (2);
echo " right now";
sleep (2);
echo " also";
sleep (2);
echo " that's amazing";
