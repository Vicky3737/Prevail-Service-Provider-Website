<?php
    $servername = "localhost";
    $username = "root";
    $pass = "";
    $dbname = "prevail";

    $conn = mysqli_connect($servername,$username,$pass,$dbname);
    if(!$conn)
    {
        echo "Connection Failed";
    }
?>