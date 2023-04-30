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

//Create Table
$sql = "CREATE TABLE buku_tamu (
    id_bt INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(200) NOT NULL,
    email VARCHAR(50) NOT NULL,
    isi TEXT NOT NULL
    )
    ";
if (mysqli_query($conn, $sql)){
    echo "Table Created successfully";
} else {
    echo "Error creating Table: " . mysqli_error($conn);
}
mysqli_close($conn);
?>