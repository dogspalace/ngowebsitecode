<?php

$server_name="localhost";
$username="id17831139_palace";
$password="Tanavi@220820";
$database_name="id17831139_dogspalace;


$conn = mysqli_connect($server_name, $username, $password, $database_name );
// now check the connection
if (!$conn) {
  die("Connection Failed:" . mysqli_connect_error());
}



if (isset($POST['join'])) {

  $Email = $_POST['Email'];
  $Date=date('Y-m-d');

  $sql_query = "INSERT INTO ngojoin (Email, Date)
	 VALUES ('$Email','$Date')";



if (mysqli_query($conn, $sql_query)) {
  header('location: index.html');
}



mysqli_close($conn);



?>