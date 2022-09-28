<?php 
$servername="localhost";
$username="root";
$password="";
$database="db_mhs";

//create connection
$koneksi = mysqli_connect($servername,$username,$password,$database);

//check connection
if(!$koneksi){
	die("Connection failed: ".mysqli_connect_error());
}
 ?>


