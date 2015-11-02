<html>
    <head>
        <title>Search Result</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <?php include 'includeheader.php'; ?>
        
        <link href="css/result.css" rel="stylesheet">
        <script src="js/hover.js"></script>
        <link href="css/jquery-ui.css" rel="stylesheet">
        <link href="js/select2/select2.css" rel="stylesheet">
        <link media="handheld, only screen and (max-width: 480px), only screen and (max-device-width: 540px)" href="css/mobile_result.css" type="text/css" rel="stylesheet" />
        <link media="handheld, only screen and (max-width: 480px), only screen and (max-device-width: 540px)" href="css/mobile_header.css" type="text/css" rel="stylesheet" />
        <script src="js/select2/select2.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-multiselect.js"></script>
        <link rel="stylesheet" href="css/bootstrap-multiselect.css" type="text/css"/>
        <script>
		$(document).ready(function() {
		    
		    
        $('#select_sport').multiselect({
			 enableCaseInsensitiveFiltering: true,

            includeSelectAllOption: true,
            buttonWidth: '300px',
            maxHeight: 250
        });
        
        
            
            $('#fees_sub').click(function(){
                
               $('#disp1').hide(); 
            });
            
        
            
		
    });
</script>
        <script>
            $(function() {
                /*
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
                });*/
               
                $("#area").autocomplete({
                    source:"search_bar.php",
                    minLength:0,
                
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
                    <form action="search_tournament.php" method="POST">
                    <div class="form-group form-inline text-center has-feedback" style="margin-top: 15px;">
                        <div class="input-group">
                               
                            <div class="form-group">
								<select name="selected_sports[]" id="select_sport" multiple="multiple"  placeholder="Select Sports">
														<option value="cricket" selected="selected">Cricket</option>
														<option value="swimming">Swimming</option>
														<option value="aqua">Aqua</option>
														<option value="football">Football</option>
														<option value="tennis">Tennis</option>
														<option value="gym">Gym</option>
														<option value="training">Training</option>
														<option value="kabaddi">Kabaddi</option>
														<option value="athletics">Athletics</option>
														<option value="badminton">Badminton</option>
														<option value="basketball">Basketball</option>
														<option value="carrom">Carrom</option>
														<option value="chess">Chess</option>
														<option value="table tennis">Table Tennis</option>
														<option value="vollyball">Vollyball</option>
														<option value="boxing">Boxing</option>
														<option value="wrestling">Wrestling</option>
														<option value="hockey">Hockey</option>
														<option value="billiards">Billiards</option>
														<option value="snooker">Snooker</option>
														<option value="archery">Archery</option>
														<option value="golf">Golf</option>
														<option value="cycling">Cycling</option>
														<option value="traditional sports">Traditional Sports</option>
								</select>	
									
								</div>
                            
                        </div>
                        
                        <div class="input-group">
                                <input id="area" class="form-control search_input" name="query" style="" placeholder="Search any Academy/Tournament/Venue/Coach..." >
                        </div>
                        <button type="submit" class="btn" name="search_sub" style="">Search</button>
                    </div><br><br>
                </form>
        </div>
        <br>    
        <?php
        include 'connect.php';
        include 'resultFunctions.php';
        echo $fees_sort;
        $type='';
         
         echo $_GET['search_query'];
         echo $_GET['typeString'];
         
         if(isset($_GET['search_query'])&&isset($_GET['typeString']))
         {
             $search_query=$_GET['search_query'];
             $typeString=$_GET['typeString'];
             
         }
        if(isset($_POST['query'])){
            $type = $_POST['selected_sports'];
            $search_query = $_POST['query'];
            //$type_type = $_POST['type'];
            
        }
        if(isset($_GET['sports_type'])){
            $type = $_GET['sports_type'];
            $area = $_GET['area'];
        }
        $error = FALSE;
        $count_in = substr_count($search_query, ' in ');
        $count_qt = substr_count($search_query, '"');
        if($count_in>1 || $count_qt>2){
            $error = TRUE;
        }
        $typeString = '';
        $typeString .= 'type like \'%'.$type[0].'%\'';
        if(isset($type[1])){
            $typeString .= ' OR type like \'%'.$type[1].'%\'';
            if(isset($type[2])){
                $typeString .= ' OR type like \'%'.$type[2].'%\'';
            }
        }
        $multiple = TRUE;
        
        if(strpos($search_query, ' in ')){
            $multiple = FALSE;
        }
        if(!$multiple && !$error){
            $search_query_strip = explode(' in ', $search_query);
            $search_query_q = explode('"', $search_query_strip[0]);
            $search_query_term = $search_query_q[1];
            $search_query_type = $search_query_strip[1];
            
            switch ($search_query_type) {
                
                case 'Academies':  echo '<script>window.location="search_academy.php";</script>';
                    $mysql_query = 'SELECT acc_id, name_academy, address, timings, fees, coaches FROM academies where ('.$typeString.') AND name_academy like \'%'.$search_query_term.'%\'';
                    $result = mysql_query($mysql_query,$conn);
                    break;
                case 'Tournaments':
                    $mysql_query = 'SELECT tour_id, name_tour, entry_fess, reg_end_date, reccommended, venue FROM tournaments where ('.$typeString.') AND name_tour like \'%'.$search_query_term.'%\'';
                    $result = mysql_query($mysql_query,$conn);
                    break;

                default:
                    break;
            }
        }
        else {
            
            if(!isset($_GET['fees_sub'])&&!isset($_GET['a-z_sub'])){
            
            $mysql_query_academy = 'SELECT acc_id, name_academy, address, timings, fees, coaches FROM academies where ('.$typeString.') AND name_academy like \'%'.$search_query.'%\'';
            
            
            $result_academy = mysql_query($mysql_query_academy,$conn);
            $mysql_query_tournament = 'SELECT tour_id, name_tour, entry_fess, reg_end_date, reccommended, venue FROM tournaments where ('.$typeString.') AND name_tour like \'%'.$search_query.'%\'';
            $result_tournament = mysql_query($mysql_query_tournament,$conn);
            }
        }
        
        //echo '<h1>'.$typeString.'</h1>';
        $search_query = $_POST['query'];
        
        $null = '';
        if(!strcmp($search_query,$null)&&!isset($_GET['fees_sub'])&&!isset($_GET['a-z_sub']))
        {
           
               
          
                
                
            
              ?>  
             
                <div class="row" id="disp1">
            <div class="col-md-3">
                <div class="jumbotron filtering">
                    <h4>Filters</h4>
                    <hr>
                    <form role="form">
                        <div class="form-group filter-box">
                            
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
                        <div class="form-group filter-box">
                            
                            
                                <div class="checkbox">
                                    <label><input type="checkbox">Indoor</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">Outdoor</label>
                                </div>
                            
                        </div>
                        <div class="form-group filter-box">
                            
                            
                                <div class="checkbox">
                                    <label><input type="checkbox">Drinking water</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">Washroom</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">Travel Supprt</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">First Aid</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">Canteen</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">Restroom</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">Equipment</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">Parking</label>
                                </div>
                            
                        </div>
                        
                        <div class="form-group filter-box">
                            
                            
                                <div class="checkbox">
                                    <label><input type="checkbox">Secundrabad</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">Andheri</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">Mansarovar</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">Ameerpet</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">Narayana guda</label>
                                </div>
                        
                        </div>
                    </form>
                </div>
                    
            </div>
            <div class="col-md-6">
                <div class="form-group form-inline sorting">
                    <form action="result.php?search_query=abcd &typeString=defg" method="get">
                    <input type="submit" value="Fees" name="fees_sub" id="fees_sub" class="btn btn-sm"><span class="glyphicon glyphicon-sort sorting"></span>
                    <input type="submit" value="A-Z" name="a-z_sub" class="btn btn-sm"><span class="glyphicon glyphicon-sort-by-alphabet"></span>
                    <input type="submit" value="Ratings" name="ratings_sub" class="btn btn-sm"><span class="glyphicon glyphicon-sort"></span>
                    <input type="submit" value="No of Coaches" name="coaches_sub" class="btn btn-sm"><span class="glyphicon glyphicon-sort"></span>
                    </form>
                </div>
                
               
                
                
                <div class="container resultbox">
                    
                    <!--<h3><?php //echo $type.' '.$type_type; ?> in <?php echo $area;?></h3>-->
                    <?php   if($multiple && !$error){
                                if(mysql_num_rows($result_academy)==0 && mysql_num_rows($result_tournament)==0){
                                    echo '<h3> Result not Found!!</h3>';
                                }
                                else{
                                    retrieveAcademiesResult($result_academy);
                                    retrieveTournamentsResult($result_tournament);
                                }
                                
                            }
                            if(!$multiple && !$error){
                                if(mysql_num_rows($result)==0){
                                    echo '<h3> Result not Found!!</h3>';
                                }
                                else{
                                    
                                        retrieveAcademiesResult($result);
                                    
                                        retrieveTournamentsResult($result);
                                }
                                
                            }
                            
                            
                            
                            
                            if($error){
                                echo '<h3> Result not Found!!</h3>';
                            }
                            
                    ?>
                    
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
            </div> 
        <?php }?>     
               
                                 
                                        
                                
                                
                            
            
            
        
  <?php      
        if(strcmp($search_query,$null))
        {
            
            echo "<script>alert('Hello2');</script>";
            //if($type_type=='Tournament'){
             //   $query = 'SELECT tour_id, name_tour, entry_fess, reg_end_date, reccommended, venue FROM tournaments where type like \'%'.$type.'%\' && area like \'%'.$area.'%\'';
            //    $result = mysql_query($query,$conn);
            //}
        
        
        
        
?>
        <div class="row" id="disp2">
            <div class="col-md-3">
                <div class="jumbotron filtering">
                    <h4>Filters</h4>
                    <hr>
                    <form role="form">
                        <div class="form-group filter-box">
                            
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
                        <div class="form-group filter-box">
                            
                            
                                <div class="checkbox">
                                    <label><input type="checkbox">Indoor</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">Outdoor</label>
                                </div>
                            
                        </div>
                        <div class="form-group filter-box">
                            
                            
                                <div class="checkbox">
                                    <label><input type="checkbox">Drinking water</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">Washroom</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">Travel Supprt</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">First Aid</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">Canteen</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">Restroom</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">Equipment</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">Parking</label>
                                </div>
                            
                        </div>
                        
                        <div class="form-group filter-box">
                            
                            
                                <div class="checkbox">
                                    <label><input type="checkbox">Secundrabad</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">Andheri</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">Mansarovar</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">Ameerpet</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">Narayana guda</label>
                                </div>
                        
                        </div>
                    </form>
                </div>
                    
            </div>
            <div class="col-md-6">
                <div class="form-group form-inline sorting">
                    <form action="result.php?search_query=abcd&typeString=defg" method="get">
                    <input type="submit" value="Fees" name="fees_sub" id="fees_sub" class="btn btn-sm"><span class="glyphicon glyphicon-sort sorting"></span>
                    <input type="submit" value="A-Z" name="a-z_sub" class="btn btn-sm"><span class="glyphicon glyphicon-sort-by-alphabet"></span>
                    <input type="submit" value="Ratings" name="ratings_sub" class="btn btn-sm"><span class="glyphicon glyphicon-sort"></span>
                    <input type="submit" value="No of Coaches" name="coaches_sub" class="btn btn-sm"><span class="glyphicon glyphicon-sort"></span>
                    </form>
                    
                </div>
                <div class="container resultbox">
                    
                    <!--<h3><?php //echo $type.' '.$type_type; ?> in <?php echo $area;?></h3>-->
                    <?php   if($multiple && !$error){
                                if(mysql_num_rows($result_academy)==0 && mysql_num_rows($result_tournament)==0){
                                    echo '<h3> Result not Found!!</h3>';
                                }
                                else{
                                    
                                    retrieveAcademiesResult($result_academy);
                                    retrieveTournamentsResult($result_tournament);
                                }
                                
                            }
                            if(!$multiple && !$error){
                                if(mysql_num_rows($result)==0){
                                    echo '<h3> Result not Found!!</h3>';
                                }
                                else{
                                    
                                     if($search_query_type=='Academies')
                                        retrieveAcademiesResult($result);
                                    if($search_query_type=='Tournaments')
                                        retrieveTournamentsResult($result);
                                }
                                
                            }
                            
                            
                            if($error){
                                echo '<h3> Result not Found!!</h3>';
                            }
                            
                    ?>
                    
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
            </div>
        <?php }?>  
        <?php
       if(isset($_GET['fees_sub']))
       {
          
           
            $mysql_query_academy = 'SELECT acc_id, name_academy, address, timings, fees, coaches FROM academies where ('.$typeString.') AND name_academy like \'%'.$search_query.'%\' ORDER BY fees';
            
            
            $result_academy = mysql_query($mysql_query_academy,$conn);
            $mysql_query_tournament = 'SELECT tour_id, name_tour, entry_fess, reg_end_date, reccommended, venue FROM tournaments where ('.$typeString.') AND name_tour like \'%'.$search_query.'%\' ORDER BY entry_fess';
            $result_tournament = mysql_query($mysql_query_tournament,$conn);
           
           
       
        
        ?>
        
        <div class="row" id="disp">
            <div class="col-md-3">
                <div class="jumbotron filtering">
                    <h4>Filters</h4>
                    <hr>
                    <form role="form">
                        <div class="form-group filter-box">
                            
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
                        <div class="form-group filter-box">
                            
                            
                                <div class="checkbox">
                                    <label><input type="checkbox">Indoor</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">Outdoor</label>
                                </div>
                            
                        </div>
                        <div class="form-group filter-box">
                            
                            
                                <div class="checkbox">
                                    <label><input type="checkbox">Drinking water</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">Washroom</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">Travel Supprt</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">First Aid</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">Canteen</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">Restroom</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">Equipment</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">Parking</label>
                                </div>
                            
                        </div>
                        
                        <div class="form-group filter-box">
                            
                            
                                <div class="checkbox">
                                    <label><input type="checkbox">Secundrabad</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">Andheri</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">Mansarovar</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">Ameerpet</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">Narayana guda</label>
                                </div>
                        
                        </div>
                    </form>
                </div>
                    
            </div>
            <div class="col-md-6">
                <div class="form-group form-inline sorting">
                    <form action="result.php" method="get">
                    <input type="submit" value="Fees" name="fees_sub" id="fees_sub" class="btn btn-sm"><span class="glyphicon glyphicon-sort sorting"></span>
                    <input type="submit" value="A-Z" name="a-z_sub" class="btn btn-sm"><span class="glyphicon glyphicon-sort-by-alphabet"></span>
                    <input type="submit" value="Ratings" name="ratings_sub" class="btn btn-sm"><span class="glyphicon glyphicon-sort"></span>
                    <input type="submit" value="No of Coaches" name="coaches_sub" class="btn btn-sm"><span class="glyphicon glyphicon-sort"></span>
                    </form>
                    
                </div>
                <div class="container resultbox">
                    
                    <!--<h3><?php //echo $type.' '.$type_type; ?> in <?php echo $area;?></h3>-->
                    <?php   if($multiple && !$error){
                                if(mysql_num_rows($result_academy)==0 && mysql_num_rows($result_tournament)==0){
                                    echo '<h3> Result not Found!!</h3>';
                                }
                                else{
                                    
                                    retrieveAcademiesResult($result_academy);
                                    retrieveTournamentsResult($result_tournament);
                                }
                                
                            }
                            if(!$multiple && !$error){
                                if(mysql_num_rows($result)==0){
                                    echo '<h3> Result not Found!!</h3>';
                                }
                                else{
                                    
                                     if($search_query_type=='Academies')
                                        retrieveAcademiesResult($result);
                                    if($search_query_type=='Tournaments')
                                        retrieveTournamentsResult($result);
                                }
                                
                            }
                            
                            
                            if($error){
                                echo '<h3> Result not Found!!</h3>';
                            }
                            
                    ?>
                    
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
            </div>
        <?php }?>
        
        
        
        
        <?php
       if(isset($_GET['a-z_sub']))
       {
           
            $mysql_query_academy = 'SELECT acc_id, name_academy, address, timings, fees, coaches FROM academies where ('.$typeString.') AND name_academy like \'%'.$search_query.'%\' ORDER BY name_academy';
            
            
            $result_academy = mysql_query($mysql_query_academy,$conn);
            $mysql_query_tournament = 'SELECT tour_id, name_tour, entry_fess, reg_end_date, reccommended, venue FROM tournaments where ('.$typeString.') AND name_tour like \'%'.$search_query.'%\' ORDER BY name_tour';
            $result_tournament = mysql_query($mysql_query_tournament,$conn);
           
           
       
        
        ?>
        
        <div class="row" id="disp">
            <div class="col-md-3">
                <div class="jumbotron filtering">
                    <h4>Filters</h4>
                    <hr>
                    <form role="form">
                        <div class="form-group filter-box">
                            
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
                        <div class="form-group filter-box">
                            
                            
                                <div class="checkbox">
                                    <label><input type="checkbox">Indoor</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">Outdoor</label>
                                </div>
                            
                        </div>
                        <div class="form-group filter-box">
                            
                            
                                <div class="checkbox">
                                    <label><input type="checkbox">Drinking water</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">Washroom</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">Travel Supprt</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">First Aid</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">Canteen</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">Restroom</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">Equipment</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">Parking</label>
                                </div>
                            
                        </div>
                        
                        <div class="form-group filter-box">
                            
                            
                                <div class="checkbox">
                                    <label><input type="checkbox">Secundrabad</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">Andheri</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">Mansarovar</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">Ameerpet</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox">Narayana guda</label>
                                </div>
                        
                        </div>
                    </form>
                </div>
                    
            </div>
            <div class="col-md-6">
                <div class="form-group form-inline sorting">
                    <form action="result.php?search_query=<?php echo $search_query;?>&typeString=<?php echo $typeString; ?>" method="get">
                    <input type="submit" value="Fees" name="fees_sub" id="fees_sub" class="btn btn-sm"><span class="glyphicon glyphicon-sort sorting"></span>
                    <input type="submit" value="A-Z" name="a-z_sub" class="btn btn-sm"><span class="glyphicon glyphicon-sort-by-alphabet"></span>
                    <input type="submit" value="Ratings" name="ratings_sub" class="btn btn-sm"><span class="glyphicon glyphicon-sort"></span>
                    <input type="submit" value="No of Coaches" name="coaches_sub" class="btn btn-sm"><span class="glyphicon glyphicon-sort"></span>
                    </form>
                    
                </div>
                <div class="container resultbox">
                    
                    <!--<h3><?php //echo $type.' '.$type_type; ?> in <?php echo $area;?></h3>-->
                    <?php   if($multiple && !$error){
                                if(mysql_num_rows($result_academy)==0 && mysql_num_rows($result_tournament)==0){
                                    echo '<h3> Result not Found!!</h3>';
                                }
                                else{
                                    
                                    retrieveAcademiesResult($result_academy);
                                    retrieveTournamentsResult($result_tournament);
                                }
                                
                            }
                            if(!$multiple && !$error){
                                if(mysql_num_rows($result)==0){
                                    echo '<h3> Result not Found!!</h3>';
                                }
                                else{
                                    
                                     if($search_query_type=='Academies')
                                        retrieveAcademiesResult($result);
                                    if($search_query_type=='Tournaments')
                                        retrieveTournamentsResult($result);
                                }
                                
                            }
                            
                            
                            if($error){
                                echo '<h3> Result not Found!!</h3>';
                            }
                            
                    ?>
                    
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
            </div>
        <?php }?>
            
        
        <?php include 'footer.php';?>
    </body>
</html>
