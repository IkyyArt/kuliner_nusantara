<?php
date_default_timezone_set('Asia/Jakarta');

$servername = "sql101.infinityfree.com";
$username = "if0_40853086";
$password = "aftstS1gigES";
$db = "if0_40853086_kulinernusantara"; //nama database

//create connection
$conn = new mysqli($servername,$username,$password,$db);

//check apakah ada error connection
if($conn->connect_error){
	//jika ada, hentikan script dan tampilkan pesan error
	die("Connection failed : ".$conn->connect_error);
}

//echo "Connected successfully<hr>";
?>
