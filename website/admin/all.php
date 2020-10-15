<?php
    include('update.php');

?>
    <head>
        <style>
            .panel{
                margin-left: 250px;
                width:750px;            
            }
            .table{
                width:70%;
                margin-left: 250px;
                overflow: auto;
            }
           
        </style>
    </head>
                                <!--ADD ADMIN-->
<?php
    if(isset($_REQUEST['addadmin']))
    {
        if(isset($_POST['add']))
        {
            $uname=$_POST['username'];
            $pass=$_POST['pass'];
            require('../connection/connect.php');
              $sql="insert into admin values('$uname','$pass')";
if ($result=mysqli_query($con,$sql))
  {
    if($result > 0)
    {
         echo "<script>confirm('Admin Added Successfully!');</script>";
    }
    else
    {
         echo "<script>confirm('No admin added');</script>";
    }
}
        }
?>
        <div class="panel panel-default">
              <div class="panel-heading"><h1 align="center">Add Admin</h1></div>
              <div class="panel-body">
                  
            <form action="<?php $_SERVER['PHP_SELF'];?>" method="post" name="myform">
                <label>Username</label>
                <input type="text"  name="username" class="form-control"/>
                <label>Password</label>
                <input type="password" name="pass" class="form-control"/>
                <label>Confirm Password</label>
                <input type="password" class="form-control" name="pass1"/>
                <hr/>
                <input type="submit" name="add" onclick="return validateform()" value="Add Admin" class="btn btn-primary"/>                
                  </form>                        
    
<?php
        
    }
        ?>
    </div>
</div>
                           <!--END ADD ADMIN-->
                           <!--REMOVE ADMIN START-->
           <?php 
                  
                if(isset($_REQUEST['remove']))
                {
                    if(isset($_POST['adsend'])){
                }    
                else{
                    ?>              
              <div class="panel panel-default">
              <div class="panel-heading"><h1 align="center">Remove Admin</h1></div>
              <div class="panel-body">
               <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"  class="text-center">
                       <label for="">Username:</label>
                       <select name="uname" class="form-control">
                       <?php
                      include('../connection/connect.php');
                        $result=mysqli_query($con,"select * from admin");
                      
                        while($row=mysqli_fetch_array($result))
                        {
                   ?>
                          <option value="<?php echo $row['username'];?>" ><?php echo $row['username'];?></option>
                          
                           <?php 
                        }
                   ?>
                       </select>
                   <hr/>
                       <input type="submit" name="adsend" class="btn btn-primary text-center" value="Delete">
                </form>
             
           <?php
                }
                }
           
           ?>  
</div>
           
            </div>
<?php
                if(isset($_POST['adsend']))
                    {
                        ?>
                        <div class="panel panel-default">
              <div class="panel-heading"><h1 align="center">Remove Admin</h1></div>
              <div class="panel-body">
                   <?php
                    include('../connection/connect.php');
                    $uname=$_REQUEST['uname'];
                    
                    $res=mysqli_query($con,"delete from admin where username='$uname'");
                    if($res > 0)
                    {
                        echo "Row deleted";
                    }
                    else{
                        echo mysqli_error($con);
                    }
                }                                                                    
                  ?>   
                            </div>
                        </div>                             
                           <!--END REMOVE ADMIN-->
                            <!--INSERTION START-->
            

 <?php 
                  
                if(isset($_REQUEST['insert']))
                {?>
                    <div class='panel panel-default'>
              <div class='panel-heading'><h1 align='center'>Insertion</h1></div>
              <div class='panel-body'>
                   <?php
                    if(isset($_POST['send']))
                    {
                    include('../connection/connect.php');
                    $result=mysqli_query($con,"select * from images");
                    $total_row=mysqli_num_rows($result);
                        echo $total_row;
                    $total_row+=101;
                    $id=$total_row;
                    $dim=$_POST['dim'];
                    $size=$_POST['size'];
                    $cat=$_POST['category'];
                    $fname=$_FILES['upload']['name'];
                    $path="../img/".$fname;
                    move_uploaded_file($_FILES['upload']['tmp_name'],$path);
                    $qry="insert into images values($id,'$path','$cat','$dim','$size')";
                    $k=mysqli_query($con,$qry);
                    if($k>0)
                    {
                       echo "Inserted";
                    }
                    else{
                        echo mysqli_error($con);

                    }
                }
               
                  else{
            ?>
             </div></div>
              <div class="panel panel-default">
              <div class="panel-heading"><h1 align="center">Insertion</h1></div>
              <div class="panel-body">
               <form action="#" method="post" enctype="multipart/form-data" class="text-center">
                   <h4>Choose file:</h4> <input type="file" name="upload" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
                        
                       <h4>Category:</h4> <!--<input type="text" name="category" class="form-control" placeholder="Category" aria-describedby="basic-addon1">-->
                    <select name="category" class="form-control">
                        <?php
                            include('../connection/connect.php');
                            $res=mysqli_query($con,"select * from cat_image");
                      while($rw=mysqli_fetch_array($res))
                      {
                        ?>
                        <option value="<?php echo $rw['category'];?>"><?php echo $rw['category'];?></option>
                        <?php
                      }
                      ?>
                   </select>
                       
                       <h4>Dimension:</h4> <input type="text" name="dim" class="form-control" placeholder="Dimension" aria-describedby="basic-addon1">
                       
                       <h4>Size:</h4> <input type="text" name="size" class="form-control" placeholder="Size of file" aria-describedby="basic-addon1">
                       <hr/>
                       <input type="submit" name="send" class="btn btn-primary text-center col-md-12 col-lg-12" value="upload">
                       
                       
                </form>
             
           <?php
                }
                }
           ?>  
</div>
           
            </div>
                            <!--INSERTION END-->                                      
                            <!--DELETION START-->
                            <?php 
                  
                if(isset($_REQUEST['delete']))
                {
                    if(isset($_POST['send'])){
                }    
                else{
                    ?>              
              <div class="panel panel-default">
              <div class="panel-heading"><h1 align="center">Deletion</h1></div>
              <div class="panel-body">
               <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"  class="text-center">
                       <label for="">Id:</label>
                       <select name="uid" class="form-control">
                       <?php
                      include('../connection/connect.php');
                        $result=mysqli_query($con,"select * from images");
                      
                        while($row=mysqli_fetch_array($result))
                        {
                   ?>
                          <option value="<?php echo $row['id'];?>" ><?php echo $row['id'];?></option>
                          
                           <?php 
                        }
                   ?>
                       </select>
                   <hr/>
                       <input type="submit" name="dsend" class="btn btn-primary text-center" value="Delete">
                </form>
             
           <?php
                }
                }
           
           ?>  
</div>
           
            </div>
<?php
                if(isset($_POST['dsend']))
                    {
                        ?>
                        <div class="panel panel-default">
              <div class="panel-heading"><h1 align="center">Deletion</h1></div>
              <div class="panel-body">
                   <?php
                    include('../connection/connect.php');
                    $uid=$_REQUEST['uid'];
                    
                    $res=mysqli_query($con,"delete from images where id='$uid'");
                    if($res > 0)
                    {
                        echo "Row deleted";
                    }
                    else{
                        echo mysqli_error($con);
                    }
                }                                                                    
                  ?>   
                            </div>
                        </div>                                           
                                                                  
                            <!--DELETION END-->
                            <!--UPDATION START-->
                            <?php 
                  
                if(isset($_REQUEST['update']))
                {
                    if(isset($_POST['idsend']))
                    {
                }
                  else{
            ?>
              <div class="panel panel-default">
              <div class="panel-heading"><h1 align="center">Updation</h1></div>
              <div class="panel-body">
               
               <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                
                <h4>Id:</h4> <input type="text" name="id" class="form-control" placeholder="id" aria-describedby="basic-addon1">
                <hr/>
                <input type="submit" name="idsend" class="btn btn-primary text-center col-md-12 col-lg-12" value="Go">
                  </form>
             
           <?php
                }
}
           ?>  
                                             
<?php 
                       
                      if(isset($_REQUEST['idsend']))
                {
                    require('../connection/connect.php');
                        $id=$_POST['id'];
                        $_SESSION['id']=$id;
                      $res=mysqli_query($con,"select * from images where id='$id'");
            
                   ?>
                <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">Id</th>
                          <th scope="col">Path</th>
                          <th scope="col">Category</th>
                          <th scope="col">Dimensions</th>
                          <th scope="col">Size</th>
                        </tr>
                      </thead>
                      <tbody>
                <?php
                    
                      while($rw=mysqli_fetch_array($res))
                      {
                          if($rw == null){
                              echo "<div class='alert alert-danger' role='alert'>Error</div>";
                          }
                          else{
                   ?>
                   
                        <tr>
                          <th scope="row"><?php echo $rw['id'];?></th>
                          <td><?php echo $rw['path'];?></td>
                          <td><?php echo $rw['category'];?></td>
                          <td><?php echo $rw['dimension'];?></td>
                          <td><?php echo $rw['size'];?></td>
                        </tr> 
                   <?php
                      }
                      }
                      
                   ?>
                      </tbody>
                   </table>        
                           <div class="panel panel-default">
              <div class="panel-heading"><h1 align="center">Select Item to update</h1></div>
              <div class="panel-body">                                                 
                            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                                
                                <input type="radio" value="path" name="pth">
                                <label>Path</label>
                                &nbsp;&nbsp;
                                 <input type="radio" value="category" name="cate">
                                                                 <label>Category</label>
                                 &nbsp;&nbsp;
                                 <input type="radio" name="dim" value="Dimension">
                                <label>Dimension</label>
                                 &nbsp;&nbsp;
                                 <input type="radio" name="size" value="size">
                                <label>Size</label>&nbsp;&nbsp;
                                <hr/>
                                 <input type="submit" class="btn btn-primary" name="upd" class="form-control" >
                            </form>   
                   
                 
                                      </div>
                  </div>
 <?php
     }
                  
?>              
    
  <?php
                
                          
                  if(isset($_REQUEST['upd']))
                    {
                      ?>
                      <div class="panel panel-default">
              <div class="panel-heading"><h1 align="center">update the values</h1></div>
              <div class="panel-body"> 
              <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
                       <?php
                                /*PATH*/
                      if(isset($_REQUEST['pth']))
                      {
                          echo "<h4>Path:</h4> <input type='file' name='path' class='form-control' placeholder='Path' aria-describedby='basic-addon1'>";
                      }
                      
                                
                                /*CATEGORY*/
                      if(isset($_REQUEST['cate']))
                      {
                         echo "<h4>Category:</h4> <input type='text' name='category' class='form-control' placeholder='Category' aria-describedby='basic-addon1'>";
                      }
                    
                                 /*DIMENSION*/
                      if(isset($_REQUEST['dim']))
                      {
                          echo "<h4>Dimension:</h4> <input type='text' name='dim' class='form-control' placeholder='Dimension' aria-describedby='basic-addon1'>";
                      }
                     
                                /*SIZE*/
                      if(isset($_REQUEST['size']))
                      {
                          echo "<h4>Size:</h4> <input type='text' name='size' class='form-control' placeholder='Size' aria-describedby='basic-addon1'>";
                      }
                      echo"<hr/>";
                     echo" <input type='submit' name='updt' class='btn btn-primary col-md-12 col-lg-12 '  aria-describedby='basic-addon1'>";
                     
                  }
                  
?>
                  </form>  
                </div>
          </div>      
             
            <?php 
                           
                    if(isset($_REQUEST['updt']))
                        {
                            
                        ?>
                           <div class="panel panel-default">
              <div class="panel-heading"><h1 align="center">update the values</h1></div>
              <div class="panel-body"> 
                           <?php
                        require('../connection/connect.php');
                        
                            $id=$_SESSION['id'];
                        $qy="select * from images where id='$id'";
                            $res=mysqli_query($con,$qy);
                        while($row=mysqli_fetch_array($res))
                        {
                                if(isset($_REQUEST['path']))
                              {
                                  $path=$_REQUEST['path'];
                              }
                                else{
                                    $path=$row['path'];
                                }
                                if(isset($_REQUEST['category']))
                              {
                                  $cate=$_REQUEST['category'];
                              }
                                else{
                                    $cate=$row['category'];
                                }
                                
                                if(isset($_REQUEST['dim']))
                              {
                                  $dim=$_REQUEST['dim'];
                              }
                                else{
                                    $dim=$row['dimension'];
                                }
                                
                                if(isset($_REQUEST['size']))
                              {
                                  $size=$_REQUEST['size'];
                              }
                                else{
                                    $size=$row['size'];
                                }
                                
                        
                            }
                            
                            
                                $qry="UPDATE images SET  path='$path',category='$cate',dimension='$dim',size='$size' WHERE id='$id';";
                                    $k=mysqli_query($con,$qry);
                                if($k>0)
                                {
                                    echo"<h2>Value updated</h2>";
                                }
                                else{
                                    echo mysqli_error($obj);
                                }
                            }
                               
                  ?>     
               </div>
                  </div>                                                    
                      <!--UPDATION END-->

<head>
                  <script>  
            function validateform(){  
            var password=document.myform.pass.value;  
            var cpassword=document.myform.pass1.value;  

            if (password != cpassword){  
              confirm("Password should be same!!");  
              return false;  
            }
                else if(password.length<6){  
              confirm("Password must be at least 6 characters long.");  
              return false;  
              }  
                
                else{
                    return true;
                }
            }  
        </script> 
                  </head>