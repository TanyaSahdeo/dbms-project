<?php
$target_path="E:/ ";
$target_path=$target_path.basename($_FILES['filetoupload']['name']);
if(move_uploaded_file($_FILES['filetoupload']['tmp_name'],$target_path))
{
echo "FIle upload successfull";
}
else
{
  echo "error:";
}
?>