<!DOCTYPE html>
<!-- saved from url=(0054)http://twitter.github.com/bootstrap/examples/hero.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Salon Doreen: Curl Queen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Salon Doreen, curly hair specialist. Love your curls!">
    <meta name="author" content="">
    <link rel="image_src" href="http://curlqueen.net/images/Salon%20Doreen%20Screenshot.jpg"/>
    <!-- Le styles -->
       <link href="css/fancybootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
     }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="http://curlqueen.net/images/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-57-precomposed.png">
  <link type="text/css" rel="stylesheet" href="chrome-extension://cpngackimfmofbokmjmljamhdncknpmg/style.css"><script type="text/javascript" charset="utf-8" src="chrome-extension://cpngackimfmofbokmjmljamhdncknpmg/page_context.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="http://curlqueen.net/css/bootstrap-responsive.css" rel="stylesheet">


 <script type="text/javascript">
 var RecaptchaOptions = {
    theme : 'white'
 };
 </script>


    <!-- Google Analytics Tracking Code -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-34560179-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


<script type="text/javascript">
$('#navbar').scrollspy();
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-34560179-1']);
  _gaq.push(['_trackPageview']);



$('[data-spy="affix"]').each(function () {
  var $spy = $(this).scrollspy('refresh')
});


function setImageClass() {
    switch(true) {
        case($(window).width()>600): $("body").removeClass("w200 w400").addClass("w600");
        break;
        case($(window).width()>400): $("body").removeClass("w200 w600").addClass("w400");
        break;
        default: $("body").removeClass("w400 w600").addClass("w200");
        break;
    }
}

$(document).ready(function() {
    setImageClass();
});

$(window).resize(function() {
    setImageClass();
});
</script>

</head>

<!-- Les menus -->
<body data-spy="scroll" data-target="#navbar">

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=279584475394440";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="container-fluid">
 <div class="row">
  <div class="span2">
<!-- Phone menu -->
    <div id="navbar">  
		<ul class="nav nav-pills hidden-desktop hidden-tablet">
	<li class="active"><a href="#home"><i class="icon-home"></i></a></li>
	       <li><a href="#about"><i class="icon-user"></i></a></li>
       		<li><a href="#testimonials"><i class="icon-comments"></i></a></li>
                <li><a href="#photos"><i class="icon-film"></i></a></li>
		<li><a href="#products"><i class="icon-barcode"></i></a></li>
                <li><a href="#services"><i class="icon-tasks"></i></a></li>
		<li><a href="#appointments"><i class="icon-calendar"> </i></a></li>
		<li><a href="#contact"><i class="icon-envelope"> </i></a></li>
        </ul>
</div>
<!-- Desktop & tablet menu -->
<div id="navbar">      
<ul class="nav nav-pills nav-stacked hidden-phone visible-desktop visible-tablet">

<a class="brand" href="#"><div class="head-m"><h1>Curl Queen Doreen</h1></div><h4>(951) 255-5955</h4></a>
	<li class="active"><a href="#home">home</a></li>
	        <li><a href="#about">about</a></li>
       		<li><a href="#testimonials">testimonials</a></li>
              	<li><a href="#photos">photos</a></li>
		<li><a href="#products">products</a></li>
                <li><a href="#services">services</a></li>
		<li><a href="#appointments">appointments</a></li>
		<li><a href="#contact">contact</a></li>
        </ul>

</div>
</div>

<!-- Content -->

    <div class="span10">
<!-- Home -->
	<div id="home" class="box"></div>

<!-- About -->
<div id="about"><h1>about doreen</h1>
<div class="herobox">
		<div class="span2">
    		<div class="thumbnail">
      		<img src="http://curlqueen.net/images/doreenprofile.png" alt="http://placehold.it/300x200">
    		</div>
<div><ul></ul>
<a class="btn" href="#appointments"><i class="icon-calendar"></i> Book Your Appointment Now!</a></div>
  		</div>

<div class="span3">
	<h3>Certifications</h3>
<i class="icon-certificate"></i>Deva Cut Training
<div><i class="icon-certificate"></i>Vidal Sassoon Academy</div>
<div><i class="icon-certificate"></i>Goldwell Color</div>
<div><i class="icon-certificate"></i>Bumble and bumble Training</div>
<div><i class="icon-certificate"></i>Well Hair Permanent Training</div>
<div><i class="icon-certificate"></i>Great Lengths Hair Extensions</div>
<div><i class="icon-certificate"></i>Brazilian Blowout Straightening</div>
<div><i class="icon-certificate"></i>Japanese Hair Straightening Method</div>
</div>

<div class="span4">


<h3>Your Appointment</h3>
		<p>Doreen understands that your appearance is important to you and 	makes it her goal to address your needs and concerns to ensure that you leave 	feeling better about yourself and your hair. Doreen listens to each and every 	client to discover their lifestyle, time constraints, and concerns they may 	have. After assessing your needs, she'll provide a cut, color, or style that 	will make your hair the best it can be.</p><a class="btn" href="tel:+19512555955"><i class="icon-phone"></i> Call Doreen</a>


</div>

<div class="row">
<div class="span6">
</div>
</div>
</div>
</div>


<!-- Testimonials -->
<div id="testimonials"><h1>testimonials</h1>
<div class="herobox">

<div class="span3">

		<p>I picked up the hair dryer and clips and I am enjoying them very much. They really make a difference. I just finished reading the Curly Girl handbook!!! -Kelly Schlegel</p>
<p>Doreen, I just want to thank you for all the time you spend on my hair to make the color perfect. Always so happy after I leave the salon, just love my hair! -Robbie Schlaufman</p>
</div>

<div class="span4"><p>I love going to Doreen because she does a good job layering my hair. My texture is fine and smooth and she cuts it with nice layers which gives my hair so much body. I won't go anywhere else. -Marissa Manangan-Hoy</p>
<p>Doreen- Thank you so much for listening to me! Your cut/color did more for me than I could have imagined! I left looking and feeling the best I EVER have leaving a salon. Thank you! P.S. My husband loves it too! -Jennifer Galindo </p>

</div>

<div class="span2"><h4>Add your review!</h4>
<div class="thumbnail">
     <a href="http://www.yelp.com/biz/doreen-aguirre-stylist-chino-hills-2"><img src="http://curlqueen.net/images/Yelp-Icon.png"></a></div></div>
<div class="row">
<div class="span6">
</div>
</div>
</div>
</div>


<!-- Photos -->
	<div id="photos"><h1>photos</h1>

<div class="herobox">


	
<div class="span3"><div class="thumbnail"><img src="http://curlqueen.net/images/hair/photo1.JPG" alt=""/> <div class="caption">
        <h3>Color</h3>
      </div></div></div>

<div class="span3"><div class="thumbnail"><img src="http://curlqueen.net/images/hair/photo5.JPG" alt=""/><div class="caption">
        <h3>Spiral Perm</h3>
      </div></div></div>

<div class="span3"><div class="thumbnail"><img src="http://curlqueen.net/images/hair/photo7.JPG" alt=""/><div class="caption">
        <h3>Brazilian Blowout</h3>
      </div></div></div>

<div class="span3"><div class="thumbnail"><img src="http://curlqueen.net/images/hair/photo8.JPG" alt=""/><div class="caption">
        <h3>Subtle Highlights</h3>
      </div></div></div>

<div class="span3"><div class="thumbnail"><img src="http://curlqueen.net/images/hair/photo9.JPG" alt=""/><div class="caption">
        <h3>Gloss for Shine</h3>
      </div></div></div>

<div class="span3"><div class="thumbnail"><img src="http://curlqueen.net/images/hair/photo10.JPG" alt=""/><div class="caption">
        <h3>Deva Cut</h3>
      </div></div></div>
	    	

<div class="row">
<div class="span6">
</div>
</div>
</div>
</div>


<!-- Products -->
	<div id="products"><h1>products</h1></div> 

<div class="herobox">
<div class="row">
<div class="span2"><div class="thumbnail"><img src="http://curlqueen.net/images/devacurl.jpg" alt=""/></div></div>
<div class="span2">
<h3>Deva Curl</h3>
Depart from the ordinary with this exclusively designed hair care system for curly, wavy and chemically processed hair.
</div>
<div class="span2"><div class="thumbnail"><img src="http://curlqueen.net/images/brazilian.jpg" alt=""/></div></div>
<div class="span3">
<h3>Brazilian Blowout</h3>
These treatments actually improve the health and condition of the hair by creating a protective protein layer around the hair shaft to eliminate frizz and smooth the cuticle. The minute you leave the salon, you can wash and air dry your hair, workout, put your hair in a ponytail or clip and it will be smooth, frizz-free and radiant!
</div>
<div class="span2"><div class="thumbnail"><img src="http://curlqueen.net/images/moroccanoil.jpg" alt=""/></div></div>
<div class="span2">
<h3>Moroccan Oil</h3>
Every Moroccanoil product is designed to be both simple and effective-with authentic ingredients that leave hair looking and feeling healthier.
</div>
<div class="span2"><div class="thumbnail"><img src="http://curlqueen.net/images/goldwell.jpg" alt=""/></div></div>

<div class="span3">
<h3>Goldwell Color</h3>
Your color is yours alone, not a generic flavor on a shelf. Your stylist creates your customized formulation by mixing two or three different colors together. The result is the perfect shade that complements your skin tone and style.

</div>
</div>
<div class="row">
<div class="span6">
</div> 
</div>           
</div>

<!-- Services -->  
       	<div id="services"><h1>services</h1></div>
<div class="herobox">
<div class="row">
<div class="span4">
          
<h4>Haircuts</h4>
	<ul>Haircut with Blow Dry $50</ul>
	<ul>Blow Dry $35</ul>
<ul>Men's Cut $30</ul>
	<ul>DEVA Cut $98+</ul>
	<ul>Children 12 and Under Cut and Style		$30</ul>


<h4>Highlights/Weaves</h4>
	<ul>Full highlights		$115</ul>
	<ul>Partial Highlights		$85</ul>
	<ul>Full Highlights w/color	$145</ul>
	<ul>Partial Highlights w/color and cut $145</ul>
<h4>Consultation</h4>
<ul>$25. Fee applied to your service.</ul>
</div>
<div class="span5">
<h4>Color</h4>
	<ul>Haircolor (Virgin)		$85</ul>
	<ul>Color Retouch (roots only)	$65</ul>
	<ul>Color Retouch with haircut	$95+</ul>
	<ul>Corrective Color (Upon consultation)</ul>

<h4>Perms</h4>
	<ul>Texture Perm	 $100</ul>
	<ul>Spiral Perm upon consultation</ul>

       
<div><h4 id="specialties">Specialties</h4>
	<ul>Brazilian Blowout	 $200+</ul>
	<ul>Great Lengths Hair Extensions (Upon consultation)</ul>
	<ul>Japanese Straightener (Upon consultation)</ul>
</div>
</div>
<div class="span8">
<p>Please note that prices are subject to change based on hair thickness and length.</p>
</div>
</div>
<div class="row">
<div class="span6">
</div> 
</div>           
</div>

<!-- Appointments -->
<div id="appointments"><h1>appointments & contact</h1></div>
 
<div class="herobox">

	<div class="span3">
	<h3>Chino Hills</h3>

<a class="StyleSeatLink" href="https://www.styleseat.com/p/122354/fromwidget?badge=book_me_teal_180x100" target="_new"><img src="https://d3o64ar3ga83us.cloudfront.net/static/images/badges/book_me_teal_180x100.ad4e3621.png"></a><script type="text/javascript" src="https://www.styleseat.com/p/594483/widget.js"></script>

<hr>
2120 Grand Ave
Chino Hills, CA 91709
<iframe width="270" height="150" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=2120+Grand+Ave+Chino+Hills,+CA+91709+&amp;aq=&amp;sll=33.759489,-118.080879&amp;sspn=0.014486,0.033023&amp;ie=UTF8&amp;hq=&amp;hnear=2120+Grand+Ave,+Chino+Hills,+San+Bernardino,+California+91709&amp;t=m&amp;z=14&amp;ll=33.996562,-117.757781&amp;output=embed"></iframe>
		
	</div>	

<div class="span3">
<h3>Seal Beach</h3>
<a class="StyleSeatLink" href="https://www.styleseat.com/p/594483/fromwidget?badge=book_me_teal_180x100" target="_new"><img src="https://d3o64ar3ga83us.cloudfront.net/static/images/badges/book_me_teal_180x100.ad4e3621.png"></a><script type="text/javascript" src="https://www.styleseat.com/p/594483/widget.js"></script>
<hr>
 2910 Westminster Blvd, Seal Beach, CA, 90740 
<iframe width="270" height="150" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?sll=37.6,-95.66500000000002&amp;sspn=57.48082886065693,95.9691813484774&amp;t=m&amp;q=2910+Westminster+Blvd,+Seal+Beach,+CA+90740&amp;dg=opt&amp;ie=UTF8&amp;hq=&amp;hnear=2910+Westminster+Blvd,+Seal+Beach,+California+90740&amp;z=14&amp;ll=33.759489,-118.080879&amp;output=embed"></iframe>


</div>

<div class="span3">
<div id="contact"><h4>Contact Doreen</h4></br></div>
<script src="http://www.emailmeform.com/builder/forms/jsform/45xJt1Rp7DEOyc45dzs8Q7Y" type="text/javascript"></script>

</div>

	<div class="row">
<div class="span6">
</div> 
</div> </div>



	
    
    <script src="http://curlqueen.net/hero_files/js/bootstrap-scrollspy.js"></script>



<!-- Main Row 2 -->
<div class="herobox">

<ul class="nav nav-list">
  <li class="divider"></li>
</ul>

		<div class="span3">
		<h5>Connect with Curl Queen Doreen</h5>
<p>Be the first to hear about specials and techniques, straight from the source.</p>
<p></p>
<a class="btn" href="http://www.facebook.com/salondoreen"><i class="icon-facebook-sign icon-large"></i></a>
<!--<a class="btn" href="http://www.pinterest.com/salondoreen"><i class="icon-pinterest-sign icon-large"></i></a>
<a class="btn" href="http://www.twitter.com/salondoreen"><i class="icon-twitter-sign icon-large"></i></a>-->
<a class="btn" href="http://instagram.com/curlqueendoreen"><img src="http://curlqueen.net/images/instagram.png" class="inst"/></a>
<a class="btn" href="tel:+19512555955"><i class="icon-phone-sign icon-large"></i></a>
</div>

<div class="span3">
<a href="http://www.naturallycurly.com/salons/view/id/4057/"><img src="http://curlqueen.net/naturallycurly.png"></a>
<div class="green-block">
<h3>Chino Hills</h3>
<a class="StyleSeatLink" href="https://www.styleseat.com/p/122354/fromwidget?badge=book_me_teal_180x100" target="_new"><img src="https://d3o64ar3ga83us.cloudfront.net/static/images/badges/book_me_teal_180x100.ad4e3621.png"></a>
</div>
</div>

		<div class="span3">
		<div class="fb-like-box" data-href="http://www.facebook.com/salondoreen" data-width="250" data-height="150" data-colorscheme="dark" data-show-faces="true" data-stream="false" data-header="false"></div>

<div class="green-block">
<h3>Seal Beach</h3>
<a class="StyleSeatLink" href="https://www.styleseat.com/p/594483/fromwidget?badge=book_me_teal_180x100" target="_new"><img src="https://d3o64ar3ga83us.cloudfront.net/static/images/badges/book_me_teal_180x100.ad4e3621.png"></a>
</div>
<a style="margin-top:10px;display:block;" href="http://www.naturallycurly.com/salons/view/id/4067/doreen-hush-salon-seal-beach-california-united-states/"><img src="http://curlqueen.net/naturallycurly.png"></a>

		</div>
<div class="row">
<div class="span6">
</div>
</div>

	
      <hr>

      <footer>
<p>Website by <a href="http://www.gladpixel.com">Gladpixel Media.</a>          © Curl Queen Doreen 2012</p>
      </footer>

    </div> <!-- /container -->


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/js/bootstrap.js"></script>
    <script src="./hero_files/jquery.js"></script>
    <script src="./hero_files/bootstrap-transition.js"></script>
    <script src="./hero_files/bootstrap-alert.js"></script>
    <script src="./hero_files/bootstrap-modal.js"></script>
    <script src="./hero_files/bootstrap-dropdown.js"></script>
    <script src="./hero_files/bootstrap-scrollspy.js"></script>
    <script src="./hero_files/bootstrap-tab.js"></script>
    <script src="./hero_files/bootstrap-tooltip.js"></script>
    <script src="./hero_files/bootstrap-popover.js"></script>
    <script src="./hero_files/bootstrap-button.js"></script>
    <script src="./hero_files/bootstrap-collapse.js"></script>
    <script src="./hero_files/bootstrap-carousel.js"></script>
    <script src="./hero_files/bootstrap-typeahead.js"></script>

</body>​  

<div id="shadowMeasureIt"></div><div id="divCoordMeasureIt"></div><div id="divRectangleMeasureIt"><div id="divRectangleBGMeasureIt"></div></div></body></html>
