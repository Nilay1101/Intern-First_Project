<html>
    <head>
        <title> | Document |</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=yes">
        <?php include 'includeheader.php'; ?>
        <link href="css/theme.css" rel="stylesheet">
        <link href="css/jquery-ui.css" rel="stylesheet">
        <link href="js/select2/select2.css" rel="stylesheet">
        <link media="handheld, only screen and (max-width: 480px), only screen and (max-device-width: 480px)" href="css/mobile_index.css" type="text/css" rel="stylesheet" />
        <link media="handheld, only screen and (max-width: 480px), only screen and (max-device-width: 480px)" href="css/mobile_header.css" type="text/css" rel="stylesheet" />
        <script src="js/select2/select2.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script>
            $(function() {
                $('.select_games').select2({
                    maximumSelectionSize: 3,
                    placeholder:"Select game"
                });
                $(".links a").hover(function(e){
                    e.preventDefault();
                    $(this).tab('show');
                });
                
                //var type = $('#type_type').val();
                /*$('#type_type').change(function(){
                    var type = $('#type_type').val();
                    $("#sports_type").autocomplete({
                        source: 'search_bar.php?key='+type,
                        minLength:0,
                    });
                });*/
                    
                    
                
                    $("#area").autocomplete({
                        source:"search_bar.php",
                        minLength:0,
                    });
                
                
         });
        </script>
		
        <script>
		$(document).ready(function() {
        $('#select_sport').multiselect({
			 enableCaseInsensitiveFiltering: true,
            maxHeight: 250,
            includeSelectAllOption: true,
            buttonWidth: '300px'
            
        });
		
    });
</script>

<script> 
$(document).ready(function(){
    $("#show").click(function(){
        $("#part").removeClass('hidden');
    });
	
});
</script>


<script type="text/javascript" src="js/bootstrap-multiselect.js"></script>
<link rel="stylesheet" href="css/bootstrap-multiselect.css" type="text/css"/>
    </head>
	
    <body style="background:#E4E4E4">
        <header class="header" >
        <?php include 'header.php';?>
        <?php //include 'breadcrumb.php';?>    
        </header>
		
		<div class="jumbotron" style=" margin-top:-60px ; background:#E4E4E4 ; border:none ; box-shadow:none ; height:50px;">

                
                <form action="index.php" method="POST">
                    
                    <div class="form-group form-inline text-center has-feedback" style="margin-top: 15px;">                       
                        <div style="margin-right:-10px; "class="input-group">
                                <!--<input input="text" id="sports_type" name="sports_type" class="form-control" style="//margin-top: 15px; width: 180px;" placeholder="Sports Type...">-->
                            <div class="form-group">
								<select name="selected_sports[]" id="select_sport" multiple="multiple" maximumSelectionLength="5" placeholder="Select Sports">
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
                        
                        <div style="margin-right:-8px;"class="input-group">
                                <input id="area" class="form-control search_input" name="query" style="" placeholder="Search any Academy/Tournament/Venue/Coach..." >
                        </div>
                        
                            
                        <button type="submit" class="btn btn-danger" name="search_sub" >Search</button>
                    </div><br><br>
                </form>
            </div>
		
	     <div class="row" style="padding-left:100px ; padding-right:100px ; margin-top:10px;margin-bottom:-30px">
		<div class="col-lg-12"><img class="img-responsive" style="height:400px; width:1400px; " src="images/shot07.jpg"></div>
		</div>
		
		<div id="part0" style="margin-left:100px; margin-right:100px; margin-bottom:30px; background:white; padding-left:20px ; padding-right:20px">
<div class="row " style=" margin-top:30px" >
<br>
        <div class="col-lg-4 text-center"><a href="#"><img class="img-responsive" style="height:150px; width:370px; border-radius:15px " src="images/shot06.png"></a><br><h5>T E X T</h5></div>
		<div class="col-lg-4 text-center"><a href="#"><img class="img-responsive" style="height:150px; width:370px;  border-radius:15px " src="images/shot06.png"></a><br><h5>T E X T</h5></div>
		<div class="col-lg-4 text-center"><a href="#"><img class="img-responsive" style="height:150px; width:370px;  border-radius:15px " src="images/shot06.png"></a><br><h5>T E X T</h5></div>
</div>
<div class="row" style=" margin-top:30px" >
        <div class="col-lg-4 text-center"><a href="#"><img class="img-responsive" style="height:150px; width:370px; border-radius:15px " src="images/shot06.png"></a><br><h5>T E X T</h5></div>
		<div class="col-lg-4 text-center"><a href="#"><img class="img-responsive" style="height:150px; width:370px;  border-radius:15px " src="images/shot06.png"></a><br><h5>T E X T</h5></div>
		<div class="col-lg-4 text-center"><a href="#"><img class="img-responsive" style="height:150px; width:370px;  border-radius:15px " src="images/shot06.png"></a><br><h5>T E X T</h5></div>
</div>
<div class="row" style=" margin-top:30px;" >
        <div class="col-lg-4 text-center"><a href="#"><img class="img-responsive" style="height:150px; width:370px; border-radius:15px " src="images/shot06.png"></a><br><h5>T E X T</h5></div>
		<div class="col-lg-4 text-center"><a href="#"><img class="img-responsive" style="height:150px; width:370px;  border-radius:15px " src="images/shot06.png"></a><br><h5>T E X T</h5></div>
		<div class="col-lg-4 text-center"><a href="#"><img class="img-responsive" style="height:150px; width:370px;  border-radius:15px " src="images/shot06.png"></a><br><h5>T E X T</h5></div>
</div>
<br>

</div>

<div id="part" class="hidden" style="background:white;margin-left:100px; margin-right:100px;margin-top:-30px; padding-left:20px ; padding-right:20px">
<br>
<div class="row"  >
        <div class="col-lg-3 text-center"><a href="#"><img class="img-responsive" style="height:120px; width:270px; border-radius:15px " src="images/shot06.png"></a><br><h6>T E X T</h6></div>
		<div class="col-lg-3 text-center"><a href="#"><img class="img-responsive" style="height:120px; width:270px;  border-radius:15px " src="images/shot06.png"></a><br><h6>T E X T</h6></div>
		<div class="col-lg-3 text-center"><a href="#"><img class="img-responsive" style="height:120px; width:270px;  border-radius:15px " src="images/shot06.png"></a><br><h6>T E X T</h6></div>
		<div class="col-lg-3 text-center"><a href="#"><img class="img-responsive" style="height:120px; width:270px; border-radius:15px " src="images/shot06.png"></a><br><h6>T E X T</h6></div>
</div>
<div class="row" style=" margin-top:30px" >
        <div class="col-lg-3 text-center"><a href="#"><img class="img-responsive" style="height:120px; width:270px; border-radius:15px " src="images/shot06.png"></a><br><h6>T E X T</h6></div>
		<div class="col-lg-3 text-center"><a href="#"><img class="img-responsive" style="height:120px; width:270px;  border-radius:15px " src="images/shot06.png"></a><br><h6>T E X T</h6></div>
		<div class="col-lg-3 text-center"><a href="#"><img class="img-responsive" style="height:120px; width:270px;  border-radius:15px " src="images/shot06.png"></a><br><h6>T E X T</h6></div>
		<div class="col-lg-3 text-center"><a href="#"><img class="img-responsive" style="height:120px; width:270px; border-radius:15px " src="images/shot06.png"></a><br><h6>T E X T</h6></div>
</div>
<div class="row" style=" margin-top:30px" >
        <div class="col-lg-3 text-center"><a href="#"><img class="img-responsive" style="height:120px; width:270px; border-radius:15px " src="images/shot06.png"></a><br><h6>T E X T</h6></div>
		<div class="col-lg-3 text-center"><a href="#"><img class="img-responsive" style="height:120px; width:270px;  border-radius:15px " src="images/shot06.png"></a><br><h6>T E X T</h6></div>
		<div class="col-lg-3 text-center"><a href="#"><img class="img-responsive" style="height:120px; width:270px;  border-radius:15px " src="images/shot06.png"></a><br><h6>T E X T</h6></div>
		<div class="col-lg-3 text-center"><a href="#"><img class="img-responsive" style="height:120px; width:270px; border-radius:15px " src="images/shot06.png"></a><br><h6>T E X T</h6></div>
</div>
<div class="row" style=" margin-top:30px" >
        <div class="col-lg-3 text-center"><a href="#"><img class="img-responsive" style="height:120px; width:270px; border-radius:15px " src="images/shot06.png"></a><br><h6>T E X T</h6></div>
		<div class="col-lg-3 text-center"><a href="#"><img class="img-responsive" style="height:120px; width:270px;  border-radius:15px " src="images/shot06.png"></a><br><h6>T E X T</h6></div>
		<div class="col-lg-3 text-center"><a href="#"><img class="img-responsive" style="height:120px; width:270px;  border-radius:15px " src="images/shot06.png"></a><br><h6>T E X T</h6></div>
		<div class="col-lg-3 text-center"><a href="#"><img class="img-responsive" style="height:120px; width:270px; border-radius:15px " src="images/shot06.png"></a><br><h6>T E X T</h6></div>
</div>
<br>
</div>

<div class="row">
<div class="col-lg-12 text-center">
<button id="show">Show More</button>
</div>
</div>
</body>
</html>

