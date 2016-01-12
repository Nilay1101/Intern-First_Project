<html>
    <head>
        <title>Search Result</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <?php include 'includeheader.php'; ?>
        
        <link href="css/result.css" rel="stylesheet">
        <script src="js/hover.js"></script>
        <link href="css/jquery-ui.css" rel="stylesheet">
        <script src="js/jquery-ui.min.js"></script>
        <script>
            $(function() {
                
                $('#type_type').change(function(){
                    var type = $('#type_type').val();
                    $("#sports_type").autocomplete({
                        source: 'search_bar.php?key='+type,
                        minLength:0,
                    });
                });
                    
                    
                
                $("#area").keyup(function(){
                    var sports = $('#sports_type').val();
                    var type = $('#type_type').val();
                    $("#area").autocomplete({
                        source:"search_bar2.php?key="+sports+"&type="+type,
                        minLength:0,
                    });
                });
                $('.collapse').collapse(hide);
         });
         

        </script>
        
       
        
        
    </head>
    <body>
        <header class="header">
            <?php include 'header.php'; ?>
        </header>
        <ol class="breadcrumb" style="margin-top: 135px;margin-bottom: -145px;">
            <li>&nbsp;<a href="index.php" class="btn"><span class="glyphicon glyphicon-home"></span> Home</a></li><span class="glyphicon glyphicon-chevron-right"></span>
            <li><a href="result.php" class="btn current">Result</a></li>
        </ol>
        <div class="start"></div>
        <div class="searchbar container-fluid">
                    <form action="result.php" method="POST">
                    <div class="form-group form-inline text-center has-feedback" style="margin-top: 15px;">
                        <div class="input-group">
                            <select name="type" class="form-control" id="type_type" style="margin-top: -1px;">
                                <option>Acad../Tour.</option>
                                <option>Academy</option>
                                <option>Tournament</option>
                            </select>
                        </div>
                        <div class="input-group">
                                <input input="text" id="sports_type" name="sports_type" class="form-control" style="//margin-top: 15px; width: 180px;" placeholder="Sports Type...">
                                <span class="input-group-addon"><span class=" glyphicon glyphicon-chevron-down"></span></span>
                        </div>
                        <div class="input-group">
                                <input id="area" class="form-control" name="area" style="//margin-top: 15px; width: 380px;" placeholder="Search for Area..." >
                        </div>
                        <button type="submit" class="btn btn-warning" style="width: 180px; margin-top: 0px;">Search</button>
                    </div><br><br>
                </form>
        </div>
        <br>    
        <?php
        include 'connect.php';
        $type='';
        if(isset($_POST['sports_type'])){
            $type = $_POST['sports_type'];
            $area = $_POST['area'];
            $type_type = $_POST['type'];
            
        }
        if(isset($_GET['sports_type'])){
            $type = $_GET['sports_type'];
            $area = $_GET['area'];
        }
        
        $null = '';
        if(strcmp($type,$null))
        {
            if($type_type=='Academy'){
                $query = 'SELECT acc_id, name_academy, address, timings, fees, coaches FROM academies where type like \'%'.$type.'%\' && area like \'%'.$area.'%\'';
                $result = mysql_query($query,$conn);
            }
            if($type_type=='Tournament'){
                $query = 'SELECT tour_id, name_tour, entry_fess, reg_end_date, reccommended, venue FROM tournaments where type like \'%'.$type.'%\' && area like \'%'.$area.'%\'';
                $result = mysql_query($query,$conn);
            }
            
        
        
        
?>
        <div class="row">
            <div class="col-md-3">
                <div class="jumbotron filtering">
                    <h4>Filters</h4>
                    <hr>
                    <form role="form">
                        <div class="form-group filter-box">
                            <label for="sex" class="heading">Sex<span class="pull-right btn btn-sm glyphicon glyphicon-chevron-down" data-toggle="collapse" data-target="#group1"></span></label>
                            <div id="group1" class="collapse">
                                <div class="checkbox">
                                    <label><input type="checkbox">Male</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">Female</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">Unisex</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group filter-box">
                            <label for="type" class="heading">Type<span class="pull-right btn btn-sm glyphicon glyphicon-chevron-down" data-toggle="collapse" data-target="#group2"></span></label>
                            <div id="group2" class="collapse">
                                <div class="checkbox">
                                    <label><input type="checkbox">Indoor</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">Outdoor</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group filter-box">
                            <label for="facility" class="heading">Facility<span class="pull-right btn btn-sm glyphicon glyphicon-chevron-down" data-toggle="collapse" data-target="#group3"></span></label>
                            <div class="collapse" id="group3">
                                <div class="checkbox">
                                    <label><input type="checkbox">Facility1</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">Facility2</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">Facility3</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">Facility4</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">Facility5</label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                    
            </div>
            <div class="col-md-6">
                <div class="form-group form-inline sorting">
                    <label>Fees &nbsp;<span class="glyphicon glyphicon-sort sorting"></span></label>
                    <label>A-Z &nbsp;<span class="glyphicon glyphicon-sort-by-alphabet"></span></label>
                    <label>Ratings &nbsp;<span class="glyphicon glyphicon-sort"></span></label>
                    <label>No of Coaches &nbsp;<span class="glyphicon glyphicon-sort"></span></label>
                    
                </div>
                <div class="container resultbox">
                    
                    <h3><?php echo $type.' '.$type_type; ?> in <?php echo $area;?></h3>
                    <?php if($type_type=='Academy'){
                        while($row = mysql_fetch_array($result,MYSQL_ASSOC)){ ?>
                    <div class="hover-box" onclick="location.href='academy-profile.php?id=<?php echo $row['acc_id'].'&type='.$type.'&area='.$area;?>';">
                        <div class="box">
                        <hr>
                        <p class="btn btn-success pull-right">4.3</p>
                        <address>
                            <div class="name"><a href="tournament.php?id=<?php echo $row['tour_id'].'&type='.$type.'&area='.$area;?>"><?php echo $row['name_academy'];?></a></div>
                            <strong>Address ></strong><?php echo $row['address'];?>
                            <br><strong>Timings ></strong><?php echo $row['timings'];?>
                            <a href="sportz/result.html"></a>
                            <br><strong>Fess ></strong><?php echo $row['fees'];?>
                            <br><strong>No of Coaches > </strong><?php echo $row['coaches'];?>
                        <br>
                            <ol class="list-inline pull-right box-list">
                                <li><img src="images/tick1.png"></li>
                                <li><img src="images/tick1.png"></li>
                                <li><img src="images/tick1.png"></li>
                                <li><img src="images/tick1.png"></li>
                                <li><img src="images/tick1.png"></li>
                            </ol>
                        </address>
                        </div><br>
                
                        </div><?php }}?>
                    <?php if($type_type=='Tournament'){
                        while($row = mysql_fetch_array($result,MYSQL_ASSOC)){ ?>
                    <div class="hover-box" onclick="location.href='tournament.php?id=<?php echo $row['tour_id'].'&type='.$type.'&area='.$area;?>';">
                        <div class="box">
                        <hr>
                        <p class="btn btn-success pull-right">4.3</p>
                        <address>
                            <div class="name"><a href="academy-profile.php?id=<?php echo $row['tour_id'].'&type='.$type.'&area='.$area;?>"><?php echo $row['name_tour'];?></a></div>
                            <strong>Entry Fees ></strong><?php echo $row['entry_fess'];?>
                            <br><strong>Registration End date ></strong><?php echo $row['reg_end_date'];?>
                            <a href="sportz/result.html"></a>
                            <br><strong>Reccommended By ></strong><?php echo $row['reccommended'];?>
                            <br><strong>Venue > </strong><?php echo $row['venue'];?>
                        <br>
                            <ol class="list-inline pull-right box-list">
                                <li><img src="images/tick1.png"></li>
                                <li><img src="images/tick1.png"></li>
                                <li><img src="images/tick1.png"></li>
                                <li><img src="images/tick1.png"></li>
                                <li><img src="images/tick1.png"></li>
                            </ol>
                        </address>
                        </div><br>
                
                        </div><?php }}?>
                    
                </div>
            </div>
            <div class="col-md-3">
                
                <div class="col-md-12 ">
                    <div class="container-fluid right sponsored-box">
                    <?php include 'resultbox_sponsored.php'; ?>
                    <?php include 'resultbox_sponsored.php'; ?>
                    <?php include 'resultbox_sponsored.php'; ?>
                    <?php include 'resultbox_sponsored.php'; ?>
                </div>
                </div>
                                
            </div>
            <div class=""></div>
        <?php }?>     
        </div>
            
        
        <?php include 'footer.php';?>
    </body>
</html>
