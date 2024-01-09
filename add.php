<?php
$title=$_POST['title'];

include 'conn.php';
$cnt = 1;
$sql="INSERT INTO daily(title)VALUES('$title')";

$result=mysqli_query($conn, $sql);

if($result){
    header("location: ./index.php");
}
else{
    // echo "Sorry We Can't Connect";
}

?>