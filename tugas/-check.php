<html lang="en">
<head>
    <title>Koneksi Database MySQL</title>
</head>
<body>
    <h1>Demo Koneksi database MySQL</h1>
    <?php
    $con = mysqli_connect("localhost","root","","myDB");
    
    // Check Connection
    if (myslqi_connect_errno()){
        echo "Failed to Connect to MySQL: ", myslqi_connect_error();
        exit;
    }
    ?>
</body>
</html>