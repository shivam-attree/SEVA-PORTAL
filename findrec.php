<?php
include("conection.php");
echo "<br>";

@$course=$_REQUEST['course'];
$link = mysql_connect('localhost', 'root', '15bce1044@orcl');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('sakila');
$query="select subid,subname from subject where courseid='$course'";
$result=mysql_query($query);

?>
<select name="subject">
<option>Select Subject</option>
<?php while( $row=mysql_fetch_array($result)){ ?>
<option value='<?php=$row['subid']?>'><?php echo $row['subname']?></option>
<?php } ?>
</select>
`