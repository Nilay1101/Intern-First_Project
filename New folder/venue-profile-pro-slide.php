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

<style>
* {
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
      -ms-box-sizing: border-box;
          box-sizing: border-box;
}
 
.pic {
  border: 2px solid #fff;  
  height: 180px;
  width: 180px;
  margin-top:35px;
  margin-left:-8px;
  overflow: hidden; 
}
.focus {
  -webkit-transition: all 1s ease;
     -moz-transition: all 1s ease;
       -o-transition: all 1s ease;
      -ms-transition: all 1s ease;
          transition: all 1s ease;
}
 
.focus:hover {
  border: 30px solid white;
  border-radius: 50%;
}

</style>

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
		
<div class="row" style="margin-left:100px;margin-right:85px;">
<div class="col-lg-2 text-center"style="margin-bottom:35px; border:0px solid white" ><div class="focus pic"><img class="img-responsive" src="images/profile/i.png" title="name" /></div></div>
<div class="col-lg-8" style="background-image: url(images/profile/cover.jpg); height:250px; width:675px; padding-top:200; padding-left:600px">
<a href="#"><img src="images/profile/tick.png" title="verified"></a>
</div>
<div class="col-lg-3 text-center" style="border:0px solid white;" ><br><br><img class="img-responsive" src="images/profile/map.jpg"><br><p><h5>s p a c e <br> f o r &nbsp;&nbsp; m a p </h5>  </p></div>
</div>
<div class="row" style="margin-left:100px;margin-right:90px;margin-top:5px">



<div class="col-lg-9 text-center" style="border:0px solid white;" >
<div style="background:white;margin-right:20px; height:50px; width:850px; border:0px solid black; border-radius:25px; text-align:left;padding-top:15px;padding-left:20px"><strong>Venue name</strong> , sports used for</div>
<div style="margin-top:-10px;  text-align:left">
<a href="#about"><button type="button" class="btn btn-info">About</button></a>
<a href="#service"><button type="button" class="btn btn-info">Services </button></a>
<a href="#event"><button type="button" class="btn btn-info">Events</button></a>
<a href="#gallery"><button type="button" class="btn btn-info">Gallery</button></a>
<a href="#review"><button type="button" class="btn btn-info">Reviews</button></a>
</div>
<div id="about" class=" ">
<h4 style="text-align:left; "><br><br><strong>About the venue  : </strong><p style="text-align:left"><br> t e x t   h e r e</p></h4><br>
<h4 style="text-align:left; "><br><br><strong>Year established : </strong> year </h4><br>
<h4 style="text-align:left; "><br><br><strong>Area, City : </strong><p style="text-align:left"><br> t e x t   h e r e</p></h4><br>
</div>
<hr>
<div id="service" class=" " >
<h4 style="text-align:left; "><br><br><strong>Service Description :</strong></h4>
<h4 style="text-align:left; "><br><br><strong>Facilities :</strong></h4>
<ul style="text-align:left">
<li><h4>Canteen <img src="images/profile/tick.png"></h4></li>
<li><h4>Digital Screen <img src="images/profile/wrong.png"></h4></li>
<li><h4>Drinking water <img src="images/profile/tick.png"></h4></li>
<li><h4>Dugout <img src="images/profile/wrong.png"></h4></li>
<li><h4>Equipment support <img src="images/profile/tick.png"></h4></li>
<li><h4>Floodlights <img src="images/profile/tick.png"></h4></li>
<li><h4>Parking <img src="images/profile/wrong.png"></h4></li>
<li><h4>Scorecard <img src="images/profile/tick.png"></h4></li>
<li><h4>Shower <img src="images/profile/wrong.png"></h4></li>
<li><h4>Washroom <img src="images/profile/tick.png"></h4></li>
</ul>
</div>
<hr>
<div id="event" class=" " >
<h4 style="text-align:left; "><br><br><strong>Past events : ( description given by venue owner or admin ) </strong></h4><br>
<p style="text-align:center">e.g.<br>
January 2015 - Nehru Cup - Football u-21 boys - Dempo Brother FC winners</p>
<h4 style="text-align:left; "><br><br><strong>Upcoming events : ( information given by venue owner or admin )</strong></h4><br>
<p style="text-align:center">e.g.<br>
December 2016 - Jawahar Cup - Hockey League - 16 teams</p>

</div>
<hr>
<div id="gallery" class=" " >
<p style="text-align:center"><br>Photos / images with respect to calendar info : as and when uploaded by user or admin.</p>
<p style="text-align:center">Display message : " There are no photos to display currently. "</p>
</div>
<hr>
<div id="review" class=" " >
<a href="#" ><button type="button" class="btn btn-success">Write a review</button></a>
<h4 style="text-align:left; "><br><br><strong>Average user rating : </strong><img src="images/profile/star.png"><img src="images/profile/star.png"><img src="images/profile/star.png"></h4>
<h4 style="text-align:left; "><br><br><strong>ABC "Username" : Okay!</strong><br>
<strong>rating : </strong><img src="images/profile/star.png"><img src="images/profile/star.png"><img src="images/profile/star0.png"><img src="images/profile/star0.png"><img src="images/profile/star0.png"></h4>
<h4 style="text-align:left; "><br><br><strong>XYZ "Username" : Adorable!</strong><br>
<strong>rating : </strong><img src="images/profile/star.png"><img src="images/profile/star.png"><img src="images/profile/star.png"><img src="images/profile/star0.png"><img src="images/profile/star0.png"></h4>
</div>
</div>


<div class="col-lg-3 text-center" style="border:0px solid white;" >
<br><br>
<button type="button" class="btn btn-info">Booking Details</button>
<h5 style="text-align:left; "><br><br><strong>Fees details : </strong><p style="text-align:center"><br> t e x t   h e r e</p></h5>
<h5 style="text-align:left; "><br><br><strong>Contact person name  : </strong><p style="text-align:center"><br> t e x t   h e r e</p></h5>
<h5 style="text-align:left; "><br><br><strong>Contact person number : </strong><p style="text-align:center"><br> t e x t   h e r e</p></h5>
<h5 style="text-align:left; "><br><br><strong>Contact person Email : </strong><p style="text-align:center"><br> t e x t   h e r e</p></h5>
<h5 style="text-align:left; "><br><br><strong>Owner’s Name : </strong><p style="text-align:center"><br> t e x t   h e r e</p></h5>
<h5 style="text-align:left; "><br><br><strong>Owner’s Contact (if provided), Email ID : </strong><p style="text-align:center"><br> t e x t   h e r e</p></h5><br>
<button type="button" class="btn btn-info">Contact Us</button>
<h5 style="text-align:left; "><br><br><strong>Complete Address : </strong><p style="text-align:center"><br> t e x t   h e r e</p></h5>
<h5 style="text-align:left; "><br><br><strong>Pincode : </strong><p style="text-align:center"><br> t e x t   h e r e</p></h5>
<h5 style="text-align:left; "><br><br><strong>Official telephone : </strong><p style="text-align:center"><br> t e x t   h e r e</p></h5>
<h5 style="text-align:left; "><br><br><strong>Mobile number : </strong><p style="text-align:center"><br> t e x t   h e r e</p></h5>
<h5 style="text-align:left; "><br><br><strong>Email ID : </strong><p style="text-align:center"><br> t e x t   h e r e</p></h5>
<h5 style="text-align:left; "><br><br><strong>Website : </strong><p style="text-align:center"><br> t e x t   h e r e</p></h5>
</div>
</div>


</body>
</html>
