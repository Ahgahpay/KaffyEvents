<?php
$dbhost = "localhost"; // the db’s server
$dbuser = "root"; // the db’s username
$dbpass = ""; // the password for the user
$dbname="Project"; // dataabse name


$Ename=$_GET['event_name'];
$EAddress=$_GET['event_address'];
$EDate=$_GET['event_date'];
$ETime=$_GET['event_time'];

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
$sql="INSERT INTO events(Event_Name,Event_Address,Date,Time) VALUES
										('$Ename','$EAddress','$EDate','$ETime')";

$input= mysqli_query($conn,$sql);

if(!$input){
	die('Could not insert: '.mysqli_error($conn));
}else{

	echo "Your event has been uploaded";
}
mysqli_close($conn);
?>
<html>
<a href="ViewEvents.php"><input type="button" name="view" value="View Events"> </a>
</html>