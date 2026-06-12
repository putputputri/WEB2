<?php
$conn = mysqli_connect("localhost", "root", "");
mysqli_select_db($conn, "lat_dbase"); // mengaktifkan database

//membuat tabel
$sql = "CREATE TABLE tbl_mhs    
(
    mhsID int NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(mhsID),
    FirstName varchar(15),
    LastName varchar(15),
    Age int
)";
mysqli_query($conn, $sql);

// input data
$input = mysqli_query($conn, "INSERT INTO tbl_mhs(FirstName, LastName, Age) 
                      VALUES('Anjar','Prabowo',25)");
?>