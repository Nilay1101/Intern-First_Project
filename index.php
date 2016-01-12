<?php session_start(); ?>


<html>
    <head>
        <title>Sportz.com</title>
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
	<style>  
    .hex {
        float: left;
        margin-left: 4px;
        margin-bottom: -36px;
		color:white;
		text-shadow: 1px 1px black;
    }
    .hex .top {
        width: 0;
		 background-image: url("../pattern.png");
        border-bottom: 40px solid #009933;
        border-left: 62px solid transparent;
        border-right: 62px solid transparent;
		opacity:0.6;
    }
    .hex .middle {
        width: 124px;
		 background-image: url("../pattern.png");
        height: 70px;
        background-color: #009933;
		opacity:0.6;
    }
    .hex .bottom {
        width: 0;
        border-top: 40px solid #009933;
		 background-image: url("../pattern.png");
        border-left: 62px solid transparent;
        border-right: 62px solid transparent;
		opacity:0.6;
    }
    .hex-row {
        clear: left;
    }
    .hex-row.even {
        margin-left: 63px;
    }
	.hex:hover .top, .hex:hover .middle, .hex:hover .bottom {
		opacity:1;

	}
    .hex:hover .top {
        border-bottom: 40px solid #009933;
    }
    .hex:hover .middle {
        background: #009933;
    }
    .hex:hover .bottom {
        border-top: 40px solid #009933;
    }

	.hex0 {
        float: left;
        margin-left: 4px;
        margin-bottom: -36px;
		color:black;
    }
    .hex0 .top {
        width: 0;
        border-bottom: 40px solid white;
        border-left: 62px solid transparent;
        border-right: 62px solid transparent;
		opacity:1;
    }
    .hex0 .middle {
        width: 124px;
        height: 70px;
        background: white;
		opacity:1;
    }
    .hex0 .bottom {
        width: 0;
        border-top: 40px solid white;
        border-left: 62px solid transparent;
        border-right: 62px solid transparent;
		opacity:1;
    }
    .hex0-row {
        clear: left;
    }
    .hex0-row.even {
        margin-left: 53px;
    }
	.hex0:hover .top, .hex0:hover .middle, .hex0:hover .bottom {
		opacity:1;
	}
    .hex0:hover .top {
        border-bottom: 40px solid white;
    }
    .hex0:hover .middle {
        background:white;
    }
    .hex0:hover .bottom {
        border-top: 40px solid white;
    }
	
	.themeText {
	    line-height: 20px;
		font-size: 14px;
		text-align: center;
		vertical-align: middle;
	}
	.themeIcon {
		width: 40px;
		height: 40px;
		margin: auto;
		display: block;
	}

</style>
    <body>
        <header class="header" >
        <?php include 'header.php';?>
        <?php //include 'breadcrumb.php';?>    
        </header>
   <div class="site-wrap">
 
 </div>
<div class="container">
<div class="row">
<div class="col-lg-1 text-center"></div>
<div class="col-lg-1 text-center">
<img src="images/icons/Archery.png" style="margin-top: 25px; height: 50px; margin-left: 50px; ">
</div>
<div class="col-lg-1 text-center">
<img src="images/icons/Cricket.png" style="margin-top: 25px; height: 50px; margin-left: 50px; ">
</div>
<div class="col-lg-1 text-center">
<img src="images/icons/cycling-icon.png" style="margin-top: 25px; height: 50px; margin-left: 50px; ">
</div>
<div class="col-lg-1 text-center">
 <img src="images/icons/BasketBall.png" style="margin-top: 25px; height: 50px; margin-left: 50px; ">
</div>
<div class="col-lg-1 text-center">
<img src="images/icons/weightLiftingIcon.png" style="margin-top: 25px; height: 50px; margin-left: 50px; ">
</div>
<div class="col-lg-1 text-center">
<img src="images/icons/Fast Runner.png" style="margin-top: 25px; height: 50px; margin-left: 50px; ">
</div>
<div class="col-lg-1 text-center">
<img src="images/icons/Hockey.png" style="margin-top: 25px; height: 50px; margin-left: 50px; ">
</div>
<div class="col-lg-1 text-center">
<img src="images/icons/swimming.png" style="margin-top: 25px; height: 50px; margin-left: 50px; ">
</div>
<div class="col-lg-1 text-center">
<img src="images/icons/shooting.png" style="margin-top: 25px; height: 50px; margin-left: 50px; ">
</div>
<div class="col-lg-1text-center"></div>
<div class="col-lg-1text-center"></div>
</div>
</div>
        <!--Green line-->
       <div class="icons" style="width:100%; padding: 5px; border: 2px solid seagreen ; margin-bottom: 6px; background:#458B00 url('..img/pattern.png')"></div>           
        <div>
            
            <div class="jumbotron" style="margin-top:-6px; height:200px;background-image: url(images/search2.jpg)";>
                <h2 style="margin-top:-20px"class="text-center">
                    Hello!<br>
                    Here you can search different Academy, Coach, Tournament<br>
                    
                </h2>
                
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
        </div>
        <div style="margin-top:-30px"class="row star-box">
            <div class="col-sm-1" ></div>
			<div style="margin-top:20px"class="col-sm-4 pull-left">	
					
<div class="hex-row even">
<h2>Explore the Sportz</h2>
<br>
        <div class="hex" data-toggle="tab" href="#content_for_id1"><div class="top"></div><div class="middle"><div class="themeText">ACADEMIES</div><img class="themeIcon" class="image-responsive" src="images/Academy.png" alt="ACADEMIES"></div><div class="bottom"></div></div>
        <div class="hex" data-toggle="tab" href="#content_for_id2"><div class="top"></div><div class="middle"><div class="themeText">COACHES</div><img class="themeIcon" class="image-responsive" src="images/Coach.png" alt="COACHES"></div><div class="bottom"></div></div>
    </div>
    <div class="hex-row">
		<div class="hex" data-toggle="tab" href="#content_for_id3"><div class="top"></div><div class="middle"><div class="themeText">VENUES</div><img class="themeIcon" class="image-responsive" src="images/Venue.png" alt="VENUES"></div><div class="bottom"></div></div>
        <div class="hex0"><div class="top"></div><div class="middle"><div class="themeText"></div><img class="themeIcon" style="margin-top:-10px;height:90px; width:90px"src="images/center.png" alt="SPORTS"></div><div class="bottom"></div></div>
        <div class="hex" data-toggle="tab" href="#content_for_id5"><div class="top"></div><div class="middle"><div class="themeText">PLAYERS</div><img class="themeIcon" class="image-responsive" src="images/Player.png" alt="PLAYERS"></div><div class="bottom"></div></div>
    </div>
    <div class="hex-row even">
        <div class="hex" data-toggle="tab" href="#content_for_id6"><div class="top"></div><div class="middle"><div class="themeText">TOURNAMENTS</div><img class="themeIcon" class="image-responsive" src="images/Tournament.png" alt="TORNAMENTS"></div><div class="bottom"></div></div>
        <div class="hex"data-toggle="tab" href="#content_for_id7"><div class="top"></div><div class="middle"><div class="themeText">TEAMS</div><img class="themeIcon" class="image-responsive" src="images/Team.png" alt="TEAMS"></div><div class="bottom"></div></div>
    </div>
            </div>
			<br>
			<br><br>
			<br><br>
            <div class="col-sm-6 tab-content content-box text-center">
                <div class="tab-pane fade in active" id='content_for_id1'>
                    <div class="jumbotron1 text-center">
                        <h3>Academies</h3>
                    </div>
					<p style="color:black ; font-size: 120%;">For all those who want to pursue their career in sports, sports academies are their 2nd home. This is
an effort to bring in all those 2nd homes together so that the sports professional and amateurs
always stay connected with them.</p><br>
                    <p style="color:black; font-size: 120%;">TheSportz.com gives a platform to all the sports academies to showcase themselves in a interactive
and user-friendly way. All this to establish a harmony between academies and players to bring a
change in the way sports can be played in India. Begin now, find some of the best sports academies
available nearby and explore the sports world yourself.</p><br>
 <p style="color:black; font-size: 120%;"><strong>Explore more, Achieve more</strong>.</p>
                </div>
                <div class="tab-pane fade in" id='content_for_id2'>
                    <div class="jumbotron1 text-center">
                        <h3>Coaches</h3>
                    </div>
					<p style="color:black; font-size: 120%;">The sports coaches are an integral part of the sports ecosystem who are responsible to mentor and
train the players throughout their career and specially in their early stage.  All the coaches are at the
heart of our dreams of making India a sporting nation. They can bring the change which is required
for nurturing and development of young sports enthusiasts and prodigies.</p><br>
<p style="color:black; font-size: 120%;">TheSportz.com has put a step towards making it easier for sports enthusiasts to reach out to the
best coaches nearby to groom their talent. We will do everything possible to support them to
achieve their dreams.</p><br>
<p style="color:black; font-size: 120%;"><strong>Teach more, Achieve more</strong>.</p>
                </div>
				<div class="tab-pane fade in " id='content_for_id3'>
                    <div class="jumbotron1 text-center">
                        <h3>Venues</h3>
                    </div>
					<p style="color:black; font-size: 120%;">The beauty of any playground or a field is that they have memories. Memories of legends
being born, memories of common people achieving uncommon dreams.</p><br>
<p style="color:black; font-size: 120%;">Players and teams come here to leave their legacy. We want to make sure that to realise the
dream of a sporting nation we will assist all the sports venues to build their infrastructure.</p><br>
<p style="color:black; font-size: 120%;"><strong>Play more, Achieve more.</strong></p>
                </div>
                <div class="tab-pane fade in " id='content_for_id4'>
                    <div class="jumbotron1 text-center">
                        <h3>TheSportz.com</h3>
                    </div>
                </div>
                <div class="tab-pane fade in" id='content_for_id5'>
                    <div class="jumbotron1 text-center">
                        <h3>Players</h3>
                    </div>
					<p style="color:black; font-size: 120%;">The whole idea of making a sports ecosystem is to bring up sports talents, give you a platform where
you can share and learn faster than ever before. We believe that sports can only flourish in India if the
young and old sports enthusiasts alike, come together and bring about the change you want to see.</p><br>
					<p style="color:black; font-size: 120%;">Now sports enthusiasts can create their own sports profile and do a lot more than just playing.
We invite all the sports enthusiasts to be a part of the dream of making India a sporting nation.</p><br>
					<p style="color:black; font-size: 120%;"><strong>Lets play India.</strong></p>
                </div>
                <div class="tab-pane fade in " id='content_for_id7'>
                    <div class="jumbotron1 text-center">
                        <h3>Teams</h3>
                    </div>
					<p style="color:black; font-size: 120%;">Being a part of a group lets you learn from others. It is rightly said, all the talent won’t take you
anywhere without your teammates. In all works of life, a team is always bigger than an individual.</p><br>
					<p style="color:black; font-size: 120%;">TheSportz. com helps teams and clubs to reach their common ambitions and goals. Our idea is to
give a platform to all the sports enthusiasts to meet and connect with players having similar interests.
Come, lets explore teams and clubs to help you reach to your target.</p><br>
					<p style="color:black; font-size: 120%;"><strong>Together Everyone Achieves More.</strong></p><br>
                </div>
                <div class="tab-pane fade in " id='content_for_id6'>
                    <div class="jumbotron1 text-center">
                        <h3 style="margin-top: -5px;">Upcoming Tournaments</h3>
						</div>
                       <!-- <div class="table-responsive">
                        <table class="table" >
                            <thead style="font-size: 95%;">
                            <th class="text-center">Tournaments Cricket &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                <th>Registration End-date</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="#"> Sundar Raja T20 cup vikhroli</a></td>
                                    <td>June 4,2015</td>
                                </tr>
                                <tr>
                                    <td><a href="#">tournament 2</a></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><a href="#">tournament 3</a></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><a href="#">tournament 4</a></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><a href="#">tournament 5</a></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><a href="#">tournament 6</a></td>
                                    <td></td>
                                </tr>

                            </tbody>
                        </table>
                        </div> -->
						<p style="color:black; font-size: 120%;">Every professional was once a dreamer, once amateur.</p><br>
						<p style="color:black; font-size: 120%;">Every expert was once a beginner. So dream big and start now.</p><br>
						<p style="color:black; font-size: 120%;">Challenge yourself to compete against others and prove your mettle to the world. Participate in a
host of sports events and tournaments. Invite your friends. Create your own event and we will help
you to reach your goals.</p><br>
						<p style="color:black; font-size: 120%;"><strong>Play more, Achieve more.</strong></p><br>
                    </div>
                </div>
                
            </div>
        </div>
		<br><br>
        <div style="margin-top:-40px;"id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
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
        <br>
        <br>
        
<!--        <div class="row">
        <div class="find_out"><h1>Find The Best In Your City</h1></div>
        <hr class="hr">
		<br><br>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-md-4">
                    <div class="coach"> <img src="images/Venue.png" style="height:60px; margin-top: 80px;"> </div>
                        <div class="box text-center" style="margin-top:40px;">
                            <h4 style="margin-top:75px;">Top/Best venue in mumbai</h4>
                           <!-- <h5><a href="#">XYZ person,Bandra</a></h5>
                            <h5><a href="#">DEF person,Kurla</a></h5>-->
                       <!-- </div>
                    </div>
                    <div class="col-md-4">
                    <div class="coach"> <img src="images/Academy.png" style="height:60px;"> </div>

                        <div class="box text-center" style="margin-top:20px;">
                            <h4 style="margin-top:75px;">Top/Best academies in mumbai</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                    <div class="coach"> <img src="images/Coach.png" style="height:60px; margin-top: 80px;"> </div>
                        <div class="box text-center" style="margin-top:40px;">
                            <h4 style="margin-top:75px;">Top/Best Coache in venue</h4>
                        </div>
                    </div>
                    <!--<div class="col-md-3">
                        <div class="box text-center">
                            <h4>Top Coaches in Mumbai</h4>
                        </div>
                    </div>-->
               <!-- </div>
            </div>
        </div>
        <br>  -->
		<div class="row padding" style="padding-left:120px ; padding-right:120px">
		<div class="find_out"><h1>Explore Various Sports In Your City</h1></div>
        <hr class="hr">
		</div>
       <br>
	   <div class="row" style="padding-left:120px; padding-right:120px">
	   <div class="col-lg-6 text-center" style="background-image: url(images/cricket.png); height:250px ; width:550px; opacity:0.8; margin-right:15px"><h1 style="color:white; font-weight: bold;margin-top:125px;">Cricket</h1></div>
	   <div class="col-lg-6 text-center" style="background-image: url(images/basketball.jpg); height:250px ; width:550px; opacity:0.8;  margin-left:15px"><h1 style="color:white; font-weight: bold;margin-top:125px">Basketball</h1></div>
	   </div>
	   <div class="row" style="padding-left:120px; padding-right:120px; margin-top:30px">
	    <div class="col-lg-4 text-center" style="background-image: url(images/table.jpg); height:250px ; width:355px; opacity:0.8; margin-right:15px"><h2 style="color:white; font-weight: bold;margin-top:125px">Table Tennis</h2></div>
		<div class="col-lg-4 text-center" style="background-image: url(images/athletics.jpg); height:250px ; width:355px; opacity:0.8;  margin-left:15px; margin-right:15px"><h2 style="color:white; font-weight: bold;margin-top:125px">Athletics</h2></div>
		<div class="col-lg-4 text-center" style="background-image: url(images/badminton.jpg); height:250px ; width:357px; opacity:0.8;  margin-left:15px"><h2 style="color:white; font-weight: bold;margin-top:125px">Badminton</h2></div>
	   </div>
	   <div class="row" style="padding-left:120px; padding-right:120px;  margin-top:30px">
	   <div class="col-lg-3 text-center"  style="background-image: url(images/football.jpg); height:250px ; width:260px; opacity:0.8; margin-right:15px"><h2 style="color:white; font-weight: bold;margin-top:125px;font-size: 170%;">Football</h2></div>
	   <div class="col-lg-3 text-center" style="background-image: url(images/swimming.jpg); height:250px ; width:260px; opacity:0.8;  margin-left:15px; margin-right:15px"><h2 style="color:white; font-weight: bold;margin-top:125px;font-size: 170%;">Swimming</h2></div>
	   <div class="col-lg-3 text-center" style="background-image: url(images/hockey.jpg); height:250px ; width:260px; opacity:0.8;  margin-left:15px; margin-right:15px"><h2 style="color:white; font-weight: bold;margin-top:125px;font-size: 170%;">Hockey</h2></div>
	   <div class="col-lg-3 text-center" style="background-image: url(images/weight.jpg); height:250px ; width:260px; opacity:0.8;  margin-left:15px"><h2 style="color:white; font-weight: bold;margin-top:125px;font-size: 170%;">Weightlifting</h2></div>
	   </div>
	   
<div class="row" style="padding-left:120px; padding-right:120px">
<div class="col-lg-4"><div class="find_out"><h2>Coaches</h2><hr class="hr0"></div></div>
<div class="col-lg-4"><div class="find_out"><h2>Academies</h2><hr class="hr0"></div></div>
<div class="col-lg-4"><div class="find_out"><h2>Venues</h2><hr class="hr0"></div></div>
</div>

<div id="part0">
<div class="row" style="padding-left:120px; padding-right:120px" >
        <div class="col-lg-4 text-center"><a href="#"><img class="img-responsive" style="height:150px; width:350px; border-radius:15px " src="images/shot06.png"></a><br><h5>T E X T</h5></div>
		<div class="col-lg-4 text-center"><a href="#"><img class="img-responsive" style="height:150px; width:350px;  border-radius:15px " src="images/shot06.png"></a><h5>T E X T</h5></div>
		<div class="col-lg-4 text-center"><a href="#"><img class="img-responsive" style="height:150px; width:350px;  border-radius:15px " src="images/shot06.png"></a><h5>T E X T</h5></div>
</div>
<div class="row" style="padding-left:120px; padding-right:120px ; margin-top:30px" >
        <div class="col-lg-4 text-center"><a href="#"><img class="img-responsive" style="height:150px; width:350px; border-radius:15px " src="images/shot06.png"></a><h5>T E X T</h5></div>
		<div class="col-lg-4 text-center"><a href="#"><img class="img-responsive" style="height:150px; width:350px;  border-radius:15px " src="images/shot06.png"></a><h5>T E X T</h5></div>
		<div class="col-lg-4 text-center"><a href="#"><img class="img-responsive" style="height:150px; width:350px;  border-radius:15px " src="images/shot06.png"></a><h5>T E X T</h5></div>
</div>
<div class="row" style="padding-left:120px; padding-right:120px ; margin-top:30px" >
        <div class="col-lg-4 text-center"><a href="#"><img class="img-responsive" style="height:150px; width:350px; border-radius:15px " src="images/shot06.png"></a><h5>T E X T</h5></div>
		<div class="col-lg-4 text-center"><a href="#"><img class="img-responsive" style="height:150px; width:350px;  border-radius:15px " src="images/shot06.png"></a><h5>T E X T</h5></div>
		<div class="col-lg-4 text-center"><a href="#"><img class="img-responsive" style="height:150px; width:350px;  border-radius:15px " src="images/shot06.png"></a><h5>T E X T</h5></div>
</div>
<div class="row" style="padding-left:120px; padding-right:120px ; margin-top:30px" >
        <div class="col-lg-4 text-center"><a href="#"><img class="img-responsive" style="height:150px; width:350px; border-radius:15px " src="images/shot06.png"></a><h5>T E X T</h5></div>
		<div class="col-lg-4 text-center"><a href="#"><img class="img-responsive" style="height:150px; width:350px;  border-radius:15px " src="images/shot06.png"></a><h5>T E X T</h5></div>
		<div class="col-lg-4 text-center"><a href="#"><img class="img-responsive" style="height:150px; width:350px;  border-radius:15px " src="images/shot06.png"></a><h5>T E X T</h5></div>
</div>
</div>

<div id="part" class="hidden">
<div class="row" style="padding-left:120px; padding-right:120px ; margin-top:30px" >
        <div class="col-lg-4 text-center"><a href="#"><img class="img-responsive" style="height:150px; width:350px; border-radius:15px " src="images/shot06.png"></a><h5>T E X T</h5></div>
		<div class="col-lg-4 text-center"><a href="#"><img class="img-responsive" style="height:150px; width:350px;  border-radius:15px " src="images/shot06.png"></a><h5>T E X T</h5></div>
		<div class="col-lg-4 text-center"><a href="#"><img class="img-responsive" style="height:150px; width:350px;  border-radius:15px " src="images/shot06.png"></a><h5>T E X T</h5></div>
</div>
<div class="row" style="padding-left:120px; padding-right:120px ; margin-top:30px" >
        <div class="col-lg-4 text-center"><a href="#"><img class="img-responsive" style="height:150px; width:350px; border-radius:15px " src="images/shot06.png"></a><h5>T E X T</h5></div>
		<div class="col-lg-4 text-center"><a href="#"><img class="img-responsive" style="height:150px; width:350px;  border-radius:15px " src="images/shot06.png"></a><h5>T E X T</h5></div>
		<div class="col-lg-4 text-center"><a href="#"><img class="img-responsive" style="height:150px; width:350px;  border-radius:15px " src="images/shot06.png"></a><h5>T E X T</h5></div>
</div>
<div class="row" style="padding-left:120px; padding-right:120px ; margin-top:30px" >
        <div class="col-lg-4 text-center"><a href="#"><img class="img-responsive" style="height:150px; width:350px; border-radius:15px " src="images/shot06.png"></a><h5>T E X T</h5></div>
		<div class="col-lg-4 text-center"><a href="#"><img class="img-responsive" style="height:150px; width:350px;  border-radius:15px " src="images/shot06.png"></a><h5>T E X T</h5></div>
		<div class="col-lg-4 text-center"><a href="#"><img class="img-responsive" style="height:150px; width:350px;  border-radius:15px " src="images/shot06.png"></a><h5>T E X T</h5></div>
</div>
<div class="row" style="padding-left:120px; padding-right:120px ; margin-top:30px" >
        <div class="col-lg-4 text-center"><a href="#"><img class="img-responsive" style="height:150px; width:350px; border-radius:15px " src="images/shot06.png"></a><h5>T E X T</h5></div>
		<div class="col-lg-4 text-center"><a href="#"><img class="img-responsive" style="height:150px; width:350px;  border-radius:15px " src="images/shot06.png"></a><h5>T E X T</h5></div>
		<div class="col-lg-4 text-center"><a href="#"><img class="img-responsive" style="height:150px; width:350px;  border-radius:15px " src="images/shot06.png"></a><h5>T E X T</h5></div>
</div>
<div class="row" style="padding-left:120px; padding-right:120px ; margin-top:30px" >
        <div class="col-lg-4 text-center"><a href="#"><img class="img-responsive" style="height:150px; width:350px; border-radius:15px " src="images/shot06.png"></a><h5>T E X T</h5></div>
		<div class="col-lg-4 text-center"><a href="#"><img class="img-responsive" style="height:150px; width:350px;  border-radius:15px " src="images/shot06.png"></a><h5>T E X T</h5></div>
		<div class="col-lg-4 text-center"><a href="#"><img class="img-responsive" style="height:150px; width:350px;  border-radius:15px " src="images/shot06.png"></a><h5>T E X T</h5></div>
</div>
</div>

<div class="row">
<div class="col-lg-12 text-center">
<button id="show">Show More</button>
</div>
</div>

        <?php //include 'share.php';?>
		<br><br>
		<div class="row">
		<div class="col-lg-10 col-lg-offset-1 text-center ">
		<ul class="list-inline">
                        <li>
                            <a href="#" ><h1>
							<span class="fa-stack fa-1x">
                                <i class="fa fa-circle fa-stack-2x text-info"></i>
                                <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                            </span>
							</a>
                        </li>
                        <li>
                            <a href="#" ><h1>
							<span class="fa-stack fa-1x">
                                <i class="fa fa-circle fa-stack-2x text-info"></i>
                                <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                            </span>
							</a>
                        </li>
                        <li>
                            <a href="#" ><h1>
							<span class="fa-stack fa-1x">
                                <i class="fa fa-circle fa-stack-2x text-info"></i>
                                <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
                            </span>
							</a>
                        </li>
						<li>
                            <a href="#" ><h1>
							<span class="fa-stack fa-1x">
                                <i class="fa fa-circle fa-stack-2x text-info"></i>
                                <i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
                            </span>
							</a>
                        </li>
                    </ul>              
                </div>
            </div>
			</div>
			<br>
    </body>
</html>
 <?php
        include 'connect.php';
        include 'resultFunctions.php';
        if(isset($_POST['search_sub'])){
            
          // echo "<script>alert('fuck');</script>";
            $type = $_POST['selected_sports'];
            $typeString = '';
            $typeString .= 'select_sport like \'%'.$type[0].'%\'';
            if(isset($type[1])){
                $typeString .= ' OR select_sport like \'%'.$type[1].'%\'';
                    if(isset($type[2])){
                        $typeString .= ' OR select_sport like \'%'.$type[2].'%\'';
                    }
                }
                 //echo "<script>alert($typeString);</script>";
            }
            
        
    /*  
    $type='';
         
        
        
    echo $search_query;
    echo $typeString;
        if(isset($_POST['query'])){
            $type = $_POST['selected_sports'];
            $search_query = $_POST['query'];
            
            
            
           
            //$type_type = $_POST['type'];
            
            //echo "<script>alert('".$search_query."');</script>";
            
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
        if(isset($_POST['search_sub'])){
            
        $typeString = '';
        $typeString .= 'select_sport like \'%'.$type[0].'%\'';
        if(isset($type[1])){
            $typeString .= ' OR select_sport like \'%'.$type[1].'%\'';
            if(isset($type[2])){
                $typeString .= ' OR select_sport like \'%'.$type[2].'%\'';
            }
        }
        $_SESSION['typeString']=$typeString;
        
        //echo '<h2>'.$typeString.'</h2>';
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
             $_SESSION['search_query']=$search_query_term;
            // $_SESSION['search_in']=$;
             //echo "<script>alert('".$search_query_term."');</script>";
      */
      /*
            switch ($search_query_type) {
                
                case 'Academies':  echo '<script>window.location="search_academy.php";</script>';
                    $mysql_query = 'SELECT acc_id, name_academy, address, timings, fees, coaches FROM academies where ('.$typeString.') AND name_academy like \'%'.$search_query_term.'%\'';
                    $result = mysql_query($mysql_query,$conn);
                    break;
                case 'Tournaments': echo '<script>window.location="search_tournament.php";</script>';
                    $mysql_query = 'SELECT tour_id, name_tour, entry_fess, reg_end_date, reccommended, venue FROM tournaments where ('.$typeString.') AND name_tour like \'%'.$search_query_term.'%\'';
                    $result = mysql_query($mysql_query,$conn);
                    break;
                case 'Coaches': echo '<script>window.location="search_coach.php";</script>';
                break;
                case 'Venues':echo '<script>window.location="search_venue.php";</script>';
                   
                    break;
                default:
                    break;
                    */
                    /*
            }
        }
        else {
            
            if(isset($_POST['query']))
            {
                $_SESSION['search_query']=$search_query;
                
                echo '<script>window.location="result.php";</script>';
                
            }
            
            
            
        }
        */
            ?>