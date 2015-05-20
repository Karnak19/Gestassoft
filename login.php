<html>
	<?php
		include ('inc/configure.inc.php');
		include ('head.php');
	?>
	<body>
		<div id="log">
			<center><img src="img/logo.png">
			<form method="post" action="login.php">
				<input type="text" name="login" class="form-control" placeholder="Login" required />
				<input type="password" name="mdp" class="form-control" placeholder="Password" required />
				<button type="submit" class="btn btn-success" >
					<i class="icon-circle-arrow-right icon-large"></i>Connexion
				</button>
			</form>
			</center>
		</div>
	</body>
</html>