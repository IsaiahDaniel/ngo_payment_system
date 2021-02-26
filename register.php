<?php include "includes/header.php"; ?>

	<?php
		
		if (isset($_POST['submit'])) {
			$username = mysqli_real_escape_string($db, $_POST['username']);
			$email = mysqli_real_escape_string($db, $_POST['email']);
			$password = mysqli_real_escape_string($db, $_POST['password']);
			$confirm_password = mysqli_real_escape_string($db, $_POST['confirm_password']);

			$query = "INSERT users(username, password, confirm_password, email) VALUES ('$username', '$password', '$confirm_password', '$email')";

			mysqli_query($db, $query);
			header("Location: login.php");
			exit();
		}

	?>

  <?php include "includes/nav.php"; ?>


	<div class="main-w3layouts wrapper bg-light">
		<h1 class="text-dark">SignUp Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="#" method="post">
					<input class="text" type="text" name="username" placeholder="Username" required="true" autocomplete="off">
					<input class="text email" type="email" name="email" placeholder="Email" required="true" autocomplete="off">
					<input class="text" type="password" name="password" placeholder="Password" required="true" autocomplete="off">
					<input class="text w3lpass" type="password" name="confirm_password" placeholder="Confirm Password" required="true" autocomplete="off">
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="true">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" value="SIGNUP" name="submit">
				</form>
				<p>Already have an Account? <a href="login.php"> Login Now!</a></p>
			</div>
		</div>
	
  </div>
	<!-- //main -->

<?php include "includes/footer.php"; ?>



