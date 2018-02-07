<html>
<head>
<script>
<?php
$server="localhost";
$username="root";
$password="";
$database="mydb";

$con= new mysqli($server,$username,$password,$database) ;
if($con->connect_error){
	die("Connection failed:".$con->connect_error);
}
$id=$_POST["t1"];
$topic=$_POST["t2"];
$date=$_POST["t3"];
$venue=$_POST["t4"];
$resper=$_POST["t5"];
$part=$_POST["t6"];
$sql="insert into seminar(sem_id,sem_topic,sem_date,sem_venue,sem_resper,sem_participants) values ('$id','$topic','$date','$venue','$resper','$part')";

$con->query($sql);


$con->close();
?>
</script>
</head>

<body>

<h1>Seminar details are updated</h1>
<a href="sem_details.html">Go Back To Prev Page</a><br><br>

<a href="sem_list.php" >Display List Of Seminars</a>
</body>
</html>
