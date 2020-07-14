<?php session_start(); ?>
<?php

include("mysql_connect.inc.php");
$UniName = $mysqli->query("SELECT University_Name FROM uni_code_name_table");
?>
<!DOCTYPE html>
<html>

<?php
    $curr_page = "male_female.php";
    include("top_bar.php");
?>

<form action="male_female_result.php" method="post">

University Name:
<select name="University_Name">
<?php while ($row = $UniName->fetch_row()):?>
<option value="<?php echo $row[0]?>"><?php echo $row[0]?></option>
<?php endwhile?>
</select>

<br>Type:
<input type="radio" name="type" value="日間部學制" checked>日間部學制
<input type="radio" name="type" value="進修部學制">進修部學制
<input type="radio" name="type" value="進修學士班">進修學士班
<input type="radio" name="type" value="進修部在職專班">進修部在職專班

<br>Degree:
<input type="radio" name="degree" value="學士班"checked>學士班
<input type="radio" name="degree" value="碩士班">碩士班
<input type="radio" name="degree" value="博士班">博士班
<input type="radio" name="degree" value="副學士">副學士

<br>Year:
<input type="radio" name="year" value="106" checked>106
<input type="radio" name="year" value="107">107
<input type="radio" name="year" value="108">108

<br>Academic Year:
<input type="radio" name="uni" value="FirstYear" checked>FirstYear
<input type="radio" name="uni" value="SecondYear">SecondYear
<input type="radio" name="uni" value="ThirdYear">ThirdYear
<input type="radio" name="uni" value="FourthYear">FourthYear
<input type="radio" name="uni" value="Supersenior">Supersenior
<input type="radio" name="uni" value="Other">Other
<input type="radio" name="uni" value="Total">Total

<br>Sex:
<input type="radio" name="sex" value="male" checked>male
<input type="radio" name="sex" value="female">female

<br>
<input type="submit" value="Confirm">
</form>

</html>
