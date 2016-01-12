

<?php
require'includes/connect.php';
error_reporting(0);
session_start();
if(!isset($_SESSION['id'])){
echo '<script>window.location="index.php";</script>';
}
else{
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
	

		<div class="container" style="position:relative;height:900px;top:140px;background-color:#3f99c3;">
			<form action="adminprevilige.php" method=POST>
			<div class="row" style="position:relative;top:30px;">	
				<div class="col-md-ofsset-1 col-md-4">
					<label>Please select city</label>
					<div class="form-group">
                           			<select class="form-control" name="city_select" id="city_select">
									<option value="">Select</option>
									<option value="mumbai">Mumbai</option>
									<option value="hyderabad">Hyderabad</option>
									<option value="pune">Pune</option>
									<option value="ahmedabad">Ahmedabad</option>
									<option value="bangalore">Bangalore</option>
									<option value="delhi">Delhi</option>
									<option value="chennai">Chennai</option>
									<option value="kolkata">Kolkata</option>
									
						</select>				

									<script type="text/javascript">
											document.getElementById('city_select').value = "<?php echo $_POST['city_select'];?>";
									</script>
		
					</div>
					
					
				</div>
				<div class="col-md-1" style="position:relative;top:43px;">
				<input type="submit" value="Submit" class="btn btn-sm btn-primary form-control" name="submit">
				</div>
				
					
			</div>
			
			<br><br>
			<?php
			
			
		

			if($_GET['city3'])
			{
				
				$city4=$_GET['city3'];
				$run=mysql_query("SELECT * FROM th_previlige_".$city4."");
									$num_rows=mysql_num_rows($run);
									if($num_rows!=0)
									{
										echo"<div class='row' style='positon:absolute;'>
														<div class='col-md-offset-1 col-md-10'>
																<div class='table-responsive'>
																	<table border='1' width='60%' class='table table-hover'>
																	<th>S.no</th>
																	<th>E-mail id</th>
																	<th>Modify</th>
																	<th>Delete</th>

																	";
										while($row=mysql_fetch_assoc($run))
										{
											$username=$row['username'];
											$id=$row['id'];
											
											echo "
											
											
																	
																<tr><td>" . $id. "        &nbsp </td>&nbsp<td>&nbsp" . $username. "</td><td style='position:relative;padding-left:20px;'>  &nbsp<a href='#' class='btn btn-md btn-warning'>Modify Access</a> </td>&nbsp<td style='position:relative;padding-left:20px;'><a href='deletemodifyrow.php?id1=".$id."&city1=".$city4."' class='btn btn-md btn-danger'>Delete</a></td>&nbsp</tr>" ;
																	
														
													
													
										}
									}		
											echo "</table>
																	</div>
																</div>
														</div>";
														
														
	}
				
				
			
			
			
	if($_POST['submit']||$_POST['submit1'])
	{
	$city=$_POST['city_select'];	
	$addnewemail=$_POST['adminnewemail'];
	$id2=$_POST['id2'];
	
	if($city=="mumbai")
	{
	
	if($addnewemail!=null)
														{
															
															$add=mysql_query("INSERT INTO th_previlige_".$city."  VALUES('$id2','$addnewemail')");
															$add2=mysql_query("INSERT INTO th_admin VALUES('$id2','$addnewemail','normal')");
														}
	

	
	$run=mysql_query("SELECT * FROM th_previlige_".$city."");
									$num_rows=mysql_num_rows($run);
									if($num_rows!=0)
									{
										echo"<div class='row' style='positon:absolute;'>
														<div class='col-md-offset-1 col-md-10'>
																<div class='table-responsive'>
																	<table border='1' width='60%' class='table table-hover'>
																	<th>S.no</th>
																	<th>E-mail id</th>
																	<th>Modify</th>
																	<th>Delete</th>

																	";
										while($row=mysql_fetch_assoc($run))
										{
											$username=$row['username'];
											$id=$row['id'];
											
											echo "
											
											
																	
																<tr><td>" . $id. "        &nbsp </td>&nbsp<td>&nbsp" . $username. "</td><td style='position:relative;padding-left:20px;'>  &nbsp<a href='#' class='btn btn-md btn-warning'>Modify Access</a> </td>&nbsp<td style='position:relative;padding-left:20px;'><a href='deletemodifyrow.php?id1=".$id."&city1=".$city."' class='btn btn-md btn-danger'>Delete</a></td>&nbsp</tr>" ;
																	
														
													
													
										}
									}		
											echo "</table>
																	</div>
																</div>
														</div>";
														
														
	}
	if($city=="hyderabad")
	{
		
		if($addnewemail!=null)
														{
															
															$add=mysql_query("INSERT INTO th_previlige_".$city."  VALUES('$id2','$addnewemail')");
																$add2=mysql_query("INSERT INTO th_admin VALUES('$id2','$addnewemail','normal')");
														}
	

	
	$run=mysql_query("SELECT * FROM th_previlige_".$city."");
									$num_rows=mysql_num_rows($run);
									if($num_rows!=0)
									{
										echo"<div class='row' style='positon:absolute;'>
														<div class='col-md-offset-1 col-md-10'>
																<div class='table-responsive'>
																	<table border='1' width='60%' class='table table-hover'>
																	<th>S.no</th>
																	<th>E-mail id</th>
																	<th>Modify</th>
																	<th>Delete</th>

																	";
										while($row=mysql_fetch_assoc($run))
										{
											$username=$row['username'];
											$id=$row['id'];
											
											echo "
											
											
																	
																<tr><td>" . $id. "        &nbsp </td>&nbsp<td>&nbsp" . $username. "</td><td style='position:relative;padding-left:20px;'>  &nbsp<a href='#' class='btn btn-md btn-warning'>Modify Access</a> </td>&nbsp<td style='position:relative;padding-left:20px;'><a href='deletemodifyrow.php?id1=".$id."&city1=".$city."' class='btn btn-md btn-danger'>Delete</a></td>&nbsp</tr>" ;
																	
														
													
													
										}
									}		
											echo "</table>
																	</div>
																</div>
														</div>";
	}
	if($city=="pune")
	{
		if($addnewemail!=null)
														{
															
															$add=mysql_query("INSERT INTO th_previlige_".$city."  VALUES('$id2','$addnewemail')");
																$add2=mysql_query("INSERT INTO th_admin VALUES('$id2','$addnewemail','normal')");
														}
	

	
	$run=mysql_query("SELECT * FROM th_previlige_".$city."");
									$num_rows=mysql_num_rows($run);
									if($num_rows!=0)
									{
										echo"<div class='row' style='positon:absolute;'>
														<div class='col-md-offset-1 col-md-10'>
																<div class='table-responsive'>
																	<table border='1' width='60%' class='table table-hover'>
																	<th>S.no</th>
																	<th>E-mail id</th>
																	<th>Modify</th>
																	<th>Delete</th>

																	";
										while($row=mysql_fetch_assoc($run))
										{
											$username=$row['username'];
											$id=$row['id'];
											
											echo "
											
											
																	
																<tr><td>" . $id. "        &nbsp </td>&nbsp<td>&nbsp" . $username. "</td><td style='position:relative;padding-left:20px;'>  &nbsp<a href='#' class='btn btn-md btn-warning'>Modify Access</a> </td>&nbsp<td style='position:relative;padding-left:20px;'><a href='deletemodifyrow.php?id1=".$id."&city1=".$city."' class='btn btn-md btn-danger'>Delete</a></td>&nbsp</tr>" ;
																	
														
													
													
										}
									}		
											echo "</table>
																	</div>
																</div>
														</div>";
	}
	if($city=="ahmedabad")
	{
	if($addnewemail!=null)
														{
															
															$add=mysql_query("INSERT INTO th_previlige_".$city."  VALUES('$id2','$addnewemail')");
																$add2=mysql_query("INSERT INTO th_admin VALUES('$id2','$addnewemail','normal')");
														}
	

	
	$run=mysql_query("SELECT * FROM th_previlige_".$city."");
									$num_rows=mysql_num_rows($run);
									if($num_rows!=0)
									{
										echo"<div class='row' style='positon:absolute;'>
														<div class='col-md-offset-1 col-md-10'>
																<div class='table-responsive'>
																	<table border='1' width='60%' class='table table-hover'>
																	<th>S.no</th>
																	<th>E-mail id</th>
																	<th>Modify</th>
																	<th>Delete</th>

																	";
										while($row=mysql_fetch_assoc($run))
										{
											$username=$row['username'];
											$id=$row['id'];
											
											echo "
											
											
																	
																<tr><td>" . $id. "        &nbsp </td>&nbsp<td>&nbsp" . $username. "</td><td style='position:relative;padding-left:20px;'>  &nbsp<a href='#' class='btn btn-md btn-warning'>Modify Access</a> </td>&nbsp<td style='position:relative;padding-left:20px;'><a href='deletemodifyrow.php?id1=".$id."&city1=".$city."' class='btn btn-md btn-danger'>Delete</a></td>&nbsp</tr>" ;
																	
														
													
													
										}
									}		
											echo "</table>
																	</div>
																</div>
														</div>";
	}
	if($city=="bangalore")
	{
	if($addnewemail!=null)
														{
															
															$add=mysql_query("INSERT INTO th_previlige_".$city."  VALUES('$id2','$addnewemail')");
																$add2=mysql_query("INSERT INTO th_admin VALUES('$id2','$addnewemail','normal')");
														}
	

	
	$run=mysql_query("SELECT * FROM th_previlige_".$city."");
									$num_rows=mysql_num_rows($run);
									if($num_rows!=0)
									{
										echo"<div class='row' style='positon:absolute;'>
														<div class='col-md-offset-1 col-md-10'>
																<div class='table-responsive'>
																	<table border='1' width='60%' class='table table-hover'>
																	<th>S.no</th>
																	<th>E-mail id</th>
																	<th>Modify</th>
																	<th>Delete</th>

																	";
										while($row=mysql_fetch_assoc($run))
										{
											$username=$row['username'];
											$id=$row['id'];
											
											echo "
											
											
																	
																<tr><td>" . $id. "        &nbsp </td>&nbsp<td>&nbsp" . $username. "</td><td style='position:relative;padding-left:20px;'>  &nbsp<a href='#' class='btn btn-md btn-warning'>Modify Access</a> </td>&nbsp<td style='position:relative;padding-left:20px;'><a href='deletemodifyrow.php?id1=".$id."&city1=".$city."' class='btn btn-md btn-danger'>Delete</a></td>&nbsp</tr>" ;
																	
														
													
													
										}
									}		
											echo "</table>
																	</div>
																</div>
														</div>";
	}
	if($city=="delhi")
	{
	if($addnewemail!=null)
														{
															
															$add=mysql_query("INSERT INTO th_previlige_".$city."  VALUES('$id2','$addnewemail')");
																$add2=mysql_query("INSERT INTO th_admin VALUES('$id2','$addnewemail','normal')");
														}
	

	
	$run=mysql_query("SELECT * FROM th_previlige_".$city."");
									$num_rows=mysql_num_rows($run);
									if($num_rows!=0)
									{
										echo"<div class='row' style='positon:absolute;'>
														<div class='col-md-offset-1 col-md-10'>
																<div class='table-responsive'>
																	<table border='1' width='60%' class='table table-hover'>
																	<th>S.no</th>
																	<th>E-mail id</th>
																	<th>Modify</th>
																	<th>Delete</th>

																	";
										while($row=mysql_fetch_assoc($run))
										{
											$username=$row['username'];
											$id=$row['id'];
											
											echo "
											
											
																	
																<tr><td>" . $id. "        &nbsp </td>&nbsp<td>&nbsp" . $username. "</td><td style='position:relative;padding-left:20px;'>  &nbsp<a href='#' class='btn btn-md btn-warning'>Modify Access</a> </td>&nbsp<td style='position:relative;padding-left:20px;'><a href='deletemodifyrow.php?id1=".$id."&city1=".$city."' class='btn btn-md btn-danger'>Delete</a></td>&nbsp</tr>" ;
																	
														
													
													
										}
									}		
											echo "</table>
																	</div>
																</div>
														</div>";
	}
	if($city=="chennai")
	{
	if($addnewemail!=null)
														{
															
															$add=mysql_query("INSERT INTO th_previlige_".$city."  VALUES('$id2','$addnewemail')");
																$add2=mysql_query("INSERT INTO th_admin VALUES('$id2','$addnewemail','normal')");
														}
	

	
	$run=mysql_query("SELECT * FROM th_previlige_".$city."");
									$num_rows=mysql_num_rows($run);
									if($num_rows!=0)
									{
										echo"<div class='row' style='positon:absolute;'>
														<div class='col-md-offset-1 col-md-10'>
																<div class='table-responsive'>
																	<table border='1' width='60%' class='table table-hover'>
																	<th>S.no</th>
																	<th>E-mail id</th>
																	<th>Modify</th>
																	<th>Delete</th>

																	";
										while($row=mysql_fetch_assoc($run))
										{
											$username=$row['username'];
											$id=$row['id'];
											
											echo "
											
											
																	
																<tr><td>" . $id. "        &nbsp </td>&nbsp<td>&nbsp" . $username. "</td><td style='position:relative;padding-left:20px;'>  &nbsp<a href='#' class='btn btn-md btn-warning'>Modify Access</a> </td>&nbsp<td style='position:relative;padding-left:20px;'><a href='deletemodifyrow.php?id1=".$id."&city1=".$city."' class='btn btn-md btn-danger'>Delete</a></td>&nbsp</tr>" ;
																	
														
													
													
										}
									}		
											echo "</table>
																	</div>
																</div>
														</div>";
	}
	if($city=="kolkata")
	{
	if($addnewemail!=null)
														{
															
															$add=mysql_query("INSERT INTO th_previlige_".$city."  VALUES('$id2','$addnewemail')");
																$add2=mysql_query("INSERT INTO th_admin VALUES('$id2','$addnewemail','normal')");
														}
	

	
	$run=mysql_query("SELECT * FROM th_previlige_".$city."");
									$num_rows=mysql_num_rows($run);
									if($num_rows!=0)
									{
										echo"<div class='row' style='positon:absolute;'>
														<div class='col-md-offset-1 col-md-10'>
																<div class='table-responsive'>
																	<table border='1' width='60%' class='table table-hover'>
																	<th>S.no</th>
																	<th>E-mail id</th>
																	<th>Modify</th>
																	<th>Delete</th>

																	";
										while($row=mysql_fetch_assoc($run))
										{
											$username=$row['username'];
											$id=$row['id'];
											
											echo "
											
											
																	
																<tr><td>" . $id. "        &nbsp </td>&nbsp<td>&nbsp" . $username. "</td><td style='position:relative;padding-left:20px;'>  &nbsp<a href='#' class='btn btn-md btn-warning'>Modify Access</a> </td>&nbsp<td style='position:relative;padding-left:20px;'><a href='deletemodifyrow.php?id1=".$id."&city1=".$city."' class='btn btn-md btn-danger'>Delete</a></td>&nbsp</tr>" ;
																	
														
													
													
										}
									}		
											echo "</table>
																	</div>
																</div>
														</div>";
	}
	
	}
	
	
								
									
							
													?>
		<br><br><br><br><br>
		

		<div class="row">
			<div class="col-md-4">
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
								<input type="number" class="form-control" name="id2" placeholder="Id">
								
						</div>
						</div>
						<div class="col-md-9">
						<input type="text" class="form-control" name="adminnewemail" placeholder="Enter E-mail id to add">
						</div>
					
				</div>
			</div>
			<div class="col-md-1" >
				<input  class="btn btn-md btn-primary" type="submit" name="submit1" value="Add" >
			</div>
			
		</div>
	</form>

	</div>
	
	
	</body>
	</html>
											
	<?php } ?>									
									
									
										
									
								
							
							
							