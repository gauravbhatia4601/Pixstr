<?php
    if(isset($_POST['update']))
    {
        $id=$_POST['id'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $age=$_POST['age'];
        $email=$_POST['email'];
        $quote=$_POST['quote'];
        $obj=mysqli_connect("localhost","root","","data");
        if(mysqli_connect_errno($obj)>0)
        {
            echo mysqli_connect_error($obj);
        }
        else{
            $qry="UPDATE form SET fname='$fname',lname='$lname',age='$age',email='$email',quote='$quote' WHERE id='$id';";
                $k=mysqli_query($obj,$qry);
            if($k>0)
            {
                echo"<h2>Value updated</h2>";
            }
            else{
                echo mysqli_error($obj);
            }
        }
    }
    else{
        
?>

<html>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <input type="text" placeholder="id" name="id"/><br>
            <input type="text" placeholder="fname" name="fname"/><br>
            <input type="text" placeholder="lname" name="lname"/><br>
            <input type="text" placeholder="age" name="age"/><br>
            <input type="email" placeholder="E-mail" name="email"/><br>
            <textarea rows="5" cols="20" placeholder="Enter a quote" name="quote"></textarea><br>
            <input type="submit" value="update" name="update"/>
            <input type="submit" value="delete" name="delete"/><br>
        </form>
    </body>
</html>
<?php
    }
?>