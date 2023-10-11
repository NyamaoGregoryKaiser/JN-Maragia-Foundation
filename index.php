<!DOCTYPE html>
<html>
<head>
<title></title>
<link href="css/owl.carousel.css" rel='stylesheet' type='text/css'/>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); }
 </script>
<style>
a {
    font-size: 100%;
    text-decoration: none;
    vertical-align: baseline;
    padding: 0;
    background: 0 0;
    color: #41b7d8;
}
.lt a {
    display: inline-block;
    margin: 0 .625em .625em 0;
    background: #e95c33;
    border-radius: .25em;
    -webkit-transition: all .3s;
    transition: all .3s;
}
.lt a, .sot {
    padding: .25em .5em;
    color: #fff;
}
a:link, button {
    -webkit-tap-highlight-color: rgba(229,59,44,.4);
    -ms-touch-action: manipulation;
    touch-action: manipulation;
}
</style>
<script type="text/javascript">
function ValidateEmail(inputText)  
{  
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
if(inputText.value.match(mailformat))  
{  
document.form1.text1.focus();  
return true;  
}  
else  
{  
alert("You have entered an invalid email address!");  
document.form1.text1.focus();  
return false;  
}  
}  
</script>
<script src="js/jquery.min.js"></script>
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script><!-- Script for gallery Here-->
    <script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
    <script type="text/javascript">
        $(function () {
            var filterList = {
                init: function () {
// MixItUp plugin
// http://mixitup.io
                    $('#portfoliolist').mixitup({
                        targetSelector: '.portfolio',
                        filterSelector: '.filter',
                        effects: ['fade'],
                        easing: 'snap',
                        // call the hover effect
                        onMixEnd: filterList.hoverEffect()
                    });
                },
                hoverEffect: function () {
// Simple parallax effect
                    $('#portfoliolist .portfolio').hover(
                        function () {
                            $(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
                            $(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');
                        },
                        function () {
                            $(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
                            $(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');
                        }
                    );
                }
            };
// Run the show!
            filterList.init();
        });
    </script>
    <!--Gallery Script Ends-->


    <script>
 new WOW().init();
</script>
</head>

<body onload='document.form1.text1.focus()'>  

<?php include('function.php'); ?>

<?php include('top.php'); ?>

<?php include('slider.php'); ?>
     <div class="about section" id="section-2">
	  <div class="about-head text-center">
	  <h3>About Us</h3>
	  <span></span><img src="images/about-img.png" alt=""><span></span>
	  </div>
	   <div class="container">		  
		 <div class="col-md-4 about-grids">
			 <h4><span class="icon1"></span>Our Vision</h4>
			 <p>JN Maragia Foundation has a mission to combat poverty and expand opportunities to all people by uplifting their social status, supporting equal rights to education for all, and championing a sustainable environment for all.</p>
		 </div>
		 <div class="col-md-4 about-grids grid2">
			 <h4><span class="icon2"></span>Our Mission</h4>
			 <p>To provide a holistic transformation of young people and disadvantaged communities</p>
		 </div>
		 <div class="col-md-4 about-grids">
			 <h4><span class="icon3"></span>Our story</h4>
			 <p>JN Maragia Foundation situated in Kisii is a Non-Profit Organization trying to alleviate the effects of debilitating poverty, fighting diseases, and inequity in and around Bonchari Constituency. The Foundation is premised on the soft ethos as guided by its tag line of-Uplifting, Inspiring, and Empowering the masses, for, “non nobis solum nati sumus”-Not for ourselves alone are we born.</p>
<br><div class="lt"><a href="test.xml" style="background: red; margin-top: 50px;margin-left: 55px;">Read More</a></div></p>
		 </div>
	 </div>
</div>

<!--top-tours-->	
<div  class="section" id="section-3">
<div id="portfolio" class="portfolio">
   <div class="top-tours-head text-center">
		  <h3>Gallery</h3>
		  <span></span><img src="images/star.png" alt=""><span></span>
		 
		  </div>
	      <ul id="filters" class="clearfix wow bounceIn" data-wow-delay="0.4s">
			<li><span class="filter active" data-filter="app card icon logo fun">ALL</span></li>
			<li><span class="filter" data-filter="app">Education</span></li>
			<li><span class="filter" data-filter="card">Health</span></li>
			<li><span class="filter" data-filter="fun">Sports</span></li>
	        </ul>
	     <div id="portfoliolist">
					<div class="portfolio card mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/m1.jpg" class="img-responsive" alt=""/></a>
							</div>
					</div>
                    <div class="portfolio card mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/m2.jpg" class="img-responsive" alt=""/></a>
							</div>
					</div>				
					<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/m3.jpg" class="img-responsive" alt=""/></a>
                             </div>
					</div>						
					<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/m4.jpg" class="img-responsive" alt=""/></a>
                             </div>
					</div>	
                    <div class="portfolio card mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/m5.jpg" class="img-responsive" alt=""/></a>
							</div>
					</div>				
					<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/m6.jpg" class="img-responsive" alt=""/></a>
                             </div>
					</div>			
					<div class="portfolio card mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/m7.jpg" class="img-responsive" alt=""/></a>
							
					</div>
					</div>				
					<div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/m8.jpg" class="img-responsive" alt=""/></a>
							 
						</div>
					</div>	
					
					   </div>
			      </div>
                  
		   <div class="clearfix"></div>	
	  </div>
</div>
</div>

<!--/top-tours-->

<div class="client-say">
    <div class="client-say-layer">
        <div class="client-say-head text-center">
            <h3>From our team</h3>
            <span></span><img src="images/face.png" alt=""><span></span>
            <!-- requried-jsfiles-for owl -->
            <link href="css/owl.carousel.css" rel="stylesheet">
            <script src="js/owl.carousel.js"></script>
            <script>
                $(document).ready(function() {
                    $("#owl-demo1").owlCarousel({
                        items : 1,
                        lazyLoad : true,
                        autoPlay : true,
                        navigation : false,
                        navigationText :  false,
                        pagination : true,
                    });
                });
            </script>
            <!-- //requried-jsfiles-for owl -->
            <div id="owl-demo1" class="owl-carousel">
                <div class="item">
                    <div class="client-say-info">
                        <p><img src="images/dots1.png" alt="#">Let us support education, health and social growth<img src="images/dots2.png" alt="#"></p>
                        <h4>Eng Joshua Maragia</h4>
                        <h6><span></span></h6>
                    </div>
                </div>
                <div class="item">
                    <div class="client-say-info">
                        <p><img src="images/dots1.png" alt="#">Bonchari nseito tiga toyerosi<img src="images/dots2.png" alt="#"></p>
                        <h4>Silvans</h4>
                        <h6><span></span></h6>
                    </div>
                </div>
                <div class="item">
                    <div class="client-say-info">
                        <p><img src="images/dots1.png" alt="#">Lets support our people and create a great community.<img src="images/dots2.png" alt="#"></p>
                        <h4>Gregory</h4>
                        <h6><span></span></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/client-say-->

<div id="section-4" class="contact section">
    <div class="contact-head1 text-center">
            <div style="color:#fff;margin-bottom: 20px;"><h2></h2></div>


    </div>
</div>


                <div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page"><span class=""></span></div><div class="owl-page"><span class=""></span></div><div class="owl-page"><span class=""></span></div><div class="owl-page active"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div></div></div>
        </div>
    </div>
</div>

<div id="section-5" class="contact section">
	  <div class="contact-head text-center">
		  <h3>Contact Us</h3>
		  <span></span><img src="images/mail.png" alt=""><span></span><br/><br/>
          <h4 style="color:#000">everyone in Bonchari has the opportunity to learn, prosper, and achieve their full potential</h4>
            <div class="contact-grids">
			  <div class="container">
				  <div class="col-md-4 address">
						<h4 style="color:#09F">JNMaragia foundation</h4>
                        For enqueries and suggestions you may also call our office agent</p>
                        <a href="tel:+254707453077"><h5 style="color:#000"><span class="img1"></span><b>Call us</b> (+254) 707453077</h5></a>

						<h5 style="color:#000"><span class="img2"></span><a href="#">p9wampered@gmail.com.com<br /></a></h5>
  <h5 style="color:#000">
    <span class="img3"></span><a href="/map.html" >Headoffice</a> Kerina, Kisii- suneka, Kenya.</h5>
<!--<a href="https://nyamaogregorykaiser.github.io/Web-Potfolio/">Mc Greg</a></p></a><li><a href="index.php#section-4"   onclick="javascript:window.open('index.php#section-4','_self')">Donate</a></li>-->



                        <br/>
                        
                       <img src="images/contact.png" height="50%" width="50%" />
                      </div>
				  <div class="col-md-8 contact">
                  
                  <?php
if(isset($_POST["sbt"]))
{
	$cn = makeconnection();
	$s = "insert into contactus(Name,Phno,Email,Message) values('" . $_POST["t1"] . "','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"] . "')";
	mysqli_query($cn, $s);
	mysqli_close($cn);
	echo "<script>alert('Message Received');</script>";
}
?>
<form name="form1" method="post">
	<table border="0" width="700px" height="500px">
		<tr>
			<td align="left">
				<input type="text" class="text" value=" Name" name="t1" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your Name';}" required pattern="[a-zA-Z1 _]{1,50}" title="Please Enter Only Characters and numbers between 1 to 50 for Name">
			</td>
		</tr>
		<tr>
			<td align="left">
				<input type="text" class="text" value=" Contact No" name="t2" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your Contact NO';}" required pattern="[0-9]{10,12}" title="Please Enter Only numbers between 10 to 12 for Contact no">
			</td>
		</tr>
		<tr>
			<td align="left">
				<input type="text" class="text" value="Email" name="t3" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your mail';}">
			</td>
		</tr>
		<tr>
			<td>
				<textarea onFocus="if(this.value == 'Message') this.value='';" name="t4" onBlur="if(this.value == '') this.value='Enter Message Here';" required>Message</textarea>
			</td>
		</tr>
		<tr>
			<td>
            <p><input type="submit" value="Send" name="sbt" onclick="ValidateEmail(document.form1.t3.value)"></p>
			</td>
		</tr>
	</table>
	<div class="clearfix"></div>
</form>
</div>
<div class="clearfix"></div>
</div>
</div>
<?php include('bottom.php'); ?>
</body>
</html>


