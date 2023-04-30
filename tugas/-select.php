<html lang="en">
<head>
    <title>Isi Database</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";
//Create Connection
$conn = mysqli_connect($servername,$username,$password,$dbname);
//Check Connection
if (!$conn) {
    die ("Connection failed: " . myslqi_connect_error());
}

$sql = "SELECT kode, negara, champion FROM liga";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0){
    while ($row = $result->fetch_assoc()){
        echo "Kode: ", $row["kode"], " - Negara: ",
        $row["negara"]," ", $row["champion"], "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

</body>
</html>