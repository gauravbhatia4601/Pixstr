<?php
include('../header/header.php');
?>
  <head>
      <title>View images</title>
  </head>
   <?php
    $uid=$_REQUEST['id'];
    require('../connection/connect.php');
$result=mysqli_query($con,"select * from images where id='$uid'");

while($row=mysqli_fetch_array($result))
{
    $cat=$row['category'];
    $res_num=mysqli_query($con,"select * from images where category='$cat'");
    echo "<h1 class='page_head' align='center'>Category : $cat</h1>";
    $num=mysqli_num_rows($res_num);
    echo "<h3 align='center' style='color:white;'>$num $cat images</h3>";
?>
    <hr color="transparent"/>
    <div class="container position-sticky text-center img_container">
        <img src="<?php echo $row['path'];?>" alt="image" width="100%" height="500px"/>
    </div>
    <div class="buttons text-center">
        <a href="<?php echo $row['path'];?>" target="_blank"> <button class="btn btn-default">Full Screen</button></a>
        <a href="../admin/download.php?id=<?php echo $row['id'];?>"> <button class="btn btn-default">Download</button></a>
    </div>
    <?php
}
?>
<hr color="transparent"/>
 <div class="container-fluid" id="category">
        <h2 align="center" style="color:white;">Related Photos</h2>
         <div class="row">
  <?php
             $res_num=mysqli_query($con,"select * from images where category='$cat'");
again: while($rel=mysqli_fetch_array($res_num))
   {
       $id=$rel['id'];
      if($id==$uid)
      {
          goto again;
      }
       else{
       ?>
    
         <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="thumbnail" id="thmbnail">
                <span><?php $rel['category'];?><a href="../admin/download.php?id=<?php echo $id;?>"><i class="fa fa-download"></i></a></span>
                 <a style="width:100% height:100%;" href="page.php?id=<?php echo $id;?>" target="_self">
                <img src="<?php echo $rel['path'];?>"  alt="image"   class=" img" style="width:100%">
                </a>
            </div>
          </div>
          <?php
       }
   }
           ?>
        </div>
    </div>
    <hr color="transparent"/>
    <div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12" id="cat_buttons">    
           <h1>Categories</h1>
            <a href="category.php?cate=Nature"><button class="btn btn-primary" id="nature">Nature</button></a>
            <a href="category.php?cate=Buildings"><button class="btn btn-primary" id="buildings">Buildings</button></a>
            <a href="category.php?cate=Skyscapers"><button class="btn btn-primary" id="skyscapers">Skyscapers</button></a>
            <a href="category.php?cate=Mountains"><button class="btn btn-primary" id="mountains">Mountains</button></a>
            <a href="category.php?cate=Street"><button class="btn btn-primary" id="street">Street</button></a>
            <a href="category.php?cate=Sea"><button class="btn btn-primary" id="sea">Sea</button></a>
            <a href="category.php?cate=Animals"><button class="btn btn-primary" id="animals">Animals</button></a>
            <a href="category.php?cate=Fields"><button class="btn btn-primary" id="fields">Fields</button></a>
            
        </div>

<?php 
    include('../footer/footer.php');
?>