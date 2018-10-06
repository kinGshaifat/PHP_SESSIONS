<?php
session_start();
if(isset($_SESSION['UNAME']))
{

}
else
{
    header("location:login.php");

}
?>
<h1>welcome <?php $a=$_SESSION['UNAME'];
echo $a;
?> </h1>
<a href="logout.php">logout</a>