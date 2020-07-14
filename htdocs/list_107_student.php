<?php session_start(); ?>

<input type="button" onclick="history.back()" value="back" ><br>
<?php
include("mysql_connect.inc.php");

$max = 24;

$data = $mysqli->query("select * from 107_student_");
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
