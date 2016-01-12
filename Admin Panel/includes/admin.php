<?php require'connect.php' ?>
<?php

class admin{
	function userlogin($uname){
	$qury="SELECT * FROM `th_admin` where email='$uname'";
	$run=mysql_query($qury);
		if(mysql_num_rows($run)>0){
		session_start();
		$_SESSION['email']=$uname;
	    $row=mysql_fetch_array($run);
	    
    	$_SESSION['rights']=$row['rights'];	
	    $_SESSION['id']=$row['aid'];	
		return true;		
		}
		else{
			//echo"login fail";
					
			return false;
		}

	}
}

?>