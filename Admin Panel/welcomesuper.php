<?php 
session_start();
require'includes/connect.php' 
?>
<?php

if(!isset($_SESSION['id'])){
echo'<script>window.location="index.php";</script>';
}
else{

//echo"$_SESSION['uname']";
?>
<html>
    <head>
        <title>Sportz.com</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include 'includeheader.php'; ?>
        <link href="css/theme.css" rel="stylesheet">
        <link href="css/jquery-ui.css" rel="stylesheet">
		
        <script src="js/jquery-ui.min.js"></script>
        
	</head>
	
	<body>
	
	<header class="header">
	
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation" data-spy="affix" data-offset-top="220px" style="height:140px">
    <div class="navbar-header col-md-3">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php"><img src="images/S6.png"></a>
    </div>
	<div class="collapse navbar-collapse col-md-9 pull-right" id="example-navbar-collapse">
        <ul class="nav navbar-nav">
            
           
            <li><a href="includes/logout.php">Logout</a></li>
        </ul>
    </div>
</nav>
	</header>
	

		<div class="container" style="position:relative;height:750px;top:110px;background-color:#3f99c3;">
		<br><br><br>
		<br>
		<form method=POST action="#">
		<div class="row">
			<div class="col-md-5">
				<div class="form-group form-inline has-feedback" >
					<label>Please select city</label>
					<div class="form-group">
                           <select class="form-control">
									<option value="">Select</option>
									<option value="mumabi">Mumbai</option>
									<option value="hyderabad">Hyderabad</option>
									<option value="pune">Pune</option>
									<option value="ahmedabad">Ahmedabad</option>
									<option value=" bangalore">Bangalore</option>
									<option value="delhi">Delhi</option>
									<option value="chennai">Chennai</option>
									<option value="kolkata">Kolkata</option>
									<option value="banglore">Banglore</option>
										

									</select>
		
					</div>
				</div>
			</div>
		</div>
		<br>
		<br>
		
		<div class="row">
			<div class="col-md-12">
				
					
					<div class="col-md-3" >
						<a class="btn btn-lg btn-success" href="academyregister.php">Create Academy</a>
					</div>
					<div class="col-md-3 ">
						<a class="btn btn-lg btn-success" href="#">Create Tournament</a>
					</div>
					<div class="col-md-4">
						<a class="btn btn-lg btn-success" href="coachregister.php">CreateTeam/Club/Coach/Player</a>
					</div>
			
					
				
			</div>
			</div>
			<br><br>
			<div class="row">
			    <div class="col-md-8">
			        <div class=" col-md-4">
						<a class="btn btn-lg btn-success" href="#">Reviews and Comments</a>
					</div>
					<div class=" col-md-offset-2 col-md-4">
						<a class="btn btn-lg btn-success" href="venueregister.php">Create Venue</a>
					</div>
			        </div>
			 </div>
			
		
		<br>
		<br>
		
		<div class=row">
				<div class="col-md-8">
			
								<div class="col-md-3">
										<a class="btn btn-success btn-lg" href="#">Modify</a>
								</div>
								<div class="form-group form-inline text-center has-feedback col-md-3 " style="margin-top:15px">
					
								<select name="type_tourna" class="form-control" id="type_type" style="margin-top: -1px;">
                                <option>Select</option>
								<option value="academy">Academy</option>
                                <option value="team">Team</option>
                                <option value="club">Club</option>
								<option value="coach">Coach</option>
								
								</select>
		
					
								</div>
								<button type="submit" class="btn btn-warning col-md-2" >Go</button>
								
								
					</div>
				</div>
			</form>
			<div class="row">
									<div class="col-md-4">
										<a class="btn btn-lg btn-primary" href="adminprevilige.php">Admin Previliges</a>
									</div>
								</div>
		</div>
		
		
	
	

	
	</body>
	</html>
	<?php } ?>