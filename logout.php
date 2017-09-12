<?php


session_start();

session_unset();

session_destroy();


if(!isset($_SESSION['id']))
    
{
    
    echo "logged out";
    header("location:index.php");
    
}
else
{
    
    echo "erorr";
    
}

?>
