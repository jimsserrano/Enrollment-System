<!doctype html>
<?php include('includes/registration.php');


?>


<html lang="en">
<head>
	<link rel="icon" href="images/logo.png">
	<title>Log in</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="js\bootstrap.bundle.min.js">
	   <script src="jquery/jquery.min.js"></script>
  <script src="js\bootstrap.bundle.min.js"></script>

<style type="text/css">
	body
	{
		background-image: url('images/background4.jpg');
		background-size: cover;
		background-attachment: fixed;
		background-repeat: no-repeat;
		font-family: Georgia, serif;
	}
	#login
	{	

		border: 1px solid black;
		width: 320px;
		height: auto;
		padding: 13px;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%,-50%);
		background-color:#6572A5;


	}
	h1
	{
		
		font-size: 35px;
		color: #000000;
		font-weight:bold;
		
	}	
	label
	{
		font-size: 18px;
		font-weight: bold;
		
	}


.login_btn:hover{
color: white;
background-color:#358C3F ;
}	
.input-error
{
	box-shadow:0 0 10px red;
}

</style>
	
	
</head>

<body>
	<div class="container-fluid" id="div1">
		<div class="row">
			   <nav class="fixed-top navbar navbar-expand-lg bg-dark  justify-content-center">
        <ul class="navbar-nav">
       
        <li class="nav-item"><a href="index.php" class="nav-link"><img src="images/new_logo.png" style="width: 920px;height: 100px;"></a></li>
        </ul>
      </nav>
      	<div class="container" id="login" >
				
				<center><p><h1>Log in</h1></p></center>
				
				<form method="post">
				<?php
				if (isset($_SESSION['error'])) {
					?>
					<p style="color: red;font-weight:bold;text-align: center;"><?= $_SESSION['error']?></p>
				<?php unset($_SESSION['error']); } ?>
				
  				<div class="form-group">
    			<label for="admin_username">Username</label>
    			<input type="text" class="form-control" id="admin_username" name="admin_username" placeholder="Username"  autocomplete="off">
                </div>
                <div class="form-group">
    			<label for="admin_password">Password</label>
    			<input type="password" class="form-control" id="admin_password" name="admin_password" placeholder="Password"  autocomplete="off">
                </div>
                <?php
                if (!isset($_SESSION['login_attempts'])) {
                	$_SESSION['login_attempts']=0;
                	
                	}
                if ($_SESSION['login_attempts']>2) {
            			  $_SESSION['locked']=time();
                		  echo "<p style='color:red;font-weight:bold;text-align:center;'>Login attempts exceeded please wait for 30 seconds, and reload the page</p>";
                }	
                else
                { ?>
                	<button class="btn btn-primary btn-success btn-block login_btn" type="submit" id="admin_login" name="admin_login">Log in</button>
                <?php }?>

			</form>
				<center><p class="form-message" style="color:red;"></p></center>
			</div>
      
		
		</div>
	</div>
	
</body>

</html>


