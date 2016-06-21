<?php 
$dbhost = 'localhost'; 
$dbuser = 'root'; 
$dbpass = '';
$db= 'Project';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db); 
if(!$conn ) 
{ 
	die('Could not connect: ' . mysqli_error());
}
$sql = 'SELECT Event_Name,Event_Address,
				Date,Time 
		FROM events';
//mysqli_select_db('project'); 
$retval = mysqli_query($conn,$sql); 
if(! $retval )
{
	die('Could not get data: ' . mysqli_error($conn)); 
}
while($row = mysqli_fetch_assoc($retval)) 
{ echo "Event Name :{$row['Event_Name']} <br> ".
		"Event Address: {$row['Event_Address']} <br> ".
		"Date: {$row['Date']} <br> ".
		"Time : {$row['Time']} <br> ". 
		"--------------------------------<br>"; } 
echo "Fetched data successfully\n"; 
mysqli_close($conn);
?>