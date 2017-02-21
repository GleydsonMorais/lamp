<?php require("head.php"); ?>
<?php require(__DIR__ ."/utils/facebook_login.php"); ?>

	<div class="container">
		<div class="row">
			<div class="col-md-6">
	
				<form class="form-signin" id="formCadastro" name="formCadastro" action="DAO/validaCadastro.php" method="post">
	
					<h2 class="form-signin-heading">Registrar</h2>
	
					<label for="inputNameUser" class="sr-only">Name</label>
					<input type="text" id="inputNameUser" name="inputNameUser" class="form-control" placeholder="Name" required autofocus>
	
					<label for="inputEmailUser" class="sr-only">Email address</label>
					<input type="email" id="inputEmailUser" name="inputEmailUser" class="form-control" placeholder="Email address" required autofocus>
	
					<label for="inputPasswordUser" class="sr-only">Password</label>
					<input type="password" id="inputPasswordUser" name="inputPasswordUser" class="form-control" placeholder="Password" required>
	
					<button class="btn btn-lg btn-primary btn-block" type="submit">Registrar</button>
				</form>
			</div> <!-- LOGIN -->
	
			<div class="col-md-6">
	
				<form class="form-signin" id="formLogin" name="formLogin" action="DAO/validaLogin.php" method="post">
	
					<h2 class="form-signin-heading">Login</h2>
	
					<label for="inputEmailUser" class="sr-only">Email address</label>
					<input type="email" id="inputEmailUser" name="inputEmailUser" class="form-control" placeholder="Email address" required autofocus>
	
					<label for="inputPasswordUser" class="sr-only">Password</label>
					<input type="password" id="inputPasswordUser" name="inputPasswordUser" class="form-control" placeholder="Password" required>
	
					<div class="checkbox">
						
						<label>
							<input type="checkbox" value="remember-me"> Remember me
						</label>
					</div>
	
					<button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
				</form>
			</div> <!-- LOGIN -->
			<div class="col-md-5 col-sm-4 col-xs-3">
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6" style="margin-top: 50px;">
				<a href="<? echo $loginUrl?>"><div id="facebook_button"></div></a>
			</div>
		</div>
	</div> <!-- /container -->

<?php require("footer.php"); ?>