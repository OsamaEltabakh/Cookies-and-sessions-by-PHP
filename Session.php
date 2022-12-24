<?php

session_start();


    

echo '<pre>';
var_dump($_SESSION);
echo '</pre>';

if (isset($_SESSION['page_count'])) {
    $_SESSION['page_count'] += 1;

} else {
    $_SESSION['page_count'] = 1;

$_SESSION['count'] = 1 ;
}

echo "you visited my web site " . $_SESSION['page_count']." times" . "<br>" ;

if ($_SESSION['page_count'] >10 ){

    echo "thank you for visiting our website <span style='color:red'> 10 </span> times";

}

$_SESSION['country'] = 'Egypt';
unset($_SESSION['country']);

setcookie('PHPESSID','m9brah4915t36afginjr7ftoit',time()-1);

echo"<pre>";
var_dump($_SESSION);
echo"</pre>";

setcookie('name','osama',time()+60);

?>



