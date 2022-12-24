<?php 

setcookie("name", "osama mohamed",time()+60);
setcookie("course", "PHP", time()+60);

echo '<pre>';
var_dump($_COOKIE);
echo '</pre>';

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title> Cookies </title>
</head>
<body>
    <h1> Hello </h1>    
    <?php echo "set cookies";
    if( isset($_COOKIE["name"]))
    echo " welcome ". $_COOKIE["name"]. "<br>";

    else
    echo"sorry.... Not set " . "<br>";

    setcookie("name","MESSI");
    ?>
</body>
</html>
