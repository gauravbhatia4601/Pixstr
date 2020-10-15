<?php
    require ("../connection/connect.php");
$result=mysqli_query($con,"select * from cat_image");
while($row=mysqli_fetch_array($result))
{
    $id=$row['id'];
    /*session_start();
    $_SESSION['uid']=$row['id'];*/
?>
<table border="1" width="300" height="200"><tr align="center"><td><img src="<?php echo $row['path'];?>" alt="image" width="300" height="300"/></td></tr>
   
    <tr align="center"><td><a href="download.php?id=<?php echo $id; ?>"><button name="dwld">download</button></a></td></tr>
    </table>
    <?php
}
?>

if(isset($_POST['send']))
{
    $result=mysqli_query($con,"select * from cat_image");
    $total_row=mysqli_num_rows($result);
    $total_row+=1;
    $cat=$_POST['t'];
    $fname=$_FILES['f']['name'];
    $path="../img/".$fname;
    move_uploaded_file($_FILES['f']['tmp_name'],$path);
    $qry="insert into cat_image values('$path','$cat','.jpg',$total_row)";
    $k=mysqli_query($con,$qry);
    if($k>0)
    {
        echo "inserted";
    }
    else{
        echo mysqli_error($con);
        
    }
}

<html>
    <body>
       <form action="" method="post" name="form1" enctype="multipart/form-data">
           upload file: <input type="file" name="f"><br/>
           category: <input type="text" name="t"><br/>
           <input type="submit" name="send" value="upload">
       </form>
    </body>
</html>