<?php

$target_dir = "mods/";
$target_file = $target_dir . basename($_FILES["modfile"]["name"]);

if(move_uploaded_file($_FILES["modfile"]["tmp_name"], $target_file)){
echo "Mod uploaded successfully.";
}
else{
echo "Upload failed.";
}

?>