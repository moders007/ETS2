<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>ETS2 Mods Download</title>

<style>

body{
font-family:Arial;
background:#111;
color:white;
text-align:center;
}

header{
background:#ff6600;
padding:20px;
font-size:30px;
}

.mods{
display:flex;
flex-wrap:wrap;
justify-content:center;
}

.mod{
background:#222;
padding:15px;
margin:10px;
border-radius:8px;
width:220px;
}

a{
color:#00ffcc;
text-decoration:none;
}

</style>
</head>

<body>

<header>ETS2 Mods Download Hub</header>

<h2>Available Mods</h2>

<div class="mods">

<?php

$folder="mods/";
$files=scandir($folder);

foreach($files as $file){

if($file!="." && $file!=".."){

echo "<div class='mod'>";
echo "<h3>$file</h3>";
echo "<a href='mods/$file'>Download</a>";
echo "</div>";

}

}

?>

</div>

<br>

<?php
// Upload button only visible if owner logged in
if(isset($_SESSION['admin'])){
echo "<a href='admin.php'>Upload Mods</a>";
}
?>

</body>
</html>