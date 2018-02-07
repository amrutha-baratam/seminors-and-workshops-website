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
$sql="insert into workshop(work_id,work_topic,work_date,work_venue,work_resper,work_participants) values ('$id','$topic','$date','$venue','$resper','$part')";

$con->query($sql);


$con->close();
?>
</script>
</head>

<body>

<h1>WorkShop details are updated</h1>
<a href="work_details.html">Go Back To Prev Page</a><br><br>

<a href="work_list.php" >Display List Of WorkShop</a>
</body>
</html>
