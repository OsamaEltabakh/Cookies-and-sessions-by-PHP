<?php
session_start();

// echo session_id()."<br>";

if (isset($_SESSION['page_count']))
$_SESSION['page_count']+=1;
else
$_SESSION['page_count']=1;

echo "you visted " .$_SESSION['page_count']." times"."<br>";

if ($_SESSION['page_count']>5)
echo "<p style='color:blue'>you are unique user</p>";

$_SESSION['country']='egypt';
$_SESSION['coin']='pound';

// unset($_SESSION['country']);
// session_destroy();
// $id=$_SESSION['PHPSESSID'];

setcookie('PHPSESSID',"",time()-1000,'/');
// unset($_SESSION['PHPSESSID']);
session_regenerate_id();
// unset($_SESSION['PHPSESSID']);
// session_destroy();

session_regenerate_id();
// session_destroy();

// session_destroy();



echo"<pre>";
var_dump($_SESSION);
echo"</pre>";

setcookie('name','Osama',time()+30);


if (isset($_COOKIE['name']))
echo "hi" ." ". $_COOKIE["name"]. "<br/>";
else
echo " not recognized";

setcookie('name','osama');

echo"<pre>";
var_dump($_COOKIE);
echo"</pre>";

setcookie('gender','osama',time()-1);


?>