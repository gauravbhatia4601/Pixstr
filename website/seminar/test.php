<?php
    if(isset($_POST['send']))
    {
        
        $id=$_POST['id'];
       
        $con = mysqli_connect('localhost','root','','data');
        if(mysqli_connect_errno($con)>0)
        {
            echo mysqli_connect_error($con);
        }
        else{
            $qry="select * from test where id='$id'";
            
                if ($result=mysqli_query($con,$qry))
                {
                    echo"<table border=1 style=border-collapse:collapse; width=400 height=400 align=center>";
                    while ($row=mysqli_fetch_array($result))
                    {
                                echo"<tr align=center>
                                <th>Name:</th><td>$row[name]</td>
                                </tr>
                                <tr align=center>
                                <th>Password:</th><td>$row[password]</td>
                                </tr>
                                <tr align=center>
                             <th>Age:</th><td>$row[age]</td>
                             </tr>
                             <tr align=center>
                        <th>E-mail:</th><td>$row[email]</td>
                        </tr>
                        <tr align=center>
                         <th>Phone no.</th><td>$row[phoneno]</td>
                         </tr>
                         <tr align=center>
                        <td colspan=2><input type='submit' value='Update' name='update' onclick='updt()'/><input type='submit' value='Delete' name='delete' onclick='del()'/></td>
                        </tr>
                        </table>";
                    }
                    
                }
            else{
                echo"<h3 style=color:red;>Invalid IdPlease enter a valid id</h3>";
                            
            }
        }
    }

else{
    
?>
<html>
   
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <input type="text" name="id" placeholder="Id">
            <input type="submit" name="send" value="submit">
        </form>
        <?php
}
?>

<?php
    if(isset($_REQUEST['updte']))
    {
        $uid=$_POST['uid'];
        $name=$_POST['name'];
        $pass=$_POST['pass'];
        $age=$_POST['age'];
        $email=$_POST['email'];
        $phn=$_POST['phone'];
        $con = mysqli_connect('localhost','root','','data');
        if(mysqli_connect_errno($con)>0)
        {
            echo mysqli_connect_error($con);
        }
        else{
        $qy="update test set  name='$name',password='$pass',age='$age',email='$email',phoneno='$phn' WHERE id='$uid';";
                
            if($k=mysqli_query($con,$qy)>0)
            {
                echo"<h2>Value updated</h2>";
            }
            else{
                echo mysqli_error($con);
            }
    }
    }
        else{
?>
        <div id="update">
            <form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
               <input type="text" name="uid" placeholder="id"><br>
                <input type="text" name="name" placeholder="name"><br>
                <input type="password" name="pass" placeholder="Password"><br>
                <input type="text" name="age" placeholder="age"><br>
                <input type="email" name="email" placeholder="E-mail"><br>
                <input type="tel" name="phone" placeholder="Phone no."><br>
                <button name="updte">Update</button>
            </form>
        </div>
        <?php
            }
        ?>
        <?php
    if(isset($_REQUEST['delt']))
    {
        $ud=$_POST['ud'];
        $con = mysqli_connect('localhost','root','','data');
        if(mysqli_connect_errno($con)>0)
        {
            echo mysqli_connect_error($con);
        }
        else{
           $q="delete from test where id='$ud';";
            if($g=mysqli_query($con,$q)>0)
            {
                echo"<h2>data deleted</h2>";
            }
            else{
                echo mysqli_error($con);
            }
        }
    }
        else{
        ?>
        <div id="delete">
            <form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
               <input type="text" name="ud" placeholder="id"><br>
                <button name="delt">Delete</button>
            </form>
        </div>
        <?php
        }
        ?>
    </body>
    <head>
      <script>
            function updt(){
                document.getElementById("update").style.display="block";
            }
          function del(){
              document.getElementById("delete").style.display="block";
          }
       </script>
       <style>
           #delete{
               display: none;
               text-align: center;
               margin-top: 10px;
           }
           
           #update{
                display: none;
               text-align: center;
               margin-top: 10px;
           }
       </style>
   </head>
</html>


