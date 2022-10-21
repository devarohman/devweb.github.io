<?php
include 'koneksidatadiri2.php'; 
    return simpan($_POST);
    function simpan($req){
        $conn = connect();
        $id = 
        $sql = "DELETE from datadiri2 WHERE id=$id";
        // echo $sql;
        if ($conn->query($sql) === TRUE) {
            echo "Data Berhasil dihapus";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }

    }
?>
