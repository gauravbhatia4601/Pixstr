<!DOCTYPE html>

<html>
   <head>
      <link rel=" icon" href="../img/admin-icon.png"/>
       <link rel="stylesheet" href="https://www.google.com/fonts"/>
        <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
        <link type="text/css" href="../css/main.css" rel="stylesheet">
        <link type="text/css" href="../css/animate.css" rel="stylesheet">
   </head>
    <body>
       <div class="image"></div>
           <div class="animated bounceInDown">
            <h1 class="h1">
                Pixstr
            </h1>
            <h4 Style="font-family:Orbitron;">EXPLORE WALLPAPER</h4></div>
               <div class="contain animated bounceInUp"> 
               
              <h1 class="head">Login</h1> 
              <?php
    if(isset($_POST['send']))
    {
        $id=$_POST['uid'];
        $pass=$_POST['pass'];
        $obj=mysqli_connect("localhost","root","","data");
        if(mysqli_connect_errno($obj)>0)
        {
            echo mysqli_connect_error($obj);
        }
        else{
            $qry="select count(*) as c from admin where username='".$id."' && password='".$pass."'";
                //$k=mysqli_query($obj,$qry);
                if ($result=mysqli_query($obj,$qry))
                  {
                  // Fetch one and one row
                  while ($row=mysqli_fetch_row($result))
                    {
                        switch($row[0])
                        {
                            case '0':echo"<h3 style=color:red;>Invalid Username/Password</h3>";break;
                                 case '1':session_start();
                                $_SESSION["username"] = $id; header("Location:update.php");break;
                        }
                    }
                  // Free result set
                  mysqli_free_result($result);
                }
        }
    } 
    else{
?>  
           <form class="alog" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <input type="text" placeholder="Username" name="uid" class="a-in" reqiured/><br>
            <input type="password" placeholder="Password" name="pass" class="a-in" reqiured/><br>
            <input class="submit" type="submit" value="Login" name="send"/><br>
            </form>
        </div>
    </body>
</html>
<?php
        }
?>
