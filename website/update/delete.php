<?php
    if(isset($_POST['delete']))
    {
        $id=$_POST['id'];
        /*$fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $age=$_POST['age'];*/
        $obj=mysqli_connect("localhost","root","","data");
        if(mysqli_connect_errno($obj)>0)
        {
            echo mysqli_connect_error($obj);
        }
        else{
            $qry="DELETE from form WHERE id='$id';";
                $k=mysqli_query($obj,$qry);
            if($k>0)
            {
                echo"<h2>data deleted</h2>";
            }
            else{
                echo mysqli_error($obj);
            }
        }
    }
    else{
        echo"Please enter something!!";
    }
?>

<html>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <input type="text" placeholder="id" name="id"/><br>
            <!--<input type="text" placeholder="fname" name="fname"/><br>
            <input type="text" placeholder="lname" name="lname"/><br>
            <input type="text" placeholder="age" name="age"/><br>
            <input type="submit" value="update" name="update"/><br>-->
            <input type="submit" value="delete" name="delete"/><br>
        </form>
    </body>
</html>