
<?php 
    ob_start();
    require('../connection/check_session.php');
    session_start();
?>


<html>
    <head>
        <title>Login</title>
         <link rel="stylesheet" href="https://www.google.com/fonts"/>
        <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
        
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
      .container{
          width:100%;
          
                }
    .jumbotron{
    text-align: center;
    margin: auto;
    padding:0px;
    color:azure;
    background-color: transparent;
    text-shadow: 1px 1px 1px black;
}
      
      .jumbotron h1{
          font-family: Great Vibes;
          font-size: 80px;
      }
.jumbotron h3{
    font-weight:100;
    font-family:sans-serif;
    word-spacing: 6px;
    letter-spacing: 2px;
    }

.jumbotron h5{
     font-weight:700;
    word-spacing: 8px;
    letter-spacing: 6px;
    
    color:#fff;
    font-family: Orbitron;
}
      .logdoc{
    height:450px;
    text-align: center;
    background-color:rgba(0,0,0,0.4);
    z-index:1;
    left:0;
    right:0;
    bottom:0;
    top:0;
}
      body{
    background:url(../img/original.jpg);
    background-size:100% 100%;
     margin:0;
     background-repeat: no-repeat;    
    font:600 16px/18px 'Open Sans',sans-serif;
}
*,:after,:before{box-sizing:border-box}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}
a{color:inherit;text-decoration:none}

.login-wrap{
	width:100%;
    height:100%;
	margin:0px auto;
    max-width:425px;
	min-width:50%;
	min-height:30%;
	position:relative;
}
.login-html{
	width:100%;
	height:100%;
	position:relative;
    background:rgba(0,0,0,.4);
    box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(255,255,255,.3);
    border-radius: 10px;
}
.login-html .sign-in-htm,
.login-html .sign-up-htm{
	top:50px;
	left:50px;
	right:50px;
	bottom:50px;
	position:absolute;
	transform:rotateY(180deg);
	backface-visibility:hidden;
	transition:all .4s linear;
}
.login-html .sign-in,
.login-html .sign-up,
.login-form .group .check{
	display:none;
}
.login-html .tab,
.login-form .group .label,
.login-form .group .button{
	text-transform:uppercase;
}
.login-html .tab{
	font-size:22px;
	margin-right:15px;
	padding-bottom:5px;
	margin:0 15px 10px 0;
	display:inline-block;
	border-bottom:2px solid transparent;
    padding-right: 70px;
    padding-left: 70px;
    margin-top: 10px;
    height: 40px;
    line-height: 50px;
    cursor: pointer;
}
.login-html .sign-in:checked + .tab,
.login-html .sign-up:checked + .tab
{
	color:#fff;
	border-color:#fff;    
}
.login-form{
	min-height:345px;
	position:relative;
	perspective:1000px;
	transform-style:preserve-3d;
}
.login-form .group{
	margin-bottom:15px;
}
.login-form .group .label,
.login-form .group .input,
.login-form .group .button{
	width:100%;
	color:#fff;
	display:block;
}
.login-form .group .input,
.login-form .group .button{
	border:none;
	padding:15px 20px;
	border-radius:25px;
	background:rgba(255,255,255,.5);
}
.login-form .group input[data-type="password"]{
	text-security:circle;
	-webkit-text-security:circle;
}
.login-form .group .label{
	color:whitesmoke;
    text-align: left;
	font-size:12px;
}
.login-form .group .button{
	background:#1161ee;
}
.login-form .group label .icon{
	width:15px;
	height:15px;
	border-radius:2px;
	position:relative;
	display:inline-block;
	background:rgba(255,255,255,.1);
}
.login-form .group label .icon:before,
.login-form .group label .icon:after{
	content:'';
	width:10px;
	height:2px;
	background:#fff;
	position:absolute;
	transition:all .2s ease-in-out 0s;
}
.login-form .group label .icon:before{
	left:3px;
	width:5px;
	bottom:6px;
	transform:scale(0) rotate(0);
}
.login-form .group label .icon:after{
	top:6px;
	right:0;
	transform:scale(0) rotate(0);
}
.login-form .group .check:checked + label{
	color:#fff;
}
.login-form .group .check:checked + label .icon{
	background:#1161ee;
}
.login-form .group .check:checked + label .icon:before{
	transform:scale(1) rotate(45deg);
}
.login-form .group .check:checked + label .icon:after{
	transform:scale(1) rotate(-45deg);
}
.login-html .sign-in:checked + .tab + .sign-up + .tab + .login-form .sign-in-htm{
	transform:rotate(0);
}
.login-html .sign-up:checked + .tab + .login-form .sign-up-htm{
	transform:rotate(0);
}

.hr{
	height:2px;
	margin:60px 0 50px 0;
	background:rgba(255,255,255,.2);
}
.foot-lnk{
	text-align:center;
    color: whitesmoke;
}

      .gen{
          color:white;
      }
      
        </style>       
        
  </head>
    <body>
        <div class="container ">
         <div class="jumbotron " >
             
             <h1>Pixstr</h1><h5>EXPLORE WALLPAPER</h5>
             
        </div>     
            <div class="login-wrap" >
	<div class="login-html" >
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" name="myform">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab" >Sign In</label>       
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
              
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" class="input" name="u_name">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password" name="pas_wrd">
                </div>
				<div class="group">
					<input type="submit" class="button" value="Sign In" name="send_in" formnovalidate>
				</div>
                <div class="text-center" style="color:red" >
                   
<!--                    LOGIN PHP-->
                      <?php
                    require('../connection/connect.php');
                    if(isset($_POST['send_in']))
                    {
                        $u_name=$_POST['u_name']; 
                        $pas_wrd=$_POST['pas_wrd'];
                       $sql="SELECT count(*) as c FROM signlogup where username='".$u_name."' && password='".$pas_wrd."'";
                
                if ($result=mysqli_query($con,$sql))
                  {
                  // Fetch one and one row
                  while ($row=mysqli_fetch_row($result))
                    {
                        switch($row[0])
                        {
                            case '0':echo "<h3>Invalid Username/Password</h3>";break;
                                 case '1':session_start();
                                $_SESSION['cou']=0;
                                $_SESSION["username"] = $u_name;
                                header("Location:../home/index.php");break;
                        }
                    }
                  // Free result set
                  mysqli_free_result($result);
                }

                    }
?>
<!--               END LOGIN PHP-->
                
                </div>
                
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>
				</div>
			</div>
			<div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" required class="input" name="u_name_up">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" required class="input" data-type="password" name="pas_wrd_up">
				</div>
				<div class="group">
					<label for="pass1" class="label">Repeat Password</label>
					<input id="pass1" required type="password" class="input" data-type="password" name="pas_wrd_up1">
				</div>
				<div class="group gen">
                    <label for="pass" class="label">Gender</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="gender" type="radio" required  value="Male" name="gen"><label for="gender" class="gen">Male</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input id="gender" type="radio" value="Female"  name="gen"><label class="gen" for="gender" >Female</label>
				</div>
				<div class="group">
					<label  for="phone" class="label">Phone no.</label>
					<input id="phone" type="tel" required class="input" name="pno">
				</div>
				<div class="group">
					<label  class="label">Email Address</label>
					<input id="pass3" type="email" required class="input" name="e_mail_up">
				</div>
				<div class="group">
					<input type="submit" onclick="return validateform()" class="button" value="Sign Up" name="send_up">
				</div>
                <div class="text-center" style="color:white;" >
<!--                   SIGN UP PHP-->
                    <?php
 require('../connection/connect.php');
    if(isset($_POST['send_up']))
    {
       
        $uid=$_POST['u_name_up']; 
        $pwd=$_POST['pas_wrd_up'];
        $cpwd=$_POST['pas_wrd_up1'];
        $gen=$_POST['gen'];
        $phone=$_POST['pno'];
        $email=$_POST['e_mail_up'];
        
       $sql="insert into signlogup values('$uid','$pwd','$gen','$phone','$email')";
if ($result=mysqli_query($con,$sql))
  {
    if(mysqli_affected_rows($con)>0)
    {
         echo "<script>alert('User Registerd Successfully!');</script>";
    }
    else
    {
         echo "no user registered";
    }
}
    }
?>
<!--               END SIGN UP PHP -->
                </div>
				<div class="hr"></div>
				<div class="foot-lnk">
                    <label for="tab-1"><a href="#"> Already Member?</a></label>
				</div>
			</div>
		</div>
        </form>
	</div>
</div>
</div>
        <script>  
            function validateform(){  
            var password=document.myform.pas_wrd_up.value;  
            var cpassword=document.myform.pas_wrd_up1.value;  

            if (password != cpassword){  
              alert("Password should be same!!");  
              return false;  
            }
                else if(password.length<6){  
              alert("Password must be at least 6 characters long.");  
              return false;  
              }  
                
                else{
                    alert("User Registered succesfully!");
                    return true;
                }
            }  
        </script> 

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    </body>
</html>