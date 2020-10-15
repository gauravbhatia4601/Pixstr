<?php
include('../connection/connect.php');
//session_start();
$uid=$_REQUEST['id'];
$qry="select * from images where id='".$uid."'";
$k=mysqli_query($con,$qry);
while($row=mysqli_fetch_array($k))
{
    
    $path=$row['path'];
    header('content-Disposition: attachment; filename = '.$path.'');
    header('content-type:application/octent-strem');
    header('content-length='.filesize($path));
    readfile($path);
}

?>