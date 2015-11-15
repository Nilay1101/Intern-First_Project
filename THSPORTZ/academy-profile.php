<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Academy-Profile</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="css/academy-profile.css" rel="stylesheet">
        <link href="css/header.css" rel="stylesheet">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function(){
                $('[data-toggle="tooltip"]').tooltip();
            });
        </script>
            
<script>
$('.SeeMore2').click(function(){
		var $this = $(this);
		$this.toggleClass('SeeMore2');
		if($this.hasClass('SeeMore2')){
			$this.text('See More');			
		} else {
			$this.text('See Less');
		}
	});
	</script>
	
	<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	var maxLength = 300;
	$(".show-read-more").each(function(){
		var myStr = $(this).text();
		if($.trim(myStr).length > maxLength){
			var newStr = myStr.substring(0, maxLength);
			var removedStr = myStr.substring(maxLength, $.trim(myStr).length);
			$(this).empty().html(newStr);
			$(this).append(' <a href="javascript:void(0);" class="read-more">read more...</a>');
			$(this).append('<span class="more-text">' + removedStr + '</span>');
		}
	});
	$(".read-more").click(function(){
		$(this).siblings(".more-text").contents().unwrap();
		$(this).remove();
	});
});
</script>
<style type="text/css">
    .show-read-more .more-text{
        display: none;
    }
</style>
    </head>
    <body>
        <header class="header">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" data-spy="affix" data-offset-top="40">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="images/s6.png"></a>
            </div>
            <div class="collapse navbar-collapse" id="example-navbar-collapse">
                <ul class="nav navbar-nav pull-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">City <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Pune</a></li>
                            <li><a href="#">Chennai</a></li>
                            <li><a href="#">Banglore</a></li>
                            <li><a href="#">Delhi</a></li>
                            <li><a href="#">Mumbai</a></li>
                        </ul>
                    </li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Login / Signup</a></li>
                </ul>
            </div>
        </nav>
            <ol class="breadcrumb" style="margin-top: 140px;margin-bottom: -130px;">
            <li><a href="index.html" >Home</a></li>
            <li><a href="result.html">Result</a></li>
            <li><a href="academy-profile.html">Academy</a></li>
            <li><a href="tournament.html">Tournament</a></li>
            <li><a href="venue.html">Venue</a></li>
            <li><a href="user-profile.html">User-Profile</a></li>
            <li><a href="teams.html">Teams</a></li>
        </ol>
        </header>
        <br><br><br><br><br><br><br>
                
        <div class="container-fluid">
            <div class="jumbotron profile-jumbo">
                <div class="row">
                    <div class="col-md-3 ">
                        <img src="images/academy-img.jpg" class="img-rounded">
                    </div>
                    <div class="col-md-9">
                        <h2 style="color:white"class="">XYZ Academy</h2>
                        <div class="row rating">
                            <div class="col-md-3"></div>
                            <div class="col-md-9">
							
                                <div class="row pull-right">
								<a href="#"><h4>Write a review</h4></a>
                                <div class="rat-star col-md-1">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Poor"><img class="image-responsive"src="images/greenstar.png"></a>
                                </div>
                                <div class="rat-star col-md-1">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Average"><img class="image-responsive"src="images/greenstar.png"></a>
                                </div>
                                <div class="rat-star col-md-1">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Good"><img class="image-responsive"src="images/greenstar.png"></a>
                                </div>
                                <div class="rat-star col-md-1">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Very Good"><img class="image-responsive"src="images/greenstar.png"></a>
                                </div>
                                <div class="rat-star col-md-1">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Excellent"><img class="image-responsive"src="images/blank.png"></a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div style="margin-top:-25px;"class="row">
		<div class="col-md-3"></div>
                            <div class="col-md-9">
                                <div class="row text-center">
                                <div class="fac col-md-1">
                                    <a href="#" title="DougOut Available"><img class="image-responsive"src="images/DougOut.png"></a>
                                </div>
                                <div class="fac col-md-1">
                                    <a href="#"  title="Highlights Available"><img class="image-responsive"src="images/board.png"></a>
                                </div>
                                <div class="fac col-md-1">
                                    <a href="#" title="Water Available"><img class="image-responsive"src="images/water.png"></a>
                                </div>
                                <div class="fac col-md-1">
                                    <a href="#" title="Markings Available"><img class="image-responsive"src="images/Markings.png"></a>
                                </div>
                                <div class="fac col-md-1">
                                    <a href="#"  title="Spotlight Available"><img class="image-responsive"src="images/spotlight.png"></a>
                                </div>
								<div class="facnot col-md-1">
                                    <a href="#"  title="Toilet Not Available"><img class="image-responsive"src="images/toilet.png"></a>
                                </div>
								<div class="facnot col-md-1">
                                    <a href="#" title="Equipment Not Available"><img class="image-responsive"src="images/Equipment.png"></a>
                                </div>
								<div class="fac col-md-1">
                                    <a href="#"  title="Food Available"><img class="image-responsive"src="images/food.png"></a>
                                </div>
								<div class="facnot col-md-1">
                                    <a href="#" title="Parking Not Available"><img class="image-responsive"src="images/Parking.png"></a>
                                </div>
                                </div>
                            </div>
		</div>
		
		
		<br>
        <div class="container-fluid">
            <div style="margin-top:-15px;"class="row">
                <div class="col-md-3">
                    <div style="margin-right:-25px"class="jumbotron details">
                        <div class="text-left">
                            <div>
                                <h4>Contact Details</h4>
                                <h5>Phone:897481974</h5>
                            </div>
                            <div>
                                <h4>Timings</h4>
                                <h5>10-12 AM<br>4-7 PM</h5>
                            </div>
                            <div>
                                <h4>Address</h4>
                                <h5>007,Bond street<br>XYZ city,Pune</h5>
                            </div>
                            <div>
                                <h4>Fees</h4>
                                <h5>10000 Rs./Month</h5>
                            </div>
                            <div>
                                <h4>No. of Coaches</h4>
                                <h5>10</h5>
                            </div>
                            
                        </div>
                    </div>
                    <div class="">
                        <div style="margin-top:-25px;margin-right:-25px"class="jumbotron details">
                            <div class="text-center">
                                <h4>Coaches Information</h4>
                            </div>						
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                   <div class="jumbotron details">
							<h4>About Us</h4>
                                <h4>Accreditation / Rated By Newspaper / Achievements </h4>
								 
                            </div>
                            <div style="margin-top:-25px;"class="jumbotron details">
                                <h4>Fee Structure and other rules</h4>
								
                            </div>
							<div style="margin-top:-25px;"class=" ">
                                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="10000">
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img class="image-responsive"src="images/img1.jpg">
                            </div>
                            <div class="item">
                                <img class="image-responsive"src="images/img2.jpg" >
                            </div>
                            <div class="item ">
                                <img class="image-responsive"src="images/img3.jpg" >
                            </div>
                            <div class="item">
                                <img class="image-responsive"src="images/img4.jpg" >
                            </div>
                        </div>
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true">
                            </span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                            </div>
							<br><br>
                            <div style="margin-top:-35px;"class="jumbotron details">
                                <h4 >Reviews & Comments</h4>
								<br>
								<div class="accordion" id="accordion2">
  <div class="accordion-group">
    <div class="accordion-heading">
	<!-- insert first review and repective comment here inside para-->
    <p>
	<strong>1. Username:<br></strong>
	<p class="show-read-more">Avatar is a 2009 American epic science fiction motion capture film written and directed by James Cameron, and starring Sam Worthington, Zoe Saldana, Stephen Lang, Michelle Rodriguez, Joel David Moore, Giovanni Ribisi and Sigourney Weaver. Following the film's success, Cameron signed with 20th Century Fox to produce two sequels, making Avatar the first of a planned trilogy.A former Marine named Jake limping selected to join the Avatar program and sent to another planet called Pandora. In Pandora, which is a Na'vi tribe living primitive animals are similar and have the ability as human beings. Na'vi tribe considers that the arrival of humans the earth as a threat, then the war broke out between the human world with Na'vi tribe. Because humans can not breathe earth directly on the planet Pandora, then Jake was changed to a figure like a tribe of Na'vi in order to mingle. Jake also explore the planet Pandora, after meeting with a woman named tribe Na'vi Neytiri, Jake fell in love with her. Finally, Jake is faced with a confused where he must decide which side should be defended, as both a determinant of the fate of the earth and tribal Na'vi.</p>
	<h4>Comments</h4>
	<blockquote class="show-read-more">Avatar is a 2009 American epic science fiction motion capture film written and directed by James Cameron, and starring Sam Worthington, Zoe Saldana, Stephen Lang, Michelle Rodriguez, Joel David Moore, Giovanni Ribisi and Sigourney Weaver. </blockquote><!-- insert first comment here -->
	<blockquote class="show-read-more">Avatar is a 2009 American epic science fiction motion capture film written and directed by James Cameron, and starring Sam Worthington, Zoe Saldana, Stephen Lang, Michelle Rodriguez, Joel David Moore, Giovanni Ribisi and Sigourney Weaver. Following the film's success, Cameron signed with 20th Century Fox to produce two sequels, making Avatar the first of a planned trilogy.A former Marine named Jake limping selected to join the Avatar program and sent to another planet called Pandora. In Pandora, which is a Na'vi tribe living primitive animals are similar and have the ability as human beings. Na'vi tribe considers that the arrival of humans the earth as a threat, then the war broke out between the human world with Na'vi tribe. Because humans can not breathe earth directly on the planet Pandora, then Jake was changed to a figure like a tribe of Na'vi in order to mingle. Jake also explore the planet Pandora, after meeting with a woman named tribe Na'vi Neytiri, Jake fell in love with her. Finally, Jake is faced with a confused where he must decide which side should be defended, as both a determinant of the fate of the earth and tribal Na'vi.</blockquote><!-- insert second comment here  and so on-->
	</p>
		<!-- insert second review and repective comment here inside para-->
    <p>
	<strong>2. Username:<br></strong>
	<p class="show-read-more">Avatar is a 2009 American epic science fiction motion capture film written and directed by James Cameron, and starring Sam Worthington, Zoe Saldana, Stephen Lang, Michelle Rodriguez, Joel David Moore, Giovanni Ribisi and Sigourney Weaver. Following the film's success, Cameron signed with 20th Century Fox to produce two sequels, making Avatar the first of a planned trilogy.A former Marine named Jake limping selected to join the Avatar program and sent to another planet called Pandora. In Pandora, which is a Na'vi tribe living primitive animals are similar and have the ability as human beings. Na'vi tribe considers that the arrival of humans the earth as a threat, then the war broke out between the human world with Na'vi tribe. Because humans can not breathe earth directly on the planet Pandora, then Jake was changed to a figure like a tribe of Na'vi in order to mingle. Jake also explore the planet Pandora, after meeting with a woman named tribe Na'vi Neytiri, Jake fell in love with her. Finally, Jake is faced with a confused where he must decide which side should be defended, as both a determinant of the fate of the earth and tribal Na'vi.</p>
	<h4>Comments</h4>
	<blockquote class="show-read-more">Avatar is a 2009 American epic science fiction motion capture film written and directed by James Cameron, and starring Sam Worthington, Zoe Saldana, Stephen Lang, Michelle Rodriguez, Joel David Moore, Giovanni Ribisi and Sigourney Weaver. </blockquote><!-- insert first comment here -->
	<blockquote class="show-read-more">Avatar is a 2009 American epic science fiction motion capture film written and directed by James Cameron, and starring Sam Worthington, Zoe Saldana, Stephen Lang, Michelle Rodriguez, Joel David Moore, Giovanni Ribisi and Sigourney Weaver. Following the film's success, Cameron signed with 20th Century Fox to produce two sequels, making Avatar the first of a planned trilogy.A former Marine named Jake limping selected to join the Avatar program and sent to another planet called Pandora. In Pandora, which is a Na'vi tribe living primitive animals are similar and have the ability as human beings. Na'vi tribe considers that the arrival of humans the earth as a threat, then the war broke out between the human world with Na'vi tribe. Because humans can not breathe earth directly on the planet Pandora, then Jake was changed to a figure like a tribe of Na'vi in order to mingle. Jake also explore the planet Pandora, after meeting with a woman named tribe Na'vi Neytiri, Jake fell in love with her. Finally, Jake is faced with a confused where he must decide which side should be defended, as both a determinant of the fate of the earth and tribal Na'vi.</blockquote><!-- insert second comment here  and so on-->
	</p>
    </div>
    <div id="collapseTwo" class="accordion-body collapse">
      <div class="accordion-inner">
	<!-- insert remaining review and repective comment here inside para-->
    <p>
	<strong>3. Username:<br></strong>
	<p class="show-read-more">Avatar is a 2009 American epic science fiction motion capture film written and directed by James Cameron, and starring Sam Worthington, Zoe Saldana, Stephen Lang, Michelle Rodriguez, Joel David Moore, Giovanni Ribisi and Sigourney Weaver. Following the film's success, Cameron signed with 20th Century Fox to produce two sequels, making Avatar the first of a planned trilogy.A former Marine named Jake limping selected to join the Avatar program and sent to another planet called Pandora. In Pandora, which is a Na'vi tribe living primitive animals are similar and have the ability as human beings. Na'vi tribe considers that the arrival of humans the earth as a threat, then the war broke out between the human world with Na'vi tribe. Because humans can not breathe earth directly on the planet Pandora, then Jake was changed to a figure like a tribe of Na'vi in order to mingle. Jake also explore the planet Pandora, after meeting with a woman named tribe Na'vi Neytiri, Jake fell in love with her. Finally, Jake is faced with a confused where he must decide which side should be defended, as both a determinant of the fate of the earth and tribal Na'vi.</p>
	<h4>Comments</h4>
	<blockquote class="show-read-more">Avatar is a 2009 American epic science fiction motion capture film written and directed by James Cameron, and starring Sam Worthington, Zoe Saldana, Stephen Lang, Michelle Rodriguez, Joel David Moore, Giovanni Ribisi and Sigourney Weaver. </blockquote><!-- insert first comment here -->
	<blockquote class="show-read-more">Avatar is a 2009 American epic science fiction motion capture film written and directed by James Cameron, and starring Sam Worthington, Zoe Saldana, Stephen Lang, Michelle Rodriguez, Joel David Moore, Giovanni Ribisi and Sigourney Weaver. Following the film's success, Cameron signed with 20th Century Fox to produce two sequels, making Avatar the first of a planned trilogy.A former Marine named Jake limping selected to join the Avatar program and sent to another planet called Pandora. In Pandora, which is a Na'vi tribe living primitive animals are similar and have the ability as human beings. Na'vi tribe considers that the arrival of humans the earth as a threat, then the war broke out between the human world with Na'vi tribe. Because humans can not breathe earth directly on the planet Pandora, then Jake was changed to a figure like a tribe of Na'vi in order to mingle. Jake also explore the planet Pandora, after meeting with a woman named tribe Na'vi Neytiri, Jake fell in love with her. Finally, Jake is faced with a confused where he must decide which side should be defended, as both a determinant of the fate of the earth and tribal Na'vi.</blockquote><!-- insert second comment here  and so on-->
	</p>
		<!-- insert remaining review and repective comment here inside para-->
    <p>
	<strong>4. Username:<br></strong>
	<p class="show-read-more">Avatar is a 2009 American epic science fiction motion capture film written and directed by James Cameron, and starring Sam Worthington, Zoe Saldana, Stephen Lang, Michelle Rodriguez, Joel David Moore, Giovanni Ribisi and Sigourney Weaver. Following the film's success, Cameron signed with 20th Century Fox to produce two sequels, making Avatar the first of a planned trilogy.A former Marine named Jake limping selected to join the Avatar program and sent to another planet called Pandora. In Pandora, which is a Na'vi tribe living primitive animals are similar and have the ability as human beings. Na'vi tribe considers that the arrival of humans the earth as a threat, then the war broke out between the human world with Na'vi tribe. Because humans can not breathe earth directly on the planet Pandora, then Jake was changed to a figure like a tribe of Na'vi in order to mingle. Jake also explore the planet Pandora, after meeting with a woman named tribe Na'vi Neytiri, Jake fell in love with her. Finally, Jake is faced with a confused where he must decide which side should be defended, as both a determinant of the fate of the earth and tribal Na'vi.</p>
	<h4>Comments</h4>
	<blockquote class="show-read-more">Avatar is a 2009 American epic science fiction motion capture film written and directed by James Cameron, and starring Sam Worthington, Zoe Saldana, Stephen Lang, Michelle Rodriguez, Joel David Moore, Giovanni Ribisi and Sigourney Weaver. </blockquote><!-- insert first comment here -->
	<blockquote class="show-read-more">Avatar is a 2009 American epic science fiction motion capture film written and directed by James Cameron, and starring Sam Worthington, Zoe Saldana, Stephen Lang, Michelle Rodriguez, Joel David Moore, Giovanni Ribisi and Sigourney Weaver. Following the film's success, Cameron signed with 20th Century Fox to produce two sequels, making Avatar the first of a planned trilogy.A former Marine named Jake limping selected to join the Avatar program and sent to another planet called Pandora. In Pandora, which is a Na'vi tribe living primitive animals are similar and have the ability as human beings. Na'vi tribe considers that the arrival of humans the earth as a threat, then the war broke out between the human world with Na'vi tribe. Because humans can not breathe earth directly on the planet Pandora, then Jake was changed to a figure like a tribe of Na'vi in order to mingle. Jake also explore the planet Pandora, after meeting with a woman named tribe Na'vi Neytiri, Jake fell in love with her. Finally, Jake is faced with a confused where he must decide which side should be defended, as both a determinant of the fate of the earth and tribal Na'vi.</blockquote><!-- insert second comment here  and so on-->
	</p>
		<!-- insert remaining review and repective comment here inside para-->
    <p>
	<strong>5. Username:<br></strong>
	<p class="show-read-more">Avatar is a 2009 American epic science fiction motion capture film written and directed by James Cameron, and starring Sam Worthington, Zoe Saldana, Stephen Lang, Michelle Rodriguez, Joel David Moore, Giovanni Ribisi and Sigourney Weaver. Following the film's success, Cameron signed with 20th Century Fox to produce two sequels, making Avatar the first of a planned trilogy.A former Marine named Jake limping selected to join the Avatar program and sent to another planet called Pandora. In Pandora, which is a Na'vi tribe living primitive animals are similar and have the ability as human beings. Na'vi tribe considers that the arrival of humans the earth as a threat, then the war broke out between the human world with Na'vi tribe. Because humans can not breathe earth directly on the planet Pandora, then Jake was changed to a figure like a tribe of Na'vi in order to mingle. Jake also explore the planet Pandora, after meeting with a woman named tribe Na'vi Neytiri, Jake fell in love with her. Finally, Jake is faced with a confused where he must decide which side should be defended, as both a determinant of the fate of the earth and tribal Na'vi.</p>
	<h4>Comments</h4>
	<blockquote class="show-read-more">Avatar is a 2009 American epic science fiction motion capture film written and directed by James Cameron, and starring Sam Worthington, Zoe Saldana, Stephen Lang, Michelle Rodriguez, Joel David Moore, Giovanni Ribisi and Sigourney Weaver. </blockquote><!-- insert first comment here -->
	<blockquote class="show-read-more">Avatar is a 2009 American epic science fiction motion capture film written and directed by James Cameron, and starring Sam Worthington, Zoe Saldana, Stephen Lang, Michelle Rodriguez, Joel David Moore, Giovanni Ribisi and Sigourney Weaver. Following the film's success, Cameron signed with 20th Century Fox to produce two sequels, making Avatar the first of a planned trilogy.A former Marine named Jake limping selected to join the Avatar program and sent to another planet called Pandora. In Pandora, which is a Na'vi tribe living primitive animals are similar and have the ability as human beings. Na'vi tribe considers that the arrival of humans the earth as a threat, then the war broke out between the human world with Na'vi tribe. Because humans can not breathe earth directly on the planet Pandora, then Jake was changed to a figure like a tribe of Na'vi in order to mingle. Jake also explore the planet Pandora, after meeting with a woman named tribe Na'vi Neytiri, Jake fell in love with her. Finally, Jake is faced with a confused where he must decide which side should be defended, as both a determinant of the fate of the earth and tribal Na'vi.</blockquote><!-- insert second comment here  and so on-->
	</p>
      </div>
    </div>
    <button class="SeeMore2" data-toggle="collapse" href="#collapseTwo">Read More</button>
  </div>

</div>
                            </div>  
                </div>           
                <div class="col-md-3">	
				<div style="margin-left:-25px"class="">
				<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"width="300" height="150" src="https://maps.google.com/maps?hl=en&q=Akhnoor , Jammu and Kashmir&ie=UTF8&t=satellite&z=6&iwloc=B&output=embed"><div><small><a href="http://embedgooglemaps.com">embedgooglemaps.com</a></small></div><div><small><a href="http://premiumlinkgenerator.com/keep2share-cc">keep2share premium link generator</a></small></div></iframe>
                    </div>		
                   <div class=" ">
				   <div style="margin-top:0px;margin-left:-25px"class="text-center table-responsive">
                                <div class="text-center capt">Upcoming<br>Tournaments</div>
                                <div class="table table-hover table-bordered">
                                    
                                <table class="table table-hover text-center">
                                    <thead >
                                        <th class="text-center">Tournament - cricket</th>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><a href="#">Sundar Raja T20 cup Andheri</a></td>
                                    </tr>
                                    <tr>
                                    <td><a href="#">tournament 2</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">tournament 3</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">tournament 4</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">tournament 5</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">tournament 6</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">tournament 7</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">tournament 8</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>							
                   </div>	
                 <div style="margin-top:-20px;margin-left:-25px"class="jumbotron details">
				 <h4>Nearby Academies</h4>
				
                 </div>
							 
                </div>
            </div>
        </div>
        <br>
        <footer>
            <div class="container-fluid">
                <ul class="list-inline text-center text-muted">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Site Map</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                </ul>
            </div>
        </footer>
    </body>
</html>
