<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Academy-Profile Sportz.com</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include 'includeheader.php'; ?>
        <link href="css/academy-profile.css" rel="stylesheet">
        <link media="handheld, only screen and (max-width: 480px), only screen and (max-device-width: 480px)" href="css/mobile_academy-profile.css" type="text/css" rel="stylesheet" />
        <link media="handheld, only screen and (max-width: 480px), only screen and (max-device-width: 480px)" href="css/mobile_header.css" type="text/css" rel="stylesheet" />
        <script>
            $(document).ready(function(){
                $('[data-toggle="tooltip"]').tooltip();
            });
            
});
        </script>
            
    </head>
    <body>
        <header class="header">
        <?php include 'header.php';?>
        <?php //include 'breadcrumb.php';?>    
        </header>
        <ol class="breadcrumb" style="margin-top: 140px;margin-bottom: -130px;">
            <li>&nbsp;<a href="index.php" class="btn "><span class="glyphicon glyphicon-home"></span> Home</a></li><span class="glyphicon glyphicon-chevron-right"></span>
            <li><a href="result.php?sports_type=<?php echo $_GET['type'].'&area='.$_GET['area'];?>" class="btn ">Result</a></li><span class="glyphicon glyphicon-chevron-right"></span>
            <li><a href="academy-profile.php" class="btn current">Academy</a></li>
        </ol><br>
        <br><br><br><br><br>
        <?php   include 'connect.php'; 
                //mysql_select_db("sportz");
                $query = 'SELECT acc_id, name_academy, address, timings, fees, coaches, mobile1, mobile2 FROM academies where acc_id=\''.$_GET['id'].'\'';
                $result = mysql_query($query,$conn);
                while($row = mysql_fetch_array($result,MYSQL_ASSOC)){
        ?>
        <div class="container-fluid">
            <div class="jumbotron profile-jumbo">
                <div class="row">
                    <div class="col-md-3 ">
                        <img src="images/academy-img.jpg" class="img-rounded">
                    </div>
                    <div class="col-md-9">
                        <h2 class=""><?php echo $row['name_academy']; ?></h2>
                        <div class="row facility">
                            <div class="col-md-3"></div>
                            <div class="col-md-9">
                                <div class="row pull-right">
                                <div class="fac-tick col-xs-1">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="facility1"><img src="images/tick1.png"></a>
                                </div>
                                <div class="fac-tick col-xs-1">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="facility2"><img src="images/tick1.png"></a>
                                </div>
                                <div class="fac-tick col-xs-1">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="facility3"><img src="images/tick1.png"></a>
                                </div>
                                <div class="fac-tick col-xs-1">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="facility5">.</a>
                                </div>
                                <div class="fac-tick col-xs-1">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="facility5"><img src="images/tick1.png"></a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="multipletabs">
                        <ul class="nav nav-tabs">
                          <li class="active"><a data-toggle="tab" href="#home">Contact Details</a></li>
                          <li><a data-toggle="tab" href="#menu1">Coach Info</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                                <div class="multi-details jumbotron">
                                    <div class="text-center">
                                        <div>
                                            <h2>Contact Details</h2>
                                            <h4>Phone 1: <?php echo $row['mobile1']; ?></h4>
                                            <h4>Phone 2: <?php echo $row['mobile2']; ?></h4>
                                        </div>
                                        <div>
                                            <h2>Timings</h2>
                                            <h4><?php echo $row['timings']; ?></h4>
                                        </div>
                                        <div>
                                            <h2>Address</h2>
                                            <h4><?php echo $row['address']; ?></h4>
                                        </div>
                                        <div>
                                            <h2>Fees</h2>
                                            <h4><?php echo $row['fees']; ?> Rs./Month</h4>
                                        </div>
                                        <div>
                                            <h2>No. of Coaches</h2>
                                            <h4><?php echo $row['coaches']; ?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="menu1" class="tab-pane fade">
                                <div class="jumbotron multi-details">
                                    <div class="text-center">
                                        <h3>Coaches Information</h3>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <div class="col-md-9">
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
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true">
                            </span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <br><br>
                <div class="col-md-9 box">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="jumbotron details">
                                <h4>Accreditation By Newspaper/Achievements </h4>
                            </div>
                            <div class="jumbotron details">
                                <h4>Official News </h4>
                            </div>
                            <div class="jumbotron details">
                                <h4>Comments/ Reviews</h4>
                            </div>
                        </div>
                        <div class="col-md-4">
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
                </div>
            </div>
        </div>
        <br>
        
        <?php include 'footer.php';?>
    </body>
</html>
