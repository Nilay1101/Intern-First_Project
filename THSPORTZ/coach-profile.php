<html>
    <head>
		<title>Coach-Profile</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
		<link rel="stylesheet" href="themes/bars-1to10.css">
        <link href="css/coach.css" rel="stylesheet">
        <link href="css/header.css" rel="stylesheet">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
            
    </head>
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

<script src="jquery.barrating.min.js"></script>
<script type="text/javascript">
   $(function() {
      $('#example').barrating({
        theme: 'bars-1to10'
      });
   });
</script>
<script>
$(function(){
   $('a[href*=#]:not([href=#])').click(function() {
       if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
         var target = $(this.hash);
         target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
         if (target.length) {
           $('html,body').animate({
             scrollTop: (target.offset().top - 0) // adjust this according to your content
           }, 1000);
           return false;
         }
       }
   });
 });
</script>
<style type="text/css">
    .show-read-more .more-text{
        display: none;
    }
	
	.btn0 {
    padding: 14px 24px;
    border: 0 none;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
}
 
.btn0:focus, .btn0:active:focus, .btn0.active:focus {
    outline: 0 none;
}
 
.btn0-primary {
    background: #0099cc;
    color: #ffffff;
}
 
.btn0-primary:hover, .btn0-primary:focus, .btn0-primary:active, .btn0-primary.active, .open > .dropdown-toggle.btn0-primary {
    background: #33a6cc;
}
 
.btn0-primary:active, .btn0-primary.active {
    background: #007299;
    box-shadow: none;
}

.btn0.sharp {
  border-radius:0;
}

</style>
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
                <a class="navbar-brand" href="#"><img src="images/S6.png"></a>
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
        </header><br>
        <div class="start"></div>
        
        <div class="container-fluid">
            <div class="jumbotron profile-jumbo">
                <div class="row">
                    <div class="col-md-3">
                        <img src="images/academy-img.jpg" class="img-rounded">
                    </div>
                    <div class="col-md-8 info">
                        <div class="head">Name :</div><br>
						<div class="head">Gender :</div><br>
						<div class="head">Sport :</div><br>
                        <div class="head">Address :</div><br>
                        <div class="head">Contact :</div><br>
						<div class="head">Website :</div><br>
                    </div>
					<div class="col-md-1 text-left">
<button class="btn btn-success" style="padding: 10px 20px; border: 0 none;border-radius:0px; font-weight: 1000; letter-spacing: 1px; text-transform: uppercase;">4</button>
</div>
<div class="col-md-10 text-right">
							<a href="#review"><button class="btn0 btn0-primary">Write Review</button></a></div>
							<div class="br-wrapper br-theme-fontawesome-stars" style="border:0px solid white; padding-top:10px">
  <select id="example">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
  </select>
  
</div>

                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div style="margin-right:-25px; margin-left:30px"class="col-md-3">
                    <div class="jumbotron box">
                        <div class="text-center">
                            <h2>Experience</h2>
                        </div>
                    </div>
					 <div style="margin-top:-20px"class="jumbotron box">
                        <div class="text-center">
                            <h2>Fees</h2>
                        </div>
                    </div>
                </div>
                <div style="margin-right:-25px"class="col-md-6">
                    <div class="jumbotron box">
                        <div class="text-center">
                            <h2>About</h2>
                        </div>
                    </div>
                    <div style="margin-top:-20px"class="jumbotron box">
                        <div class="text-center">
                            <h2>Achievements</h2>
                        </div>
                    </div>
					 <div style="margin-top:-20px"class="jumbotron box">
                        <div class="text-center">
                            <h2>Reputed Players from Coach</h2>
                        </div>
                    </div>
					 <div style="margin-top:-20px"class="jumbotron box">
                        <div class="text-center">
                            <h2>Academies Working</h2>
                        </div>
                    </div>
					<div style="margin-top:-20px;"class=" ">
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
					
					<div style="margin-top:10px;"class="container-fluid text-left">
                    <div id="review" class="jumbotron box0">
					<div>
                        <h2>Comments and Reviews</h2>
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
            </div>
					
				</div>
                <div class="col-md-3">
                    <div>
                       <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"width="300" height="150" src="https://maps.google.com/maps?hl=en&q=Akhnoor , Jammu and Kashmir&ie=UTF8&t=satellite&z=6&iwloc=B&output=embed"><div><small><a href="http://embedgooglemaps.com">embedgooglemaps.com</a></small></div><div><small><a href="http://premiumlinkgenerator.com/keep2share-cc">keep2share premium link generator</a></small></div></iframe>
                    </div>
					<div style="margin-top:10px"class="jumbotron box">
                        <div class="text-center">
						<h2>Coaches Nearby</h2>
						</div>
						</div>
                </div>
            </div>
        </div>
        <br>
        <br><br>
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
