
<html>
    <head>
        <title>Tournament Sportz.com</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <?php include 'includeheader.php'; ?>
        <link href="css/tournament.css" rel="stylesheet">
        <link media="handheld, only screen and (max-width: 480px), only screen and (max-device-width: 480px)" href="css/mobile_tournament.css" type="text/css" rel="stylesheet" />
        <link media="handheld, only screen and (max-width: 480px), only screen and (max-device-width: 480px)" href="css/mobile_header.css" type="text/css" rel="stylesheet" />
        </head>
    <body>
        <header class="header">
        <?php include 'header.php';?>
        
        </header>
        
        <ol class="breadcrumb" style="margin-top: 140px;margin-bottom: -130px;">
            <li>&nbsp;<a href="index.php" class="btn"><span class="glyphicon glyphicon-home"></span> Home</a></li><span class="glyphicon glyphicon-chevron-right"></span>
            <li><a href="result.php" class="btn ">Result</a></li><span class="glyphicon glyphicon-chevron-right"></span>
            <li><a href="academy-profile.php" class="btn">Academy</a></li><span class="glyphicon glyphicon-chevron-right"></span>
            <li><a href="tournament.php" class="btn current">Tournament</a></li>
        </ol>
        <?php include 'connect.php'; 
                //mysql_select_db("sportz");
                $query = 'SELECT tour_id, name_tour, entry_fess, prize, reg_end_date, period, reccommended, rules, venue, mobile1, mobile2, email_id FROM tournaments where tour_id=\''.$_GET['id'].'\'';
                $result = mysql_query($query,$conn);
                while($row = mysql_fetch_array($result,MYSQL_ASSOC)){
        ?>
        <div class="start"></div>
        <div class="container-fluid text-center name">
            <h2><?php echo $row['name_tour'];?></h2>
        </div>
        <div class="prize">Prize <?php echo $row['prize'];?></div>
        <div class="banner">
            <img src="images/img1.jpg">
            
        </div>
        <div class="row info">
            <div class="col-xs-12 text-center">
                <div class="col-md-3"></div>
                <div class="circle col-xs-1">
                    F
                </div>
                <div class="circle col-xs-1">
                    U
                </div>
                <div class="circle col-xs-1">
                    D/N
                </div>
                <div class="circle col-xs-1">
                    Light
                </div>
                <div class="circle col-xs-1">
                    Ball
                </div>
                <div class="col-md-1">
                    <button class="btn btn-group btn-primary">Apply Now</button>
                </div>
                <div class="col-md-2"></div>    
            </div>
        </div>
        <br><br>
        
        <div class="row">
            <div class="col-md-9">
                <div class="container col-md-12">
                    <div class="col-md-5">
                        <div class="text-center container-fluid">
                            <div class="jumbotron details box">
                                <div class="text-center">
                                    <div>
                                        <h3>Last date of Registration</h3>
                                        <h4><?php echo $row['reg_end_date'];?></h4>
                                        </div>                            
                                    <div>
                                        <h3>Venue</h3>
                                        <h4><?php echo $row['venue'];?></h4>
                                    </div>
                                    <div>
                                        <h3>Time Period</h3>
                                        <h4><?php echo $row['period'];?></h4>
                                    </div>
                                    <div>
                                        <h3>Fees</h3>
                                        <h4><?php echo $row['entry_fess'];?> Rs./Month</h4>
                                    </div>
                                    <div>
                                        <h3>Contact Details</h3>
                                        <h4>Phone 1:<?php echo $row['mobile1'];?></h4>
                                        <h4>Phone 2:<?php echo $row['mobile2'];?></h4>
                                    </div>
                                    <div>
                                        <h3>Email ID</h3>
                                        <h4><?php echo $row['email_id'];?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="container-fluid text-center">
                            <div class="jumbotron box news">
                                <h2>Official News</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 table-responsive">
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
                                    
                                </tbody>
                            </table>
                        </div>
                    </div></div>
            </div>
            <div class="col-md-3">
                <div class=" container-fluid">
                    <div class="jumbotron details box rules">
                        <div>
                            <h2 class="text-center">Rules</h2>
                        </div>
                        <?php $rules = explode('?',$row['rules']);?>
                        <ul class="list"><h4>
                            <?php foreach ($rules as $value) {
                                  
                                echo '<li>'.$value.'</li>';
                            } ?>
                            </h4></ul>
                    </div>
                </div>
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
        <?php }?>
        <?php include 'footer.php';?>
    </body>
</html>
