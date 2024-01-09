<?php
    include 'conn.php';
    $id=$_GET['id'];

    $sql="DELETE FROM daily WHERE id=$id";
    $result=mysqli_query($conn, $sql);

    if($result){
        header("location: ./index.php");
    }

?>