<?php
session_start();
if(isset($_POST['submit']))
{
$_SESSION['user']=$_POST['un'];
$_SESSION['profile']=$_POST['prof'];
}
?>
<html>
<body>
<form method="post">
Enter name<input type="text" name="un"/><br/>
Enter profile<input type="text" name="prof"/><br/>
<input type="submit" value="store in session"  name="submit"/>
</form>
</body>
</html>