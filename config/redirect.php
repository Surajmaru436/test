<?php 
function redirect($path){
    $path=ROOT.str_replace('.','/',$path);
    header('Location:'.$path);
}