<?php session_start(); ?>

<input type="button" onclick="history.back()" value="back" ><br>
<?php
include("mysql_connect.inc.php");
$UniName =  $_POST["University_Name"];
$sex =  $_POST["sex"];
$year =  $_POST["year"];
$degree =  $_POST["degree"];
$uni =  $_POST["uni"];
$type =  $_POST["type"];
$DB = "_student_";
$str = "University_Name, Country, Type, Degree";
$max = 4;

if($year == "106"){$DB = "106".$DB;
}else if($year == "107"){$DB = "107".$DB;
}else{$DB = "108".$DB;}

if($uni == "FirstYear")
{
	if($sex == "male")
	   $str = $str.", FirstYear_Male";
	else if($sex == "female")
	   $str = $str.", FirstYear_Female";

	$max +=1;
}else if($uni == "SecondYear")
{
	if($sex == "male")
	   $str = $str.", SecondYear_Male";
	else if($sex == "female")
	   $str = $str.", SecondYear_Female";

	$max +=1;
}else if($uni == "ThirdYear")
{
	if($sex == "male")
	   $str = $str.", ThirdYear_Male";
	else if($sex == "female")
	   $str = $str.", ThirdYear_Female";

	$max +=1;
}else if($uni == "FourthYear")
{
	if($sex == "male")
	   $str = $str.", FourthYear_Male";
	else if($sex == "female")
	   $str = $str.", FourthYear_Female";

	$max +=1;
}else if($uni == "Supersenior")
{
	if($sex == "male")
	   $str = $str.", Supersenior_Male";
	else if($sex == "female")
	   $str = $str.", Supersenior_Female";

	$max +=1;
}else if($uni == "Other")
{
	if($sex == "male")
	   $str = $str.", FifthYear_Male, SixthYear_Male, SeventhYear_Male";
	else if($sex == "female")
	   $str = $str.", FifthYear_Female, SixthYear_Female, SeventhYear_Female";

	$max +=3;
}else if($uni == "Total")
{
	if($sex == "male")
	   $str = $str.", Total_Students, Male";
	else if($sex == "female")
	   $str = $str.", Total_Students, Female";

	$max +=2;
}
// where $DB.University_Name = '$UniName' and $DB.Type = '$type' and $DB.Degree = '$degree'
$data = $mysqli->query("select $str from $DB where $DB.University_Name = '$UniName' and $DB.Type = '$type' and $DB.Degree = '$degree'");
?>
<?php $row = $data->fetch_fields(); ?>
<table border="1">
<tr>
<?php for($i=0;$i<$max;$i++)
{
?>
<td><?php echo $row[$i]->name ?></td>
<?php }?>
</tr>
<?php while ($row = $data->fetch_row()): ?>
<tr>
<?php for($i=0;$i<$max;$i++)
{
?>
<td><?php echo $row[$i] ?></td>
<?php }?>
</tr>
<?php endwhile ?>


</table>
