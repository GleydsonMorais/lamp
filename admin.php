<?php require("head.php"); ?>

	<div class="container">

		<form class="form-signin" id="formLogin" name="formLogin" action="DAO/validaLogin.php" method="post">

			<h2 class="form-signin-heading">Please sign in</h2>

			<label for="inputEmailAdmin" class="sr-only">Email address</label>
			<input type="email" id="inputEmailAdmin" name="inputEmailAdmin" class="form-control" placeholder="Email address" required autofocus>

			<label for="inputPasswordAdmin" class="sr-only">Password</label>
			<input type="password" id="inputPasswordAdmin" name="inputPasswordAdmin" class="form-control" placeholder="Password" required>

			<div class="checkbox">
				
				<label>
					<input type="checkbox" value="remember-me"> Remember me
				</label>
			</div>

			<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
		</form>
	</div> <!-- /container -->

<?php require("footer.php"); ?>