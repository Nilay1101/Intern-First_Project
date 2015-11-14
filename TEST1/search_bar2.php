<?php
include 'connect.php';
//mysql_select_db("sportz");
if($_GET['type']=='Academy'){
    $query = 'SELECT DISTINCT area FROM academies where type like \'%'.$_GET['key'].'%\' && area like \'%'.$_GET['term'].'%\'';
    $array1 = array();
    $result = mysql_query($query,$conn);
    while($row = mysql_fetch_array($result,MYSQL_ASSOC)){
        array_push($array1, $row['area']);
    }
        echo json_encode($array1);
}
if($_GET['type']=='Tournament'){
    $query = 'SELECT DISTINCT area FROM tournaments where type like \'%'.$_GET['key'].'%\' && area like \'%'.$_GET['term'].'%\'';
    $array1 = array();
    $result = mysql_query($query,$conn);
    while($row = mysql_fetch_array($result,MYSQL_ASSOC)){
        array_push($array1, $row['area']);
    }
        echo json_encode($array1);
}

?>