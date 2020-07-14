<?php session_start(); ?>
<?php

include("mysql_connect.inc.php");
$UniName = $mysqli->query("SELECT University_Name FROM uni_code_name_table");
?>
<!DOCTYPE html>
<html>

<?php
    $curr_page = "overseas.php";
    include("top_bar.php");
?>

<form action="overseas_result.php" method="post">

University Name:
<select name="University_Name">
<?php while ($row = $UniName->fetch_row()):?>
<option value="<?php echo $row[0]?>"><?php echo $row[0]?></option>
<?php endwhile?>
</select>

<br>Year:
<input type="radio" name="year" value="106" checked>106
<input type="radio" name="year" value="107">107
<input type="radio" name="year" value="108">108

<br>Sex:
<input type="radio" name="sex" value="male" checked>male
<input type="radio" name="sex" value="female">female
<input type="radio" name="sex" value="Totalsex">Total

<br>Area:
<input type="radio" name="area" value="oversea" checked>oversea
<input type="radio" name="area" value="HKMAC">HKMAC

<br>Degree:
<input type="radio" name="degree" value="學士班"checked>學士班
<input type="radio" name="degree" value="碩士班">碩士班
<input type="radio" name="degree" value="博士班">博士班
<input type="radio" name="degree" value="五專">五專
<br>
<input type="submit" value="Confirm">
</form>

</html>
