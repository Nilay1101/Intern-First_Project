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
<script>
$(function(){
   $('a[href*=#]:not([href=#])').click(function() {
       if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
         var target = $(this.hash);
         target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
         if (target.length) {
           $('html,body').animate({
             scrollTop: (target.offset().top - 0) // adjust this according to your content
           }, 1000);
           return false;
         }
       }
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

.btn0 {
    padding: 14px 24px;
    border: 0 none;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
}
 
.btn0:focus, .btn0:active:focus, .btn0.active:focus {
    outline: 0 none;
}
 
.btn0-primary {
    background: #0099cc;
    color: #ffffff;
}
 
.btn0-primary:hover, .btn0-primary:focus, .btn0-primary:active, .btn0-primary.active, .open > .dropdown-toggle.btn0-primary {
    background: #33a6cc;
}
 
.btn0-primary:active, .btn0-primary.active {
    background: #007299;
    box-shadow: none;
}

.btn0.sharp {
  border-radius:0;
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
<div style="margin-right:20px; height:50px;text-align:left;padding-top:15px;padding-left:20px"><strong> Coach name</strong> , sports trained</div>
<div style="margin-top:-10px; text-align:left">
<a href="#about"><button type="button" class="btn0 btn0-primary sharp">About</button></a>
<a href="#career"><button type="button" class="btn0 btn0-primary sharp">Career</button></a>
<a href="#gallery"><button type="button" class="btn0 btn0-primary sharp">Gallery</button></a>
<a href="#review"><button type="button" class="btn0 btn0-primary sharp">Reviews</button></a>
</div>
<div id="about" class=" ">
<h4 style="text-align:left; "><br><br><strong>About me : </strong><p style="text-align:left"><br> t e x t   h e r e</p></h4><br>
<h4 style="text-align:left; "><br><br><strong>Coaching experience (years) : </strong> years</h4><br>
<h4 style="text-align:left; "><br><br><strong>Training focus  : </strong><p style="text-align:left"><br> t e x t   h e r e</p></h4><br>
<h4 style="text-align:left; "><br><br><strong>Cities I provide training : </strong> city01 , city02 </h4><br>
<h4 style="text-align:left; "><br><br><strong>Other sports : </strong> sport1 , sport02 </h4><br>
</div>
<hr>
<div id="career" class="" >
<h4 style="text-align:left; "><br><br><strong>Achievements : </strong><p style="text-align:left"><br> t e x t   h e r e</p></h4><br>
<h4 style="text-align:left; "><br><br><strong>Certification and Accreditation : </strong><p style="text-align:left"><br> t e x t   h e r e</p></h4><br>
<h4 style="text-align:left; "><br><br><strong>Current club / team / academy : </strong> name of club / team / academy</h4><br>
<h4 style="text-align:left; "><br><br><strong>Past club / team / academy : </strong> name of club / team / academy</h4><br>
<h4 style="text-align:left; "><br><br><strong>Best players played under me : </strong><p style="text-align:left"><br> t e x t   h e r e</p></h4><br>
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
<button type="button" class="btn0 btn0-primary sharp">Schedule</button>
<h5 style="text-align:left; "><p style="text-align:left">Make a time table and schedule according to the data given by the coach.<br>e.g.<br>Batch A-u19 schedule<br>Batch B-u21 schedule</p></h5>

<button type="button" class="btn0 btn0-primary sharp">Contact Me</button>
<h5 style="text-align:left; "><br><br><strong>Address : </strong><p style="text-align:center"><br> t e x t   h e r e</p></h5>
<h5 style="text-align:left; "><br><br><strong>Contact no. : </strong><p style="text-align:center"><br> t e x t   h e r e</p></h5>
<h5 style="text-align:left; "><br><br><strong>Mobile number : </strong><p style="text-align:center"><br> t e x t   h e r e</p></h5>
<h5 style="text-align:left; "><br><br><strong>Email ID : </strong><p style="text-align:center"><br> t e x t   h e r e</p></h5>
<h5 style="text-align:left; "><br><br><strong>Website : </strong><p style="text-align:center"><br> t e x t   h e r e</p></h5>
</div>
</div>


</body>
</html>
