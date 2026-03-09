<?php
session_start();

if(!isset($_SESSION['admin'])){
header("Location:login.php");
}
?>

<h2>Upload ETS2 Mod</h2>

<form action="upload.php" method="post" enctype="multipart/form-data">

<input type="file" name="modfile">
<br><br>

<input type="submit" value="Upload">

</form>