<?php
//koneksi ke database ============================================================================
$conn = mysqli_connect("localhost","root","","mypegawai");
//umum ===========================================================================================
function query ($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows [] = $row;
    } return $rows;
}
//pegawai =========================================================================================
function tambahpegawai ($data) {
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $no_hp = htmlspecialchars($data["no_hp"]);
    $hire_date = htmlspecialchars($data["hire_date"]);
    $id_departemen = htmlspecialchars($data["id_departemen"]);
    $id_job = htmlspecialchars($data["id_job"]);
    $query = "INSERT INTO pegawai VALUES ('','$nama','$email','$no_hp','$hire_date','$id_departemen','$id_job')";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
function hapuspegawai ($id){
    global $conn;
    $query = "DELETE FROM pegawai WHERE id_pegawai = $id";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
function ubahpegawai($data){
    global $conn;
    $id_pegawai = htmlspecialchars($data["id_pegawai"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $no_hp = htmlspecialchars($data["no_hp"]);
    $hire_date = htmlspecialchars($data["hire_date"]);
    $id_departemen = htmlspecialchars($data["id_departemen"]);
    $id_job = htmlspecialchars($data["id_job"]);
    $query = "UPDATE pegawai SET nama = '$nama', email ='$email', no_hp = '$no_hp', hire_date = '$hire_date',
                id_departemen = '$id_departemen', id_job = '$id_job' WHERE id_pegawai = $id_pegawai";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
//departemen =========================================================================================
function tambahdepartemen ($data) {
    global $conn;
    $departemen_name = htmlspecialchars($data["departemen_name"]);
    $query = "INSERT INTO departemen VALUES ('','$departemen_name')";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
function ubahdepartemen($data){
    global $conn;
    $id_departemen = htmlspecialchars($data["id_departemen"]);
    $departemen_name = htmlspecialchars($data["departemen_name"]);
    $query = "UPDATE departemen SET departemen_name = '$departemen_name' WHERE id_departemen = $id_departemen";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
function hapusdepartemen ($id){
    global $conn;
    $query = "DELETE FROM departemen WHERE id_departemen = $id";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
//jobs =========================================================================================
function tambahjob ($data) {
    global $conn;
    $job_title = htmlspecialchars($data["job_title"]);
    $query = "INSERT INTO jobs VALUES ('','$job_title')";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
function hapusjob ($id){
    global $conn;
    $query = "DELETE FROM jobs WHERE id_job = $id";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
function ubahjob($data){
    global $conn;
    $id_job = htmlspecialchars($data["id_job"]);
    $job_title = htmlspecialchars($data["job_title"]);
    $query = "UPDATE jobs SET job_title = '$job_title' WHERE id_job = $id_job";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
?>