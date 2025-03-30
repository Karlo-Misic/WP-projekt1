<?php
session_start();
include("connection.php");

if($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['username']) && isset($_POST['surname'])){
        
        $username = $_POST['username'];
        $surname= $_POST['surname'];

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
            
            $Insert = "INSERT INTO tractorusers (username, surname) values (?, ?)";
            
                $stmt = $conn->prepare($Insert);
				$stmt->bind_param("ss",$username, $surname);
                if ($stmt->execute()) {
					echo "<script>window.location.href='..//TractorMemori.html';</script>";
                }
                else {
                    echo $stmt->error;
                }
            }
    }    }
?>