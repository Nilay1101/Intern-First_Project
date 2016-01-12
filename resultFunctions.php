<?php
function retrieveTournamentsResult($result){
    while($row = mysql_fetch_array($result,MYSQL_ASSOC)){  ?>
                    <div class="hover-box" onclick="location.href='tournament-profile.php?id=<?php echo $row['id'];?>';">
                        <div class="box">
                        <hr>
                        <p class="btn btn-success pull-right">4.3</p>
                        <address>
                            <div class="name"><a href="tournament.php?id=<?php echo $row['id'];?>"><?php echo $row['tourn_name'];?></a></div>
                            <strong>Entry Fees ></strong><?php echo $row['reg_fees'];?>
                            <br><strong>Tournament Start date ></strong><?php echo $row['tourn_start_date'];?>
                            <br><strong>Tournament End date ></strong><?php echo $row['tourn_end_date'];?>
                            <a href="sportz/result.html"></a>
                            <br><strong>Prize Money ></strong><?php echo $row['prize_money'];?>
                            
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
        <div class="hover-box" id="hover-box" onclick="location.href='academy-profile.php?id=<?php echo $row['id'];?>';">
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

function retrieveCoachesResult($result){
    while($row = mysql_fetch_array($result,MYSQL_ASSOC)){ ?>
        <div class="hover-box" id="hover-box" onclick="location.href='coach-profile.php?id=<?php echo $row['id'];?>';">
                        <div class="box">
                        <hr>
                        <p class="btn btn-success pull-right">4.3</p>
                        <address>
                            <div class="name"><a href="coach-profile.php?id=<?php echo $row['id'];?>"><?php echo $row['name'];?></a></div>
                            
                            <br><strong>Fees ></strong><?php echo $row['feespm'];?>
                            <a href="sportz/result.html"></a>
                            <br><strong>Sports > </strong><?php echo $row['select_sport'];?>
                            <br><strong>Address ></strong><?php echo $row['city'];?>
                            
                            
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

function retrieveVenuesResult($result){
    while($row = mysql_fetch_array($result,MYSQL_ASSOC)){ ?>
        <div class="hover-box" id="hover-box" onclick="location.href='venue-profile.php?id=<?php echo $row['id'];?>';">
                        <div class="box">
                        <hr>
                        <p class="btn btn-success pull-right">4.3</p>
                        <address>
                            <div class="name"><a href="venue-profile.php?id=<?php echo $row['id'];?>"><?php echo $row['name'];?></a></div>
                            
                            
                            <a href="sportz/result.html"></a>
                            <br><strong>Sports > </strong><?php echo $row['select_sport'];?>
                            <br><strong>Address ></strong><?php echo $row['city'];?>
                            
                            <br><strong>Fees ></strong><?php echo $row['feespm'];?>
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