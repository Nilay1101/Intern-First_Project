<?php
include 'connect.php';
$term = $_GET['term'];
$termLength = strlen($term);
$array = array();

array_push($array,'Search "'.$term.'" in Tournaments');
array_push($array,'Search "'.$term.'" in Academies');
array_push($array,'Search "'.$term.'" in Venues');
array_push($array,'Search "'.$term.'" in Coaches');
array_push($array,'--------------------------');

if($termLength>2){
    $queryAcademy = 'SELECT DISTINCT name_academy from academies where name_academy like \'%'.$term.'%\' LIMIT 2';
    $queryTournament = 'SELECT DISTINCT name_tour from tournaments where name_tour like \'%'.$term.'%\' LIMIT 2';
    $resultAcademy = mysql_query($queryAcademy,$conn);
    $resultTournament = mysql_query($queryTournament,$conn);
    while($row = mysql_fetch_array($resultAcademy,MYSQL_ASSOC)){
        $partition = explode(' ', $row['name_academy']);
        
        array_push($array,$partition[0].' '.$partition[1]);
    }
    while($row = mysql_fetch_array($resultTournament,MYSQL_ASSOC)){
        $partition = explode(' ', $row['name_tour']);
        
        array_push($array,$partition[0].' '.$partition[1]);
    }
}
    echo json_encode($array);


?>