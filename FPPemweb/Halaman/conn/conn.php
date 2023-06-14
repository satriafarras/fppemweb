<?php 

function connection(){
   
   $dbServer = 'localhost';
   $dbUser = 'fiks3768_fiksneak';
   $dbPass = 'Satriadewa123';
   $dbName = "fiks3768_fiksneak";

   $conn = mysqli_connect($dbServer, $dbUser, $dbPass);

   if(! $conn) {
	die('Koneksi gagal: ' . mysqli_error());
   }
   //memilih database yang akan dipakai
   mysqli_select_db($conn,$dbName);
	
   return $conn;
}