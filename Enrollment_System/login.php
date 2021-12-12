<!--Note: bryan mag isip ka ng color combination na maganda if possible palitan mo yung background, tyaka 
yung sa header niya gawan mo check mo nalang sa  pics ng notes kung ano pa mga gagawin mo pre-->
<?php include('includes/registration.php')?>
<!doctype html>
<html lang="en">
<head>
	<title>Log in</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css\bootstrap.min.css">
	<script type="text/javascript" src="jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="js\bootstrap.bundle.min.js">
	
	<style type="text/css">
	body
	{
		background-image: url('images/background1.jpg');
		background-size: cover;
		background-attachment: fixed;
		background-repeat: no-repeat;
		font-family: Georgia, serif;
	}
	#login
	{
		width: 320px;
		height: auto;
		
		padding: 13px;
		border: 1px solid #000000;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%,-50%);

	}
	h1
	{
		
		font-size: 35px;
		color: #000000;
		font-weight:bold;
		
	}	
	label
	{
		font-size: 15px;
		font-weight: bold;
		
	}	
	#note
	{
		font-size: 12px;
		color: red;
	}
	</style>
	
	
</head>

<body>
	<div class="container-fluid" id="div1">
		<div class="row">
			   <nav class="fixed-top navbar navbar-expand-lg bg-dark  justify-content-center">
        <ul class="navbar-nav">
        <li class="nav-item"><a href="login.php" class="nav-link"> <img src="images/logo.png" style="width: 100px;height: 100px;">	</a></li>
      
        <li class="nav-item"><a href="login.php" class="nav-link"><h3 class="text-white">Dagupan City National Highschool</h3></a></li>
        </ul>
      </nav>
			<div class="container" id="login">
			
				
				<form method="POST">

  				<div class="form-group">
    			<center><label for="OR_number"><h5>Enter your OR number</h5></label></center>

    			<input type="text" class="form-control" name="OR_number" placeholder="OR number" autocomplete="off">
    			<div style="color: red;"><?php include('includes/errors.php')?></div>
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

  				<button class="btn btn-primary btn-block" name="login_student" type="submit">Log in</button>
  			<?php } ?>
  			<?php
				if (isset($_SESSION['error'])) {
					?>
					<p style="color: red;font-weight:bold;text-align: center;"><?= $_SESSION['error']?></p>
				<?php unset($_SESSION['error']); } ?>
				
				
			</form>
			</div>
		</div>
	</div>
	
</body>

</html>