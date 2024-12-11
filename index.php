<?php 
$files=glob('config/*.php');
array_map(fn($file)=>include_once $file,$files);
if(isset($_GET['url'])){
    $url=explode('/',rtrim($_GET['url'],'/'));
}
$module=$url[0]??'user';
$file=$url[1]??'index';
$path="modules/$module/$file.php";
if(file_exists($path)){
    include_once "header.php";
    include_once $path;
    include_once "footer.php";
}else{
    include "404.php";
}
?>
