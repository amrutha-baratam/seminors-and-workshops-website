<html>
<head>
<style type="text/css">

.header

{

color:white;

background-color:maroon;

height:195px;

background-image:url("logo.png");

background-position:left;

background-repeat:no-repeat;

}

p
{

color:white;

}


</style>


</head>

<body style="background-color:#FAEBD7">

<div class="header">

<center>

<h1 align="center">KLUNIVERSITY</h1>

<p>KONERU LAKSHMAIAH EDUCATION FOUNDATION</P>

<p>Green Fields,Vaddeswaram,Guntur district</p>

<h1>Seminars and Workshops</h1>

</center>

</div>

<?php
$server="localhost";
$username="root";
$password="";
$database="mydb";

$con= new mysqli($server,$username,$password,$database) ;
if($con->connect_error){
	die("Connection failed:".$con->connect_error);
}

$selectSQL = "SELECT * FROM seminar";
$selectRes=$con->query($selectSQL);
?>

<h3 align="center">LIST OF SEMINARS</h3> 
<table border="2" align="center">
  <thead>
    <tr>
      
	<th>Seminar id</th>
	<th>Seminar name</th>
	<th>Date</th>
	<th>Venue</th>
	<th>Resourse Person</th>
	<th>Participants</th>
	
    </tr>
  </thead>
  <tbody>
    <?php
      if( $selectRes->num_rows==0 ){
        echo '<tr><td colspan="6">No Rows Returned</td></tr>';
      }else{
        while( $row = $selectRes->fetch_assoc() ){
          echo "<tr><td>{$row['sem_id']}</td><td>{$row['sem_topic']}</td><td>{$row['sem_date']}</td><td>{$row['sem_venue']}</td><td>{$row['sem_resper']}</td><td>{$row['sem_participants']}</td></tr>\n";
        }
      }
    ?>
  </tbody>
</table>
    <form action="sem_details.html">
	<input type="submit" value="Register" name="b1"/>
    </form>