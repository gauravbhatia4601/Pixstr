 <!-- Footer -->
    <footer>
       <div class="container">
            <div class="row">        
            <div class="col-md-12 col-sm-12 scol-xs-12 text-center">
                <img src="../img/camera-leans-logo-ADF433F5ED-seeklogo.com%20(1).png" class="logo1"/>
            </div>
            <div class="col-md-12 col-sm-12 scol-xs-12 text-center">
                <span class="logo">Imgstr</span>
            </div>
                
            <div class="col-md-4 col-sm-6 col-xs-12">
                <ul class="menu">
                    <span>Menu</span>    
                        <li>
                            <a href="#">Home</a>
                        </li>
                               
                        <li>
                            <a href="#">About</a>
                        </li>
                               
                        <li>
                            <a href="#">Blog</a>
                        </li>
                               
                        <li>
                            <a href="#">Gallery </a>
                        </li>
                     </ul>
            </div>
           
            <div class="col-md-4 col-sm-6 col-xs-12">
                <ul class="menu">
                    <span>Contact</span>       
                        <li>
                            <a href="#">Phone</a>
                        </li>
                        <li>
                            <a href="#">Adress</a>
                        </li> 
                        <li>
                            <a href="#">Email</a>
                        </li> 
                   </ul>
            </div>
           
            <div class="col-md-4 col-sm-6 col-xs-12">
                <ul class="adress">
                    <span>Address</span>    
                        <li>
                            <p>Amritsar,Punjab-143204</p>
                        </li>
                        <li>
                            <p>+91 1234 56789</p>
                        </li>
                        <li>
                            <p>imgstr@gmail.com</p>
                        </li>
                     </ul>
               </div>
               
           </div> 
        </div>
    </footer>

<script type="text/javascript">
    function clse(){
     document.getElementById("gaurav").style.display="none";
    }
        /*$(document).ready(function(){
    $(".cls").click(function(){
        $(".gaurav").collapse('hide');
    });
});*/</script>
    <script>
        $(function(){
    $('[data-toggle="tooltip"]').tooltip();
    $(".side-nav .collapse").on("hide.bs.collapse", function() {                   
        $(this).prev().find(".fa").eq(1).removeClass("fa-angle-right").addClass("fa-angle-down");
    });
    $('.side-nav .collapse').on("show.bs.collapse", function() {                        
        $(this).prev().find(".fa").eq(1).removeClass("fa-angle-down").addClass("fa-angle-right");        
    });
})    
    
    </script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
        });
    </script>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
<script type="text/javascript">
        function fun()
    {
            alert("hello");
        }
    
</script>
    <!-- Bootstrap core JavaScript -->
<script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/jquery/jquery.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.js"></script>
      
  </body>

</html>
