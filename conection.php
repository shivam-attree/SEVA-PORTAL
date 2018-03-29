<?php
$con = mysql_connect("localhost","root","15bce1044@orcl");
if(!mysql_connect('localhost','root','15bce1044@orcl') || !mysql_select_db('database-management')){
	die('Not connected');
}
else
	echo "connected";
?>

<?php 
      if(!isset($_SESSION['logged_in'])) : 
      header("Location: login.php");  
?>