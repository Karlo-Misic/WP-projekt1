<!DOCTYPE html>
<html>
<body>

<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "memori";

// Kreiranje konekcije (veze)
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
// Provjera konekcije (veze)
if ($conn->connect_error) {
    die("Spajanje nije uspjelo!: " . $conn->connect_error);
}

$sql = "SELECT user_id, username, surname, date FROM tractorusers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Ispis podataka
    while($row = $result->fetch_assoc()) {
        echo "<center> <br> ID: ". $row["user_id"]. "<br> Ime: ". $row["username"]. "<br> Prezime: " . $row["surname"] . "<br> Datum upisa:" .  $row["date"] . "</center>"; 
    }
} else {
    echo "0 upisanih u bazu";
}

$conn->close();
?>
</br>
<center> <a href ="..//TractorMemori.html"><button> Natrag </button></a></center>
</br>
</body>
</html>