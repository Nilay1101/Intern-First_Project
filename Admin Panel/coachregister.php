<?php
require 'includes/connect.php';
session_start();
error_reporting(0);
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
		<link href="css/adminhome.css" rel="stylesheet">
		<script src="js/validator.js"></script>
		<title>Coach Registration</title>
		 
        </head>
	
	<body>
	<header class="header">
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation" data-spy="affix" data-offset-top="40" style="height:110px">
    <div class="navbar-header col-md-3">
        
        <a class="navbar-brand" href="index.php"><img src="images/S6.png"></a>
    </div>
	</nav>
	</header>
	
		<div class="container" style="position:relative;top:110px">
		
			<form action="#" method=POST enctype="multipart/form-data" data-toggle="validator" role="form">
				<div class="form-group has-feedback" >
					<div class="row">
					<div class="col-md-4" style="background-color:#4DD0E1;height:750px;">
						
						<div class="row" style="position:relative;top:40px;" >
						
							<div class="col-md-12">
								
								<div class="form-group">
									<input type="text" class="form-control" name="name1" placeholder="Name" pattern="^([a-zA-Z]+)$" data-error="Do not leave blank or enter numbers or special characters" required>
									<span class="help-block with-errors"></span>
								</div>
								<div class="form-group">
								    <select name="city" class="form-control" required>
								        <option value="">Select City</option>
								        <option value="mumbai">Mumbai</option>
								        <option value="hyderabad">Hyderabad</option>
								        <option value="pune">Pune</option>
								        <option value="bangalore">Bangalore</option>
								        <option value="ahmedabad">Ahmedabad</option>
								        <option value="delhi">Delhi</option>
								        <option value="chennai">Chennai</option>
								        <option value="kolkata">Kolkata</option>
								        
								        
								        
								    </select>
								    <span class="help-block with-errors"></span>
								</div>
								<div class="form-group">
									<textarea type="textarea" class="form-control" name="about_me" placeholder="About Me" rows="3" pattern="^([a-zA-Z0-9]+)$" data-error="Do not leave blank" required></textarea>
									<span class="help-block with-errors"></span>
								
								</div>
								<div class="form-group">
									<textarea type="textarea" class="form-control" name="achievements" placeholder=" Achievements Done" pattern="^([a-zA-Z0-9]+)$" rows="3" data-error="Do not leave blank"  required></textarea>
									<span class="help-block with-errors"></span>
								
								</div>
								<div class="form-group">
									<textarea type="textarea" class="form-control" name="courses_done" placeholder="Courses Done" pattern="^([a-zA-Z0-9]+)$" rows="3" data-error="Do not leave blank" required></textarea>
									<span class="help-block with-errors"></span>
								
								</div>
								<div class="form-group">
									<textarea type="textarea" class="form-control" name="reputed_players" placeholder="Reputed Players from the Coach" pattern="^([a-zA-Z0-9]+)$" rows="3" data-error="Do not leave blank" required></textarea>
									<span class="help-block with-errors"></span>
								
								</div>
								
								
								
								
								
							</div>
						</div>
					</div>
					
					
					
					
					<div class="col-md-8" style="background-color:#4DD0E1;height:750px;">
					
						<div class="row" style="position:relative;top:40px;" >
							<div class="col-md-12">
								
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<input type="text" class="form-control" name="sport" pattern="^([a-zA-Z0-9]+)$" placeholder="Sport" data-error="Do not leave blank" required>
											<span class="help-block with-errors"></span>
											
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<input type="text" class="form-control" name="experience" pattern="^([a-zA-Z0-9]+)$" placeholder="Experience" data-error="Do not leave blank" required>
											<span class="help-block with-errors"></span>
										</div>
									</div>
									<div class="col-md-4" style="postition:relative;top:-14px;">
										<div class="form-group dropdown">
											<select class="form-control" name="gender" required>
										<option value="">Gender</option>
										<option value="male">Male</option>
										<option value="female">Female</option>
										<option value="unisex">Unisex</option>
										</select>
										<span class="help-block with-errors"></span>

									
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<input type="number" class="form-control" name="feespm" pattern="^([0-9]+)$" placeholder="Fees Per Month" data-error="Please enter only numbers" required>
											<span class="help-block with-errors"></span>
										</div>

									</div>
									<div class="col-md-4 col-md-offset-3">
										<div class="form-group">
									<label for="exampleInputFile">Upload Main Image</label>
									<p class="help-block">Max size:</p>
									<input type="file" id="InputFile1" name="main_image" data-error="Please upload valid image" required>
									<span class="help-block with-errors"></span>
									
								</div>
									
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<textarea  class="form-control" name="fees" placeholder="Fees" pattern="^([a-zA-Z0-9]+)$" rows="3" data-error="Do not leave blank" required></textarea>
											<span class="help-block with-errors"></span>
										</div>

									</div>
									
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<textarea type="text" class="form-control" name="academies_working" pattern="^([a-zA-Z0-9]+)$" placeholder="Acadamies Working" data-error="Do not leave blank" rows="2" required></textarea>
											<span class="help-block with-errors"></span>
										</div>

									</div>
									
								</div>
								<div class="row">
									<div class="col-md-5">
										<div class="form-group">
											<input type="number" class="form-control" name="tele_number" pattern="^([0-9]+)$" placeholder="Office Telephone Number" data-error="Please enter only numbers" required>
											<span class="help-block with-errors"></span>
										</div>

									</div>
									
								</div>
								<div class="row">
									<div class="col-md-5">
										<div class="form-group">
											<input type="number" class="form-control" name="mob_number" pattern="^([0-9]+)$" placeholder="Mobile  Number" data-error="Please enter only numbers" required>
											<span class="help-block with-errors"></span>
										</div>

									</div>
									
								</div>
								<div class="row">
									<div class="col-md-5">
										<div class="form-group">
											<input type="email" class="form-control" name="email" placeholder="E-mail" data-error="Please enter a valid E-mail" required>
											<span class="help-block with-errors"></span>
										</div>
										

									</div>
									<div class="col-md-5">
										<div class="form-group">
											<input type="text" class="form-control" name="website" placeholder="Website" pattern="^(http:\/\/|https:\/\/)?(www.)?([a-zA-Z0-9]+).[a-zA-Z0-9]*.[a-z]{3}.?([a-z]+)?$" data-error="Please enter in this format www.xyz.com" required>
											<span class="help-block with-errors"></span>
										</div>

									</div>
									
								</div>
								
								
								<br>
									<div class="row">
								        <div class="com-md-2">
									        <input type="submit" class="btn btn-md btn-success col-md-2" name="submit1" value="Submit">
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                
                                            
                                            <a href="<?php  
                                                if($_SESSION['rights']=='super'){
                                                echo "welcomesuper.php";}
                                                 if($_SESSION['rights']=='normal'){
                                                echo "welcome.php";}
                                            
                                            
                                            ?>" class="btn btn-md btn-danger">Cancel</a>
                                            
                                            
                                            </div>
                                        </div>
                                    </div>

							</div>
							
							
						</div>
					
					</div>
				</div>
				</div>
				
			</form>
		</div>	
		
	
	
	
	</body>
</html>

<?php

	if($_POST['submit1'])
	{
		$city=$_POST['city'];
		
		$name1=$_POST['name1'];
		$tele_number=$_POST['tele_number'];
		$mob_number=$_POST['mob_number'];
		$email=$_POST['email'];
		$website=$_POST['website'];
		$courses_done=$_POST['courses_done'];
		$reputed_players=$_POST['reputed_players'];
		$sport=$_POST['sport'];
		$experience=$_POST['experience'];
		$academies_working=$_POST['academies_working'];
  
		$gender=$_POST['gender'];
		$feespm=$_POST['feespm'];
		$fees=$_POST['fees'];
		$about_me=$_POST['about_me'];
		$achievements=$_POST['achievements'];
		
	
	
		
		            if($name1&&$about_me&&$achievements&&$courses_done&&$reputed_players&&$sport&&$experience&&$gender&&$feespm&&$fees&&$academies_working&&$mob_number&&$tele_number&&$email&&$website)
			
			{
			    
			    if($city=="mumbai")
			    {
			mysql_query("INSERT INTO th_coachregister_mumbai VALUES('','$name1','$city',$about_me','$achievements','$courses_done','$reputed_players','$sport','$experience','$gender','$feespm','$fees','$academies_working','$tele_number','$mob_number','$email','$website')");
			    }
			     if($city=="hyderabad")
			    {
			mysql_query("INSERT INTO th_coachregister_hyderabad VALUES('','$name1','$city','$about_me','$achievements','$courses_done','$reputed_players','$sport','$experience','$gender','$feespm','$fees','$academies_working','$tele_number','$mob_number','$email','$website')");
			    }
			     if($city=="pune")
			    {
			mysql_query("INSERT INTO th_coachregister_pune VALUES('','$name1','$city','$about_me','$achievements','$courses_done','$reputed_players','$sport','$experience','$gender','$feespm','$fees','$academies_working','$tele_number','$mob_number','$email','$website')");
			    }
			     if($city=="ahmedabad")
			    {
			mysql_query("INSERT INTO th_coachregister_ahmedabad VALUES('','$name1','$city','$about_me','$achievements','$courses_done','$reputed_players','$sport','$experience','$gender','$feespm','$fees','$academies_working','$tele_number','$mob_number','$email','$website')");
			    }
			     if($city=="delhi")
			    {
			mysql_query("INSERT INTO th_coachregister_delhi VALUES('','$name1','$city','$about_me','$achievements','$courses_done','$reputed_players','$sport','$experience','$gender','$feespm','$fees','$academies_working','$tele_number','$mob_number','$email','$website')");
			    }
			     if($city=="chennai")
			    {
			mysql_query("INSERT INTO th_coachregister_chennai VALUES('','$name1','$city','$about_me','$achievements','$courses_done','$reputed_players','$sport','$experience','$gender','$feespm','$fees','$academies_working','$tele_number','$mob_number','$email','$website')");
			    }
			     if($city=="kolkata")
			    {
			mysql_query("INSERT INTO th_coachregister_kolkata VALUES('','$name1','$city','$about_me','$achievements','$courses_done','$reputed_players','$sport','$experience','$gender','$feespm','$fees','$academies_working','$tele_number','$mob_number','$email','$website')");
			    }
			     if($city=="bangalore")
			    {
			mysql_query("INSERT INTO th_coachregister_bangalore VALUES('','$name1','$city','$about_me','$achievements','$courses_done','$reputed_players','$sport','$experience','$gender','$feespm','$fees','$academies_working','$tele_number','$mob_number','$email','$website')");
			    }
			    
			
			
			}
			
			
			
			if(isset($_FILES['main_image'])){
      $errors= array();
      $file_name = $_FILES['main_image']['name'];
      $file_size =$_FILES['main_image']['size'];
      $file_tmp =$_FILES['main_image']['tmp_name'];
      $file_type=$_FILES['main_image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['main_image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"upload/".$file_name);
         echo "Success";
      }
      else{
         print_r($errors);
      }
   }
			
	}
		?>