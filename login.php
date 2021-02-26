<?php include "includes/header.php"; ?>

	<?php 
		if (isset($_POST['login_btn'])) {
			$email = mysqli_real_escape_string($db, $_POST['email']);
			$password = mysqli_real_escape_string($db, $_POST['password']);

			$query = mysqli_query($db, "SELECT * FROM users WHERE email='$email' AND password='$password' ");
			
			if (mysqli_num_rows($query) == 1) {
				while($row = mysqli_fetch_assoc($query)){
					$user_id = $row['user_id'];
					$username = $row['username'];
				}

				$_SESSION['user_id'] = $user_id;
				$_SESSION['username'] = $username;

				header("Location: dashboard.php");
				exit();
			}

		}

	?>

  <?php include "includes/nav.php"; ?>


	<div class="main-w3layouts wrapper bg-light">
		<h1 class="text-dark">Login Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="login.php" method="post">
					<input class="text email" type="email" name="email" placeholder="Email" required="true" autocomplete="off">
					<input class="text" type="password" name="password" placeholder="Password" required="true" autocomplete="off">
					<input type="submit" value="Login" name="login_btn">
				</form>
				<p>Don't have an Account? <a href="./register.php"> Register Now!</a></p>
			</div>
		</div>
	
  </div>
	<!-- //main -->

<?php include "includes/footer.php"; ?>



