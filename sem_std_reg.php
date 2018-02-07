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
$name=$_POST["t2"];
$branch=$_POST["t3"];
$email=$_POST["t4"];
$phone=$_POST["t5"];
$semid=$_POST["t6"];
echo($id);
$sql="insert into std_sem(std_id,std_name,std_branch,std_email,std_phone,sem_id) values ('$id','$name','$branch','$email','$phone','$semid')";

$con->query($sql);

$con->close();
?>
</script>
</head>

<body>

<h1>Student is successfully registered</h1>
<a href="sem_list.php">Go Back To Prev Page(List Of Seminars)</a><br><br>

<a href="" >Display Registered Students</a>
</body>
</html>
