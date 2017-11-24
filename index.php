<?php 



if(isset($_GET['success']) && $_GET['success'] == 'logout'){

    session_start();
	session_destroy();
}

if(isset($_GET['success']) && $_GET['success'] == 'loggedout'){

      echo '<script language="javascript">';
echo 'window.alert("A user was already logged in please login again to continue")';
echo '</script>';
session_start();
session_destroy();
}
?>


<html>
<head>
	<title>Sessions</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
input {

	max-width: 300px;
}


  </style>
</head>
<body>

<div class="container">
  <h2>User Login</h2>
  <form action="login.php" method="post">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>