<?php
	session_start()
	if(isset($_SESSION['rol'] === 'admin')) {
?>
<!--
Todo el código html
 -->
<?php
	} else {
		header('Location: index.php');
	}
?>