<?php  
session_start();
$a = $_POST['email'];
$b = $_POST['pwd'];


if(isset($_SESSION['user']) && $_SESSION['user'] != $a){

	
	
header('location:home.php?success=true');
	
	
} else{


include('dbConnection.php');
if(!$con){
	die('Could Not Connect:' . mysql_error());
} 
$query = "SELECT * FROM user WHERE u_email='" .$a ."'";
$result=mysqli_query($con, $query);
while($row = mysqli_fetch_assoc($result))

{
 $dbp=$row['u_password'];
 }
  
if($dbp == $b){
    $_SESSION["user"] = $a;
	header('location:home.php');


}else{
	header('location:index.php');

}
}
?>

