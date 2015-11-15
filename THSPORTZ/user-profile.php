<html>
    <head>
        <title>Academy-Profile Sportz.com</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="css/user-profile.css" rel="stylesheet">
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
                    <div class="col-md-9 info">
                        <div class="head">Name :</div><br>
                        <div class="head">Address :</div><br>
                        <div class="head">School/College :</div><br>
                        <div class="head">Clubs :</div><br>
                        <div class="head">Achievements :</div><br>
                        <div class="head">Contact :</div><br>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="jumbotron box">
                        <div class="text-center">
                            <h2>Achievements</h2>
                        </div>
                    </div>
                    <div class="jumbotron box text-center">
                        <h2>Sponsored clubs</h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="jumbotron box">
                        <div class="text-center">
                            <h2>Recently Participated</h2>
                        </div>
                    </div>
                    <div class="jumbotron box">
                        <div class="text-center">
                            <h2>Associated Teams</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="jumbotron box">
                        <div class="text-center">
                            <h2>Upcoming Events</h2>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-12">
                    <div class="col-md-4">
                        <div class="box-response text-center">
                            <h4>Facebook response</h4>
                            <h5>Comments will be here</h5>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-response text-center">
                            <h4>Twitter Response</h4>
                            <h5>Comments will be here</h5>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-response text-center">
                            <h4>Google+ Response</h4>
                            <h5>Comments will be here</h5>
                        </div>
                    </div>
            </div>
        </div>
        <br><br>
        <footer>
            <div class="container-fluid">
                <ul class="list-inline pull-left text-muted">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Site Map</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                </ul>
            </div>
        </footer>
    </body>
</html>
