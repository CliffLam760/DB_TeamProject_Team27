<?php session_start(); ?>

<input type="button" onclick="history.back()" value="back" ><br>
<?php
include("mysql_connect.inc.php");
$UniName =  $_POST["University_Name"];
$sex =  $_POST["sex"];
$area =  $_POST["area"];
$year =  $_POST["year"];
$degree =  $_POST["degree"];
$str = "Academic_Year, University_Name, Department, Degree";
$max = 4;

if($area == "oversea")
{
	if($sex == "male")
	   $str = $str.", Overseas_Male";
	else if($sex == "female")
	   $str = $str.", Overseas_Female";
	else 
	   $str = $str.", Overseas_Total";
	$max +=1;
}
else if($area == "HKMAC")
{
	if($sex == "male")
	   $str = $str.", HKMAC_Male";
	else if($sex == "female")
	   $str = $str.", HKMAC_Female";
	else 
	   $str = $str.", HKMAC_Total";
	$max +=1;
}


$data = $mysqli->query("select $str from overseas where overseas.University_Name = '$UniName' and overseas.Academic_Year = '$year' and overseas.Degree = '$degree'");
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
