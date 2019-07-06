<?php
session_start();
if(isset($_POST['sub']))
{
$_SESSION['user']=$_POST['un'];
$_SESSION['profile']=$_POST['prof'];
}
?>
<html>
<body>
<form method="post">
Enter Name<input type="text" name="un"/><br/>
Enter Profile<input type="text" name="prof"/><br/>
<input type="submit" value="store in session" name="sub"/>
</form>
</body>
</html>