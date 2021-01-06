<?php
// koneklsi ke database 
$con = mysqli_connect(
    "localhost",
    "root",
    "",
    "db_phpdasar"
);

// function query
function query($query)
{
    global $con;
    // $query = "SELECT * FROM mahasiswa";
    $result = mysqli_query($con, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
