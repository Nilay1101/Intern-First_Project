<?php
include('includes/connect.php');
$id = $_GET['id1']; 
$city=$_GET['city1'];
if(!empty($id)){
    $result = mysql_query("DELETE FROM th_previlige_".$city." WHERE id=".$id."");
    $result2=mysql_query("DELETE FROM th_admin WHERE aid=".$id."");
}
        echo "<script>window.location='adminprevilige.php?city3=".$city."';</script>";
?>