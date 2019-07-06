<?php
$target_path="F:/";
$target_path=$target_path.basename($_FILES['pp']['name']);
if(move_uploaded_file($_FILES['pp']['tmp_name'],$target_path))
{
echo"Fileuploaded successfully";
}
else
{
echo"error";
}
?>