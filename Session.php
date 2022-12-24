<?php

session_start();


    

echo '<pre>';
var_dump($_SESSION);
echo '</pre>';

if (isset($_SESSION['page_count'])) {
    $_SESSION['page_count'] += 1;

} else {
    $_SESSION['page_count'] = 1;


}
$_SESSION['country'] = 'Egypt';

echo "you visited my web site " . $_SESSION['page_count']." times" . "<br>" ;

if ($_SESSION['page_count'] >10 ){

    echo "thank you for visiting our website <span style='color:red'> 10 </span> times";

}

;
unset($_SESSION['country']);

setcookie('PHPESSID','',time()-1);
session_regenerate_id() ;


echo"<pre>";
var_dump($_SESSION);
echo"</pre>";

setcookie('name','osama',time()+60);

?>



