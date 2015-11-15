
<html>
    <head>
        <title>Venue-Profile</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="css/venue.css" rel="stylesheet">
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
            <ol class="breadcrumb" style="margin-top: 140px;margin-bottom: -140px;">
            <li><a href="index.html" >Home</a></li>
            <li><a href="result.html">Result</a></li>
            <li><a href="academy-profile.html">Academy</a></li>
            <li><a href="tournament.html">Tournament</a></li>
            <li><a href="venue.html">Venue</a></li>
            <li><a href="user-profile.html">User-Profile</a></li>
            <li><a href="teams.html">Teams</a></li>
        </ol>
        </header>
        <br><br><br><br><br><br>
        <div class="container-fluid text-center name">
            <div style="margin-bottom:5px;"class="col-lg-4 text-center"><h2 style="color:white">Venue Name</h2></div>
			 <div style="margin-top:15px; margin-right:-70px" class="col-lg-3 text-right"><a href="#"><h4>Write a review</h4></a></div>
			 <div class="col-lg-5">
			<div class="row pull-right">
								
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
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="10000">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active">1</li>
                <li data-target="#myCarousel" data-slide-to="1">2</li>
                <li data-target="#myCarousel" data-slide-to="2">3</li>
                <li data-target="#myCarousel" data-slide-to="3">4</li>
            </ol>
            
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="images/img1.jpg">
                </div>
                <div class="item">
                    <img src="images/img2.jpg" >
                </div>
                <div class="item ">
                    <img src="images/img3.jpg" >
                </div>
                <div class="item">
                    <img src="images/img4.jpg" >
                </div>
                 
            </div>
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right " aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
		
		<div style="margin-top:5px;"class="row">
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
		
        
        <div class="row">
            <div class="col-md-3">
                <div style="margin-top:5px ; margin-right:-52px ; margin-left:-5px"class="text-left container-fluid">
                    <div class="jumbotron box">
                        <div>
                            <h2>Address</h2>
                            <h4>near xyz hotel,Vikhroli east</h4>
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
            <div style="margin-top:5px;"class="col-md-6">
			<div class="container-fluid text-center">
			<div>
			<a href="#"><button type="button" class="btn btn-info"><h3>Book Your Seats</h3></button></a>
			</div>
			</div>
                <div style="margin-top:10px;"class="container-fluid text-left">
                    <div class="jumbotron box">
					<div>
                        <h2>Comments and Reviews</h2>
						<div class="accordion" id="accordion2">
  <div class="accordion-group">
    <div class="accordion-heading">
    <blockquote>1. Adorable. The location's prefect </blockquote>
	<blockquote>2. The services lack quality</blockquote>
    </div>
    <div id="collapseTwo" class="accordion-body collapse">
      <div class="accordion-inner">
 <blockquote>3. Good all together</blockquote>
 <blockquote>4. Luky to be here</blockquote>
 <blockquote>5. A venue we can talk of</blockquote>
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
                <div  style="margin-top:5px ; margin-left:-35px; margin-right:0px" class="text-center table-responsive">
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
