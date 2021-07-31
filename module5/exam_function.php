<?php
function showName(){
    echo "SHOWNAME";
}
function showNameReturn(){
    return "showNameRturn";
}

function paramshowName($title){
    return $title;
}

echo paramshowName("HEELO");

