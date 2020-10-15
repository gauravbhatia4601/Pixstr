<?php
    include ("../header/header.php");
?>

<div id="mySidenav" class="sidenav text-center">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="category.php?cate=Street">Street</a>
  <a href="category.php?cate=Mountains">Mountains</a>
  <a href="category.php?cate=Sea">Sea</a>
  <a href="category.php?cate=Animals">Animals</a>
    <a href="category.php?cate=Sports">Sports</a>
  <a href="category.php?cate=Nature">Nature</a>
  <a href="category.php?cate=Fields">Fields</a>
    <a href="category.php?cate=Buildings">Buildings</a>
    <a href="category.php?cate=Autumn">Autumn</a>
  <a href="category.php?cate=Skyscapers">Skyscapers</a>
</div>
<div>
<span style="font-size:30px;cursor:pointer;z-index:2;position:fixed;top:70px;" class="col-lg-12" onclick="openNav()">&#9776;</span></div>
                            <!--Start category-->
<?php
    if(isset($_REQUEST['cate']))
    {
        $cate=$_REQUEST['cate'];
        ?>
        <div class="feturedsection col-lg-12 col-xs-12  col-sm-12 ">
		      <h1 class="text-center animated fadeInRightBig">&bullet;<?php echo $cate; ?>&bullet;</h1>
	    </div> 
	    <div class="container-fluid text-center" id="category">
            <div class="row">
            <?php 
        require("../connection/connect.php");
        $result=mysqli_query($con,"select * from images where category='$cate'");
            while($rw=mysqli_fetch_array($result))
{
                if($rw == null)
                {
                    echo "<h1 align='center' style='color:red;'>No images to show</h1>";
                }
                $id=$rw['id'];
                $cat=$rw['category'];
?>
  <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="thumbnail" id="thmbnail">
                <span><?php $rw['category'];?></span>
                 <a  href="page.php?id=<?php echo $id;?>">
                <img src="<?php echo $rw['path'];?>" alt="image" >
                </a>
            </div>
          </div>
  <?php
}
?>
</div>
      </div>
<?php
    }
?>
                           <!--End category-->
                            <!--ALL COLLECTIONS-->
<div class="feturedsection col-lg-12 col-xs-12  col-sm-12 ">
		      <h1 class="text-center animated fadeInRightBig">&bullet;A L L  C O L L E C T I O N S&bullet;</h1>
	    </div> 
      <div class="container-fluid text-center" id="category">
            <div class="row">
            <?php 
        require("../connection/connect.php");
        $result=mysqli_query($con,"select * from images");
            while($row=mysqli_fetch_array($result))
{
                $id=$row['id'];
                $cat=$row['category'];
?>
  <div class="col-lg-4 col-sm-6 col-xs-12">
    <div class="thumbnail" id="thmbnail">
        <span><?php $row['category'];?></span>
        <a href="page.php?id=<?php echo $id;?>">
        <img src="<?php echo $row['path'];?>"  alt="image"   class=" img" style="width:100%">
        </a>
    </div>
  </div>
  <?php
}
?>
</div>
      </div>
<?php
    include ("../footer/footer.php");
?>