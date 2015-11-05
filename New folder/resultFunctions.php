<?php
function retrieveTournamentsResult($result){
    while($row = mysql_fetch_array($result,MYSQL_ASSOC)){  ?>
                    <div class="hover-box" onclick="location.href='tournament.php?id=<?php echo $row['tour_id'];?>';">
                        <div class="box">
                        <hr>
                        <p class="btn btn-success pull-right">4.3</p>
                        <address>
                            <div class="name"><a href="tournament.php?id=<?php echo $row['tour_id'];?>"><?php echo $row['name_tour'];?></a></div>
                            <strong>Entry Fees ></strong><?php echo $row['entry_fess'];?>
                            <br><strong>Registration End date ></strong><?php echo $row['reg_end_date'];?>
                            <a href="sportz/result.html"></a>
                            <br><strong>Reccommended By ></strong><?php echo $row['reccommended'];?>
                            <br><strong>Venue > </strong><?php echo $row['venue'];?>
                        <br>
                            <ol class="list-inline pull-right box-list">
                                <li><img src="images/tick1.png"></li>
                                <li><img src="images/tick1.png"></li>
                                <li><img src="images/tick1.png"></li>
                                <li><img src="images/tick1.png"></li>
                                <li><img src="images/tick1.png"></li>
                            </ol>
                        </address>
                        </div><br>
                
                    </div>
<?php }

}

function retrieveAcademiesResult($result){
    while($row = mysql_fetch_array($result,MYSQL_ASSOC)){ ?>
        <div class="hover-box" id="hover-box" onclick="location.href='academy-profile.php?id=<?php echo $row['acc_id'];?>';">
                        <div class="box">
                        <hr>
                        <p class="btn btn-success pull-right">4.3</p>
                        <address>
                            <div class="name"><a href="academy-profile.php?id=<?php echo $row['id'];?>"><?php echo $row['name'];?></a></div>
                            <strong>Address ></strong><?php echo $row['address'];?>
                            <br><strong>Timings ></strong><?php echo $row['timings'];?>
                            <a href="sportz/result.html"></a>
                            <br><strong>Fees ></strong><?php echo $row['min_fees'];?>
                            <br><strong>No of Coaches > </strong><?php echo $row['num_coaches'];?>
                        <br>
                            <ol class="list-inline pull-right box-list">
                                <li><img src="images/tick1.png"></li>
                                <li><img src="images/tick1.png"></li>
                                <li><img src="images/tick1.png"></li>
                                <li><img src="images/tick1.png"></li>
                                <li><img src="images/tick1.png"></li>
                            </ol>
                        </address>
                        </div><br>
                
                        </div>
    <?php }
}
?>