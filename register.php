<?php
	
	if (isset($_POST['submit'])) {
		echo $username = mysqli_real_escape_string($db, $_POST['username']);
	}

?>

<?php include "includes/header.php"; ?>

  <?php include "includes/nav.php"; ?>


	<div class="main-w3layouts wrapper bg-light">
		<h1 class="text-dark">SignUp Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="#" method="post">
					<input class="text" type="text" name="Username" placeholder="Username" required="false" autocomplete="off">
					<input class="text email" type="email" name="email" placeholder="Email" required="false" autocomplete="off">
					<input class="text" type="password" name="password" placeholder="Password" required="false" autocomplete="off">
					<input class="text w3lpass" type="password" name="confirm_password" placeholder="Confirm Password" required="false" autocomplete="off">
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" value="SIGNUP" name="submit">
				</form>
				<p>Already have an Account? <a href="#"> Login Now!</a></p>
				<?php echo "hello"; ?>
			</div>
		</div>
	
  </div>
	<!-- //main -->



<?php include "includes/footer.php"; ?>



