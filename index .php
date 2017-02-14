<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
 
  <meta charset="UTF-8">
  <script src="lib/angular/angular.min.js"></script>
  <script src="lib/angular.min.js"></script>
  <script src="js/controllers.js"></script>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&subset=latin,cyrillic">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans:400,700&subset=latin,vietnamese,latin-ext">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-social.css">

  <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/puritym/css/style.css">
  <link rel="stylesheet" href="assets/dropdown-menu-plugin/style.light.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
<style>
    h1
    {
        font-family: serif;
    }
   
</style>  
</head>
<body>

<section id="dropdown-menu-2btn-0">

    <nav class="navbar navbar-dropdown bg-color transparent navbar-fixed-top">
    
        <div class="container">

            
            
            <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                ☰
            </button>

            <ul class="nav-dropdown collapse pull-xs-left navbar-toggleable-sm nav navbar-nav" id="exCollapsingNavbar"><li class="nav-item"><a class="nav-link link" href="#">Home</a></li><li class="nav-item"><a class="nav-link link" href="#">Services</a></li><li class="nav-item"><a class="nav-link link" href="#">About Us</a></li><li class="nav-item"><a class="nav-link link" href="#">Our Clients</a></li><li class="nav-item"><a class="nav-link link" href="#">Blog</a></li><li class="nav-item"><a class="nav-link link" href="#">Contact Us</a></li></ul><ul class="nav-dropdown collapse pull-xs-right navbar-toggleable-sm nav navbar-nav" id="exCollapsingNavbar"><li class="nav-item"><a class="nav-link link" href="#" style="font-family: initial;">Hotlink: +516 260 0598</a></li></ul>
            
        </div>
<div class="container">
    <div class="row">
                <hr/>
            </div>
</div>
    </nav>

</section>

<section class="mbr-section mbr-section-full mbr-parallax-background mbr-after-navbar" id="header1-0" style="background-image: url(assets/images/photo-1.jpg);">
    <div class="mbr-table-cell">
        <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(0, 0, 0);"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-xs-center">

                    <h1 class="mbr-section-title display-1">Fusion Travel</h1>
                    
                    <div class="mbr-buttons--center"> <a class="btn btn-lg btn-warning" href="#">Plan Your Trip</a></div>
                </div>
            </div>
        </div>
        <a class="mbr-arrow" href="#content4-2"><i class="fa fa-angle-down"></i></a>
    </div>
</section>
<section class="mbr-section mbr-section-small" id="form2-0" style="background-color: rgb(255, 255, 255);">
    
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2" data-form-type="formoid">
                <h2 class="mbr-section-title display-3 text-xs-center">Find Your Destination</h2>
                <form class="mbr-form" action="#" method="post" data-form-title="Find Your Destination">
                    <input type="hidden" value="y6+wnlrqPgLx4ve6ZVWsg4KXRBEGwrl58nsXScJmXpAOIZBGsGmvQ1wXTUSXXKGHed9v0QQO1m9vTUTtzv93tDofhS5xVLVkr6S9NrOSeY1t4MlXQiT+86uc+1w34xhS" data-form-email="true">
                    <div class="input-group">
                        <input ng-model="query" type="text" class="form-control"  required="" placeholder="Search..." data-form-field="Email">
                        <span class="input-group-btn"><button type="submit" class="btn btn-black">Search</button></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<div>               
<section class="mbr-section mbr-section-small" id="content4-2" style="background-color: rgb(255, 255, 255);">
    <div class="container" >          
     <!--    <div class="row">  -->
<div ng-controller = "MyController">
<div class="row">
    
<div data-ng-repeat="items in country | filter :query" class="col-md-3" style="margin-bottom: 2rem;" id="{{items._id}}">
<div style="background-color: #f5f5f5;">
    <div style="color: #818a91"><center>{{items.countryName}}</center></div>
    <p></p>
    <img src="{{items.picture}}" style="width: 255px;height: 150px;">
</div>
</div>

</div><!--row-->

</div>
        <!--</div>row-->
     	</div><!--Container-->
</section>
</div><!--ng-app-->



<section class="mbr-section mbr-section-small" id="testimonials1-0" style="background-color: rgb(255, 255, 255);">
    <div>
    <div class="container">
        <div class="row text-xs-center">
            <div class="col-sm-8 col-sm-offset-2">
                <h2 class="mbr-section-title display-3">Latest News From Blog</h2>
                <small style="font-size: 17px;">See Whats People Are Sharing Their Thoughts</small>
                <div class="lead"><p>.</p></div>               
            </div>
        </div>
    </div>
        
        <div class="container">




<script>
function MyController1($scope, $http)
{
    $http.get('js/latest_news_from_blog.json').success(function(data) {
    $scope.author = data;
    });
}
</script>

<style>
    .heading
    {
        font-size: 20px;
    }
    .card-footer
    {
        height: 360px;
    }
    .imgi
    {
        width: 347px;
        height: 318px;
    }
</style>
            <h2 class="mbr-section-title display-3 text-xs-center"></h2>
            <div class="row mbr-testimonial-cards" ng-controller = "MyController1">
                <div data-ng-repeat="item in author" class="col-sm-12 col-md-4">
                    <div class="card">
                        <div class="card-block" style="padding: 0em;"><em>
                            <img class="imgi" src="{{item.image}}" alt="{{item._id}}">
                        </em></div>
                        <div class="card-footer text-muted">
                            <div><h2 class="heading">{{item.heading}}</h2></div>
                            <small>{{item.description}}</small>
                        </div>
                    </div>
                </div>             
            </div>
        </div><!--container-->
    </div>
</section>



<section class="mbr-section mbr-section-small" id="msg-box2-0" style="background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="row">  
        <center>       
            <div><a class="btn btn-lg btn-warning" href="#">Keep Reading</a></div>   
            </center>         
        </div>
    </div>
</section>

<section class="mbr-section mbr-section-small" id="msg-box2-1" style="background-color: rgb(241, 192, 80);">
     <div class="container">
        <div class="row">
            
            <div class="col-sm-8 col-md-8">
                <h2 class="mbr-section-title h1" >Get Speciel Discount On Your First Journey</h2>
                
            </div>
            <div class="col-sm-4 col-md-4 text-xs-right"><a class="btn btn-lg btn-warning"  style="border-color:white;" href="#">Book Now</a></div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section-small mbr-footer" id="contacts1-0" style="background-color: rgb(255, 255, 255);">
    
    <div class="container">
    <div class="row" style="color: black;">
        <div class="col-sm-12 col-md-3">
            <h2>About Us</h2>
            <small>About us</small><br/>
            <small>Blog</small><br/>
            <small>Contact Us</small>
        </div>
        <div class="col-sm-12 col-md-3">
            <h2>Address</h2>
            <small>4433 Heavner Court</small><br/>
            <small>Plainview, New York</small><br/>            
        </div>
        <div class="col-sm-12 col-md-3">
            <h2>Contact Us</h2>
            <small>Email:help@agency.com</small><br/>
            <small>Cell : +516-260-0598</small><br/>            
        </div>
        <div class="col-sm-12 col-md-3">
        <h2>Follow Us</h2>
        <a class="btn btn-social-icon btn-twitter">
            <span class="fa fa-twitter"></span>
        </a>
        <a class="btn btn-social-icon btn-facebook">
        <span class="fa fa-facebook"></span>
        </a>
        <a class="btn btn-social-icon btn-instagram">
        <span class="fa fa-instagram"></span>
        </a>  
        </div>
    </div>
    </div>
</section>

<footer class="mbr-section mbr-section-nopadding mbr-footer" id="footer1-0" style="background-color: rgb(255, 255, 255);color: black;">
    <center>
    <div class="container">
        <p>Copyright@Parag 2016,All Right Reserve
    </div>
    </center>
</footer>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="assets/jarallax/jarallax.js"></script>
  <script src="assets/puritym/js/script.js"></script>
  <script src="assets/dropdown-menu-plugin/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  
  
</body>
</html>