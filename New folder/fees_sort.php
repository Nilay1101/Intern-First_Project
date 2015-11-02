<?php 



 $mysql_query_academy = 'SELECT acc_id, name_academy, address, timings, fees, coaches FROM academies where ('.$typeString.') AND name_academy like \'%'.$search_query.'%\' ORDER BY fees';
        
            
            
            $result_academy = mysql_query($mysql_query_academy,$conn);
            $mysql_query_tournament = 'SELECT tour_id, name_tour, entry_fess, reg_end_date, reccommended, venue FROM tournaments where ('.$typeString.') AND name_tour like \'%'.$search_query.'%\' ORDER BY entry_fess';
            $result_tournament = mysql_query($mysql_query_tournament,$conn);

?>