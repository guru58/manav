<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ManavElectricals</title>

                                <!-- CSS SECTION START HERE  -->

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/owl.theme.css" />
    <link rel="stylesheet" href="css/owl.transitions.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet" />
    <link rel="stylesheet" href="css/hover-min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <style>
        #owl-demo .item{
            position: relative;
        }
        #owl-demo .item img{
            display: block;
            width: 100%;
            height:662px!important;
            
        }
    </style>
                                
                                <!-- CSS SECTION END HERE -->

</head>
<body>
 
                        <!-- HEADER START HERE  -->

                        <!-- CAROUSEL START HERE  -->
    

    <div id="owl-demo" class="owl-carousel owl-theme">
        <div class="item">
            <img class="img-responsive" src="https://www.walldevil.com/wallpapers/a66/backgrounds-twitter-retouch-color-industrial-electrical-computer.jpg" alt="ManavElectricals">
        </div>
        <div class="item">
            <img class="img-responsive" src="http://wallpapercave.com/wp/wp1837609.jpg" alt="ManavElectricals">
        </div>
    </div>
    <div style="height:500px;">
    	
    </div>
    
                            <!-- CAROUSEL END HERE -->


                               <!-- HEADER END HERE -->





                                <!-- SCRIPT START HERE  -->

<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>




                           <!-- embedding owl carousel script -->

<script src="js/owl.carousel.js"></script>
<script>
    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
        navigation : false,
        paginationSpeed : 300,
        pagination:false,
        singleItem:true,
        transitionStyle : "fade",
        autoPlay:true,
        });
      });
</script>
 
                            <!-- owl carousel script end here -->




                            <!-- wow.js script start here -->


<script src="js/wow.min.js"></script>
  <script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:100,
        callback:function(box) {
        console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
  </script>

                           <!-- wow.js script end here -->

                                <!-- SCRIPT END HERE -->


</body>
</html>