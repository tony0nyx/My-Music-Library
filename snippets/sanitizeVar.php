<?php
function sanitzeVar($var){
    $var = trim($var);
    $var = strip_tags($var);
    $var = htmlspecialchars($var);
    return $var;
}