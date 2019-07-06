<?php
  $conn=mysqli_connect("localhost","root","","tourism");
  $sql="Select * from book_city";
  $result= mysqli_query($conn,$sql);
  while($row = mysqli_fetch_array($result)){
  echo "$row[book_id]";
  echo "$row[username]";
}
  ?>