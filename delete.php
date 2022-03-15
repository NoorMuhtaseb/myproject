<?php 
include 'conn.php';

$id=$_GET['id'];
$delete=$conn->query("DELETE FROM product WHERE id='$id'");
if($delete)
{
    mysqli_close($conn); 
    header("location:view.php"); 
    exit;	
}
else
{
    echo "Error deleting record"; 
}

?>