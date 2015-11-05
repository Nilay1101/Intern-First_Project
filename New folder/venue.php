
<html>
    <head>
        <title>Venue Sportz.com</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include 'includeheader.php'; ?>
        <link href="css/venue.css" rel="stylesheet">
        <link media="handheld, only screen and (max-width: 480px), only screen and (max-device-width: 480px)" href="css/mobile_venue.css" type="text/css" rel="stylesheet" />
        <link media="handheld, only screen and (max-width: 480px), only screen and (max-device-width: 480px)" href="css/mobile_header.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <header class="header">
        <?php include 'header.php';?>
        <?php //include 'breadcrumb.php';?>    
        </header>
        <ol class="breadcrumb" style="margin-top: 140px;margin-bottom: -140px;">
            <li>&nbsp;<a href="index.php" class="btn "><span class="glyphicon glyphicon-home"></span> Home</a></li><span class="glyphicon glyphicon-chevron-right"></span>
            <li><a href="result.php" class="btn ">Result</a></li><span class="glyphicon glyphicon-chevron-right"></span>
            <li><a href="academy-profile.php" class="btn ">Academy</a></li><span class="glyphicon glyphicon-chevron-right"></span>
            <li><a href="tournament.php" class="btn ">Tournament</a></li><span class="glyphicon glyphicon-chevron-right"></span>
            <li><a href="venue.php" class="btn current">Venue</a></li>
        </ol>
        <br><br><br><br><br><br>
        <div class="container-fluid text-center name">
            <h2>Venue Name</h2>
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
        <div class="row info">
            <div class="col-md-12 text-center">
                <div class="col-md-1"></div>
                <div class="circle col-xs-1">
                    grass
                </div>
                <div class="circle col-xs-1">
                    70m
                </div>
                <div class="circle col-xs-1">
                    black soil
                </div>
                <div class="circle col-xs-1">
                    line/rope
                </div>
                <div class="circle col-xs-1">
                    score card
                </div>
                <div class="circle col-xs-1">
                    line/rope
                </div>
                <div class="circle col-xs-1 ">
                    water
                </div>
                <div class="circle col-xs-1">
                    wash room
                </div>
                <div class="col-md-1">
                    <button type="submit" class="btn btn-group btn-primary">Apply Now</button>
                </div>
            </div>
        </div>
        <br><br>
        
        <div class="row">
            <div class="col-md-3">
                <div class="text-center container-fluid">
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
            <div class="col-md-6">
                <div class="container-fluid text-center">
                    <div class="jumbotron box news">
                        <h2>Official News</h2>
                        <hr>
                        <h2>Official Links</h2>
                    </div>
                </div>
                <div class="container-fluid text-center">
                    <div class="jumbotron box news">
                        <h2>Reviews</h2>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-center table-responsive">
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
        <br>
        
        <?php include 'footer.php';?>
    </body>
</html>
