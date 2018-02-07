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

$selectSQL = "SELECT * FROM workshop";
$selectRes=$con->query($selectSQL);
?>
<h3 align="center">LIST OF WorkShops</h3> 
<table border="2" align="center">
  <thead>
    <tr>
      
	<th>WorkShop id</th>
	<th>WorkShop name</th>
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
          echo "<tr><td>{$row['work_id']}</td><td>{$row['work_topic']}</td><td>{$row['work_date']}</td><td>{$row['work_venue']}</td><td>{$row['work_resper']}</td><td>{$row['work_participants']}</td></tr>\n";
        }
      }
    ?>
  </tbody>
</table>
    <form action="work_details.html">
	<input type="submit" value="Register" name="b1"/>
    </form>