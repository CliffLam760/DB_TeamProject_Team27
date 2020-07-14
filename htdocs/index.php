<?php session_start();?>
<?php
include("mysql_connect.inc.php");
?>


<!DOCTYPE html>
<html>
    
<?php
    $curr_page = "index.php";
    include("top_bar.php");
?>

<body>
  <h2>Welcome Team27!</h2>
</body>

<form action="list_overseas.php" method="post">
<input type="submit" value="list oversea"><br>
</form>

<form action="list_106_student.php" method="post">
<input type="submit" value="list 106"><br>
</form>

<form action="list_107_student.php" method="post">
<input type="submit" value="list 107"><br>
</form>

<form action="list_108_student.php" method="post">
<input type="submit" value="list 108"><br>
</form>

</html>

