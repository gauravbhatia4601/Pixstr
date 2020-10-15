<?php
    include'../header/header.php';    
if($_SESSION['cou']==0){?>

<div class="gaurav col-lg-12 text-center animated fadeInDownBig" id="gaurav"><?php echo "<h1>Welcome"." ".strtoupper($_SESSION['username'])."</h1>";?><input type="button" value="close" class= "btn btn-primary cls" onclick="clse()"/>
</div>
<?php $_SESSION['cou']=1;}?>
<div class="main animated fadeInDown col-lg-12 col-xs-12 text-center" style="animation-duration:2s;">
            <h1 style="font-size:90px;font-family:Great Vibes;">
                Pixstr
            </h1>
            <h6 Style="font-family:Orbitron;font-size:15px;word-spacing:4px;letter-spacing:5px;">EXPLORE WALLPAPER</h6>
        </div>       
        <div class="container col-lg-12 col-md-12 col-sm -12 col-xs-12 box-parent">
            
                <div class="col-md-4 col-sm-4 col-xs-12 box ">
                    <div class=" featured-section first wow fadeInLeftBig animated text-center " data-wow-duration="2s" style="visibility: visible; animation-duration: 2s;"><span class="featured-icon">
                    <i class="fa fa-camera"></i>
                  </span><h5>HD Wallpaper</h5>
                    <p>Download the HD wallpaper form here</p></div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 box border-white">
                    <div class="featured-section first wow fadeInUpBig animated text-center" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s;"><span class="featured-icon">
                    <i class="fa fa-picture-o"></i>
                  </span><h5>High Resolution</h5>
                    <p>You will get the high resolution pics here</p>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-4 col-xs-12 box border-white">
                    <div class="featured-section first wow fadeInRightBig animated text-center" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s;">
                    <span class="featured-icon">
                        <i class="fa fa-camera-retro"></i>
                      </span>
                        <h5>Various Category</h5><p>Get different categories of photos here</p></div>
                </div>
            </div>
    
                    <!--feature images-->    
         <div class="feturedsection col-lg-12 col-xs-12">
		      <h1 class="text-center animated fadeInRightBig">&bullet;F E A T U R E D&bullet;</h1>
	    </div>
        
         <div class="container-fluid text-center" id="category">
            <div class="row">
             <?php 
        require("../connection/connect.php");
        $result=mysqli_query($con,"select * from images limit 0,6");
            while($row=mysqli_fetch_array($result))
{
                $id=$row['id'];              
?>
              <div class=" col-md-4 col-sm-6 col-xs-12">
                <div class="thumbnail" id="thumbnail">
                   <a href="page.php?id=<?php echo $id;?>">
                       <span><h3><?php echo $row['category'];?></h3><i class="fa fa-download" href="../admin/download.php?id=<?php echo $id;?>"></i></span>
                  
                    <img src="<?php echo $row['path'];?>" alt="image" class=" img"  style="width:100%">
                  </a>
                </div>
                  
                </div>
                <?php
                }
?>
            </div>
             <button class="text-center btn btn-primay" style="position:relative;"><a href="category.php" >See More...</a></button>
        </div>  

          
                    <!--CATEGORIES--> 
         <div class="feturedsection col-lg-12 col-xs-12  col-sm-12 ">
		      <h1 class="text-center animated fadeInRightBig">&bullet;C A T E G O R I E S&bullet;</h1>
	    </div> 
      <div class="container-fluid text-center" id="category">
            <div class="row">
            <?php 
        require("../connection/connect.php");
        $result=mysqli_query($con,"select * from cat_image");
            while($row=mysqli_fetch_array($result))
{
                $cate=$row['category'];
?>
  <div class=" col-md-4 col-sm-6 col-xs-12">
    <div class="thumbnail" id="thumbnail">
     <a href="category.php?cate=<?php echo $cate;?>">
      <span><h3><?php echo $cate;?></h3></span>      
        <img src="<?php echo $row['path'];?>" alt="image" class=" img" style="width:100%">
      </a>
    </div>
  </div>
  <?php
}
?>
</div>
      </div>  

<?php
    include'../footer/footer.php';
?>