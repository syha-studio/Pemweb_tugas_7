<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myPegawai";

//Create Connection
$conn = mysqli_connect($servername,$username,$password, $dbname);

//Check Connection
if (!$conn) {
    die ("Connection failed: " . myslqi_connect_error());
}

//Create Table
$sql = "CREATE TABLE departemen (
    id_departemen INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    departemen_name VARCHAR(200) NOT NULL
    )";
if (mysqli_query($conn, $sql)){
    echo "Table departemen Created successfully <br>";
} else {
    echo "Error creating Table: " . mysqli_error($conn);
}
$sql = "CREATE TABLE jobs (
    id_job INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    job_title VARCHAR(200) NOT NULL
    )";
if (mysqli_query($conn, $sql)){
    echo "Table jobs Created successfully <br>";
} else {
    echo "Error creating Table: " . mysqli_error($conn);
}
$sql = "CREATE TABLE pegawai (
    id_pegawai INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(200) NOT NULL,
    email VARCHAR(50) NOT NULL,
    no_hp VARCHAR(20) NOT NULL,
    hire_date DATE NOT NULL,
    id_departemen INT(10) UNSIGNED NOT NULL,
    CONSTRAINT `fk_dept` FOREIGN KEY (id_departemen) REFERENCES departemen(id_departemen),
    id_job INT(10) UNSIGNED NOT NULL,
    CONSTRAINT `fk_job` FOREIGN KEY (id_job) REFERENCES jobs(id_job)
    )";
if (mysqli_query($conn, $sql)){
    echo "Table pegawai Created successfully";
} else {
    echo "Error creating Table: " . mysqli_error($conn);
}
mysqli_close($conn);
?>