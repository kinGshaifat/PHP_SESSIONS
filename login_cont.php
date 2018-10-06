<?php
session_start();

$uname=$_POST['uname'];
$password=$_POST['password'];

$connection=mysqli_connect('localhost','root','','user');
$sel="SELECT * FROM usertable WHERE uname='$uname' AND password='$password' ";

$rs=$connection->query($sel);

$c=mysqli_num_rows($rs);

if($c>0)
{
    $_SESSION['UNAME']=$uname;
    header("location:secure.php");

}
else{
    ?>
    <script>

alert("Incorrect username or password");
window.location="login.php";
    </script>
    <?php 
}
?>