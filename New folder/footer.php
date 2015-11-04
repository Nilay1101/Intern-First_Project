<br>
<footer>
    <div class="container-fluid"><br>
        <div class="row container-fluid">
            <?php $uri="https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];?>
            <script>
                $('#').click(function(){
                    javascript:var url = this.href + encodeURIComponent('<?php echo $uri; ?>');
                    window.open(url);
                    return false;
                });
            </script>
                
            <div class="col-md-3">

            </div>
            <div class="col-md-6">
                <div class="col-md-3">
                    <a id="" href="https://www.facebook.com/sharer/sharer.php?u="  class="btn btn-block btn-social btn-facebook fa fa-facebook fa-2x">
                </a>
                </div>
                <div class="col-md-3">
                    <a id="" href="https://twitter.com/share?url=" class="btn btn-block btn-social btn-twitter fa fa-align-center fa-twitter fa-2x">
                </a>
                </div>
                <div class="col-md-3">
                    <a id="" href="https://plus.google.com/share?url=" class="btn btn-block btn-social btn-google fa fa-align-center fa-google-plus fa-2x">
                </a>
                </div>
                <div class="col-md-3">
                    <a id="" href="https://plus.google.com/share?url=" class="btn btn-block btn-social btn-google fa fa-youtube fa-align-center fa-2x">
                </a>
                </div>
            </div>
            <div class="col-md-3">

            </div>
        </div><br>
        <ul class="list-inline pull-right text-muted">
            <li><a href="#" >About Us</a></li>
            <li><a href="#">Site Map</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Terms & Conditions</a></li>
            <li><a href="academy-profile.php" >Academy</a></li>
            <li><a href="tournament.php" >Tournament</a></li>
            <li><a href="venue.php">Venue</a></li>
            <li><a href="user-profile.php" >User-Profile</a></li>
            <li><a href="teams.php" >Teams</a></li>
            
        </ul>
    </div>
</footer>