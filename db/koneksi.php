<?php


$conn = mysqli_connect("localhost", "root", "", "db_hospital");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
   
    if($result) {
        $rows = [];
        while($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    return false;

}