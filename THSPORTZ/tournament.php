
<html>
    <head>
        <title>Tournament-Profile</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=0.0, maximum-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="css/tournament.css" rel="stylesheet">
        <link href="css/header.css" rel="stylesheet">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
	
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
                <a class="navbar-brand" href="index.html"><img src="images/S6.png"></a>
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
        <div class="start"></div>
        <div class="container-fluid text-center name">
            <h2 style="color:white">Tournament Name</h2>
        </div>
        <div class="prize">Prize 80000</div>
        <div class="banner">
            <img src="images/img1.jpg">
            
        </div>

				<div style="margin-top:5px;"class="row">
		<div class="col-md-3"></div>
                            <div class="col-md-9">
                                <div class="row text-center">
                                <div class="fac col-md-1">
                                    <a href="#" title="DougOut Available"><img class="image-responsive"src="images/Cricket.png"></a>
                                </div>
                                <div class="fac col-md-1">
                                    <a href="#"  title="Highlights Available"><img class="image-responsive"src="images/ballc.png"></a>
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
        <div style="margin-top:5px"class="row">
                    <div class="col-md-3">
                        <div style="margin-left:10px;margin-right:-25px "class="text-center container-fluid box">
                            
                                <div class="text-left">
                                    <div>
                                        <h2>General Info:</h2>
                                        <h4>xyz</h4>
                                        </div>                            
                                    <div>
                                        <h2>Venue</h2>
                                        <h4>Vikhroli</h4>
                                    </div>
                                    <div>
                                        <h2>Timings</h2>
                                        <h4>10-12 AM<br>4-7 PM</h4>
                                    </div>
                                    <div>
                                        <h2>Fees</h2>
                                        <h4>10000 Rs./Month</h4>
                                    </div>
                                    <div>
                                        <h2>Contact Details</h2>
                                        <h4>Phone:897481974</h4>
                                    </div>

									
                                </div>
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="container-fluid text-center box">                           
                                <h2>About the Tournament</h2>								                            
                               <br>                           								
                        </div>
						<div style="margin-top:5px;"class=" ">
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
                    <div class="jumbotron box0">
					<div>
                        <h2>Comments and Reviews</h2>
						<div class="accordion" id="accordion2">
  <div class="accordion-group">
    <div class="accordion-heading">
    <blockquote>1. Delighted</blockquote>
	<blockquote>2. What a match</blockquote>
    </div>
    <div id="collapseTwo" class="accordion-body collapse">
      <div class="accordion-inner">
 <blockquote>3. Good team work</blockquote>
 <blockquote>4. Luky to be here</blockquote>
 <blockquote>5. A match we can say of</blockquote>
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
					<div style="margin-left:-10px; margin-right:0px"> 
					 <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"width="300" height="150" src="https://maps.google.com/maps?hl=en&q=Akhnoor , Jammu and Kashmir&ie=UTF8&t=satellite&z=6&iwloc=B&output=embed"><div><small><a href="http://embedgooglemaps.com">embedgooglemaps.com</a></small></div><div><small><a href="http://premiumlinkgenerator.com/keep2share-cc">keep2share premium link generator</a></small></div></iframe>
							</div>		
                    <div style=" margin-top:5px;margin-left:-25px; margin-right:0px" class="container-fluid text-center box">                           
							<div>
                            <h2>Rules and Regulations</h2>
							<ul>
							<li>Rule 1</li>
							<li>Rule 2</li>
							<li>Rule 3</li>
							<li>Rule 4</li>
							<li>Rule 5</li>
							<li>Rule 6</li>
							<li>Rule 7</li>
							<li>Rule 8</li>
							<li>Rule 9</li>
							<li>Rule 10</li>
							</ul>
                        </div>                      
							</div>									
					<div style=" margin-top:5px; margin-left:-25px; margin-right:0px" class="container-fluid text-center box">
                     <div><h2> T & C</h2>

</div>					 
					</div>
					</div>
                    </div>
<div style="margin-top:5px"class="row">
<div style="margin-left:10px;margin-right:-10px"class="col-md-9 table-responsive">
                    <div class="text-center capt">Fixtures</div>
                        <div class="table table-hover table-bordered">
                            <table class="table table-hover ">
                                <thead >
                                    <th class="text-center">Date</th>
                                    <th class="text-center">Teams</th>
                                    <th class="text-center">Timings</th>
                                    <th class="text-center">Result</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>26-09-2015</td>
                                        <td><a href="#">Team1</a> vs <a href="#">Team2</a></td>
                                        <td>7 PM onwards</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>26-09-2015</td>
                                        <td><a href="#">Team1</a> vs <a href="#">Team2</a></td>
                                        <td>7 PM onwards</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>will decided later</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>will decided later</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>will decided later</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>will decided later</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
									<tr>
                                        <td></td>
                                        <td>will decided later</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
									<tr>
                                        <td></td>
                                        <td>will decided later</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
									
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
					<div class="col-md-3">
					<div style=" margin-left:-15px; margin-right:0px"class="text-center table-responsive">
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
</div>					
					
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
