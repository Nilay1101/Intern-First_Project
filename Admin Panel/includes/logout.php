<?php require'connect.php' ?>

<?php

	session_start();
	session_unset();
    session_destroy();
    session_write_close();

        echo '<script>window.location="../index.php";</script>';
		
		
?>
