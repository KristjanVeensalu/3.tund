<?php

	//var_dump($_GET);
	
	//echo "<br>";

	//var_dump($_POST);
	$signupEmailerror = "*";
	
	if (isset ($_POST["signupEmail"])) {
		
	
		if (empty($_POST["signupEmail"])){
			$signupEmailerror="V2li on kohustuslik";
			
		}
	}
	
	
?>

<?php

	//var_dump($_GET);
	
	//echo "<br>";

	//var_dump($_POST);
	$signupPassworderror = "*";
	
	if (isset ($_POST["signupPassword"])) {
		
	
		if (empty($_POST["signupPassword"])){
			$signupPassworderror="V2li on kohustuslik";
			
		} else {
			
			if(strlen($_POST ["signupPassword"]) < 8 ){
				
				$signupPassworderror = "Parool peab olema v2hemalt 8 m2rki";
			}
		}
	}
	
	
?>








<!DOCTYPE html>
<html>
	<head>
		<title>Sisselogimine</title>
</head>
<body>

<h1>Logi Sisse</h1>
	
	<form method="POST">
		
		<input name="loginEmail" placeholder="E-mail" type="email">
		<br> <br>
		<input name="loginpassword" placeholder="Password" type="password">
		<br> <br>
		<input type="submit" value="Log in">
	</form>	
</body>
</html>

<html>
	<head>
		<title>Loo Kasutaja</title>
</head>
<body>

<h1>Loo kasutaja</h1>
	
	<form method="POST">
		
		<input name="signupEmail" placeholder="E-mail" type="email"> <?php   echo $signupEmailerror; ?>
		<br> <br>
		<input name="signupPassword" placeholder="Password" type="password"> <?php   echo $signupPassworderror; ?>
		<br> <br>
		<input type="submit" value="Loo kasutaja">
	</form>	
</body>
</html>