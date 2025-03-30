<?php

 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $dbname = "memori";

 if(!$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
 {   
	die("Spajanje nije uspjelo!");
 }

 else
 {
	  echo "Uspješno spajanje!";
 }
