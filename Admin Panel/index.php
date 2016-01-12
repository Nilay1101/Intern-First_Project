<?php require'includes/connect.php' ?>
<?php require'includes/admin.php' ?>
<?php
session_start();
if(isset($_SESSION['id'])){
echo'<script>window.location="welcome.php";</script>';
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
				<nav class="navbar navbar-default navbar-fixed-top" role="navigation" data-spy="affix" data-offset-top="40" style="height:110px">
					<div class="navbar-header col-md-3">
        
							<a class="navbar-brand" href="index.php"><img src="images/S6.png"></a>
					</div>
				</nav>
			</header>
		
		<div class="container" style="position:relative;top:110px;height:560px;background-color:#3f99c3;">
			<form method=POST>
				<div class="row">
					<br><br><br><br><br><br><br>
					<div class="col-md-4 col-md-offset-4">
					<h2>  &nbsp &nbsp &nbsp &nbsp Admin Please Login</h2>
					</div>
					<br><br><br><br><br><br><br><br>
				<div class="col-md-4 col-md-offset-4">
					<div class="form-group">
						<input type="email" class="form-control" name="lg_username" placeholder="Enter E-mail id" required>
					</div>
					
				</div>
				<div class="col-md-2 col-md-offset-5 ">
					<input type="submit" class="btn btn-md btn-success form-control" value="Login" name="user_login">
				</div>
			
			</form>
			<br><br><br><br><br><br><br><br>
			<h5 class="col-md-6 col-md-offset-3">If you are finding any difficulties, Please contact your Manager as soon as possible</h5>
		
		</div>
		</div>
		
	</body>
</html>
<?php
if(isset($_POST['user_login'])){
	
	$login=new admin;
	if($login->userlogin($_POST['lg_username'])){
	    if($_SESSION['rights']=='normal'){
	    echo'<script>window.location="welcome.php";</script>';
		exit;
	    }
	    if($_SESSION['rights']=='super'){
	    echo'<script>window.location="welcomesuper.php";</script>';
		exit;
	    }
	    
		}
		else{
			echo"<script>alert('Invalid Credentials')</script>";
		}
}
?>
<?php } ?>