<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/main.css">
<title>myBox</title>
</head>
<body>
	<header class="logo">
		<h1>
			<span>myBox</span>
		</h1>
		<h5>MY DATA - MY RUELS</h5>
	</header>

	<!-- Login form -->
	<div class="outer">
		<div class="inner">
			<div class="group hgroup">
				<h4>Welcome to myBox Loign</h4>
				<h5>- Setup admin acc -</h5>
			</div>
			<form action="index.php" method="post">
				<div class="group input-form">
					<div class="input-icon user-icon"></div>
					<input type="text" placeholder="USER NAME" name="uname">
				</div>
				<div class="group input-form">
					<div class="input-icon pass-icon"></div>
					<input type="password" placeholder="PASS WORD" name="pword">
				</div>
				<div class="group input-form btn" id="btn">
					<input type="submit" value="CREATE" name="submit">
				</div>
			</form>
		</div>
	</div>
</body>
</html>