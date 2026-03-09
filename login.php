<?php
session_start();

$username="admin";
$password="0007";

if($_POST){

if($_POST['user']==$username && $_POST['pass']==$password){

$_SESSION['admin']=true;

header("Location:index.php");

}
else{

echo "Wrong login";

}

}
?>

<form method="post">
Username:<br>
<input type="text" name="user"><br><br>

Password:<br>
<input type="password" name="pass"><br><br>

<input type="submit" value="Login">

</form>
