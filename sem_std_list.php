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


<?php
$server="localhost";
$username="root";
$password="";
$database="mydb";

$con= new mysqli($server,$username,$password,$database) ;
if($con->connect_error){
	die("Connection failed:".$con->connect_error);
}

$selectSQL = "SELECT * FROM std_sem";
$selectRes=$con->query($selectSQL);
?>
<body style="background-color:#FAEBD7">

<div class="header">

<center>

<h1 align="center">KLUNIVERSITY</h1>

<p>KONERU LAKSHMAIAH EDUCATION FOUNDATION</P>

<p>Green Fields,Vaddeswaram,Guntur district</p>

<h1>Seminars and Workshops</h1>

</center>

</div>

<h3 align="center">LIST OF REGISTERED STUDENTS FOR ALL SEMINARS</h3> 
<table border="2" align="center">
  <thead>
    <tr>
      
	<th>Student Id</th>
	<th>Student name</th>
	<th>Branch</th>
	<th>Email Id</th>
	<th>Phone Number</th>
	<th>Seminar Id</th>
	
    </tr>
  </thead>
  <tbody>
    <?php
      if( $selectRes->num_rows==0 ){
        echo '<tr><td colspan="6">No Rows Returned</td></tr>';
      }else{
        while( $row = $selectRes->fetch_assoc() ){
          echo "<tr><td>{$row['std_id']}</td><td>{$row['std_name']}</td><td>{$row['std_branch']}</td><td>{$row['std_email']}</td><td>{$row['std_phone']}</td><td>{$row['sem_id']}</td></tr>\n";
        }
      }
    ?>
  </tbody>
</table>
   
	<a href="">Go To Home Page</a><br>
	<a href="sem_std_reg.html">Click Here To Register For Seminar</a>
 
 