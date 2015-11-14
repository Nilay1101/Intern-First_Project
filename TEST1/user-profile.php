<html>
    <head>
        <title>Academy-Profile Sportz.com</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include 'includeheader.php'; ?>
        <link href="css/user-profile.css" rel="stylesheet">
        <link media="handheld, only screen and (max-width: 480px), only screen and (max-device-width: 480px)" href="css/mobile_user-profile.css" type="text/css" rel="stylesheet" />
        <link media="handheld, only screen and (max-width: 480px), only screen and (max-device-width: 480px)" href="css/mobile_header.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <header class="header">
        <?php include 'header.php';?>
        <?php //include 'breadcrumb.php';?>    
        </header>
        <ol class="breadcrumb" style="margin-top: 140px;margin-bottom: -130px;">
            <li>&nbsp;<a href="index.php" class="btn "><span class="glyphicon glyphicon-home"></span> Home</a></li><span class="glyphicon glyphicon-chevron-right"></span>
            <li><a href="result.php" class="btn ">Result</a></li><span class="glyphicon glyphicon-chevron-right"></span>
            <li><a href="academy-profile.php" class="btn ">Academy</a></li><span class="glyphicon glyphicon-chevron-right"></span>
            <li><a href="tournament.php" class="btn ">Tournament</a></li><span class="glyphicon glyphicon-chevron-right"></span>
            <li><a href="user-profile.php" class="btn current">User-Profile</a></li>
        </ol>
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
                <div class="col-md-9">
                    <div class="col-lg-6">
                    <div class="jumbotron box">
                        <div class="text-center">
                            <h2>Achievements</h2>
                        </div>
                    </div>
                    <div class="jumbotron box text-center">
                        <h2>Sponsored clubs</h2>
                    </div>
                </div>
                <div class="col-lg-6">
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
                </div>
                
                <div class="col-md-3">
                    <div class="text-center table-responsive">
                        <div class="text-center capt">Upcoming<br>Events</div>
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
        
        <?php include 'footer.php';?>
    </body>
</html>
