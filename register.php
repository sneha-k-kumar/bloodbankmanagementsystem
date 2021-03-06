<?php 
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Register | Blood Bank Management System </title>
		<?php include 'head.php'; ?>
		<link rel="stylesheet" href="scripts/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="scripts/ionicons/css/ionicons.min.css">
		<link rel="stylesheet" href="css/form.css">
        <style type="text/css">
            body{
                  width: 100%;
                  background: url(image/blood40.png);
                  background-position: center center;
                  background-repeat: no-repeat;
                  background-attachment: fixed;
                  background-size: cover;
                }
          </style>
	</head>

	<body>
		<section class="login first grey">
			<div class="container"><br><br><br>
				<div class="box-wrapper">				
					<div class="box box-border">
						<div class="box-body">
						        <a href="hregister.php">
								<div class="form-group text-right">
									<button class="btn btn-primary btn-block" name="submit" >Hospital Register</button>
								</div>
								</a>
								<a href="rregister.php">
								<div class="form-group text-right">
									<button class="btn btn-primary btn-block" name="submit" >Receiver Register</button>
								</div>
								</a>
								<div class="form-group text-center">
									<span class="text-muted">have an account?</span> <a href="login.php">login</a> Here..
								</div>
								<div class="form-group text-center">
								<span class="text-muted"></span> <a href="index.php">HOME</a> 
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>

		<script src="js/jquery.js"></script>
		<script src="scripts/bootstrap/bootstrap.min.js"></script>
		<br><br><br><br><br><br><br><br><br><br><br><br>
	<?php include 'footer.php'; ?>
	</body>
</html>
