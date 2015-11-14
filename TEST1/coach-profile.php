
<?php include "connect.php" ?>
<html>
    <head>
        <title>Academy-Profile Sportz.com</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="css/coach-profile.css" rel="stylesheet">
        <link href="css/header.css" rel="stylesheet">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
            
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
                <a class="navbar-brand" href="#"><img src=""></a>
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
        <?php   
                //mysql_select_db("sportz");
                $query = 'SELECT * FROM th_coachregister_mumbai WHERE id=\''.$_GET['id'].'\'';
                $result = mysql_query($query,$conn);
                while($row = mysql_fetch_array($result,MYSQL_ASSOC)){
        ?>
        <div class="start"></div>
        
        <div class="container-fluid">
            <div class="jumbotron profile-jumbo">
                <div class="row">
                    <div class="col-md-3">
                        <img src="images/academy-img.jpg" class="img-rounded">
                    </div>
                    <div class="col-md-9 info">
                        <div class="head">Name :&nbsp;&nbsp;<?php echo $row['name']; ?></div><br>
						<div class="head">Gender :&nbsp;&nbsp;<?php echo $row['gender']; ?></div><br>
						<div class="head">Sport :&nbsp;&nbsp;<?php echo $row['select_sport']; ?></div><br>
                        <div class="head">Address :&nbsp;&nbsp;&nbsp;<?php echo $row['city']; ?></div><br>
                        <div class="head">Contact :&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['email']; ?></div><br>
						<div class="head">Website :&nbsp;&nbsp;<?php echo $row['website']; ?></div><br>
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
                            <h2>Experience</h2><br>
                            <h2><?php echo $row['experience']; ?></h2>
                        </div>
                    </div>
					 <div style="margin-top:-20px"class="jumbotron box">
                        <div class="text-center">
                            <h2>Fees</h2>
                            <h2><?php echo $row['fees']; ?></h2>
                        </div>
                    </div>
                </div>
                <div style="margin-right:-25px"class="col-md-6">
                    <div class="jumbotron box">
                        <div class="text-center">
                            <h2>About</h2>
                            <h2><?php echo $row['about_me']; ?></h2>
                        </div>
                    </div>
                    <div style="margin-top:-20px"class="jumbotron box">
                        <div class="text-center">
                            <h2>Achievements</h2>
                            <h2><?php echo $row['achievements']; ?></h2>
                        </div>
                    </div>
					 <div style="margin-top:-20px"class="jumbotron box">
                        <div class="text-center">
                            <h2>Reputed Players from Coach</h2>
                            <h2><?php echo $row['reputed_players']; ?></h2>
                        </div>
                    </div>
					 <div style="margin-top:-20px"class="jumbotron box">
                        <div class="text-center">
                            <h2>Academies Working</h2>
                            <h2><?php echo $row['academies_working']; ?></h2>
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
							
							<div style="margin-top:8px;"class="container-fluid text-center box">
					<div>
                        <h2>Comments and Reviews</h2>
						<blockquote>Appreciable management . Also its located in a mesmerising location . Good job!</blockquote>
                    </div>
					<br><br><br><br><br><br>
					<a href="#"><h6>Read more...</h6></a>
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
        <?php } ?>
    </body>
</html>
