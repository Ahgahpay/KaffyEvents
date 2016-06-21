<!doctype html>
<html>
	<head>
		<title>View events</title>
	</head>
	<body>
	
	
	<?php
	$var = date('H');
	if($var <=12 )
	{
		echo "<h1>Good Morning!</h1>";
		echo "<br />";
		echo "<h2>Here are the upcoming Events</h2>";
	}
	elseif ($var >=12 and $var < 18)
	{
		echo "<h1>Good Afternoon</h1>";
		echo "<br />";
		echo "<h2>Here are the upcoming Events</h2>";
	}
	else
	{
		echo "Good Evening";
		echo "<br />";
		echo "<h2>Here are the upcoming Events</h2>";
	}
	
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

mysqli_close($conn);
?>

	</body>
</html>