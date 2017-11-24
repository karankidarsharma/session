<?php 
session_start();
if (!isset($_SESSION['count'])) {
  $_SESSION['count'] = 0;
} else {
  $_SESSION['count']++;
}

if($_SESSION['count'] > 1){

	header('location:home.php');
	$_SESSION['count'] = 0;
}


if(!isset($_SESSION['user'])){
	header('location:index.php');
}

if(isset($_GET['success']) && $_GET['success'] == 'true'){


	echo '<script language="javascript">';
echo 'alert("Please Logout to Continue")';
echo '</script>';

}


?>

<h2>Hello <?php echo $_SESSION["user"]; ?></h2>

<a href="index.php?success=logout">Logout</a>