<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

//Create Connection
$conn = mysqli_connect($servername,$username,$password, $dbname);
//Check Connection
if (!$conn) {
    die ("Connection failed: " . myslqi_connect_error());
}

$sql = "INSERT INTO liga (kode, negara, champion)
VALUES ('Jer', 'Jerman','4'),('Spa','Spanyol','3'),
('Eng','English','3')";

if (mysqli_query($conn, $sql)){
    echo "New Record Created successfully";
} else {
    echo "Error: ", $sql, "<br>", mysqli_error($conn);
}

mysqli_close($conn);
?>