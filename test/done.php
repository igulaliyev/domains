<?php   $request = $_SERVER['REQUEST_URI'];
$splits = explode('/', trim($request,'/'));
  echo $request . "<br />";
echo($splits[1]);
   ?>
