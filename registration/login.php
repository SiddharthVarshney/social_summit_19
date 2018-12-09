<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script src="main.js"></script>
    <style>
			legend{	font-size:30px; font-weight:bold;
				font-style:oblique; font-variant:none;	
				}
			fieldset{ border:0px solid white; padding:20px;
				}
			body{	padding: 20px; background-image: url("contact-background-image.png");	}
		</style>
</head>
<body>
<img src="event_logo.png" alt="SoloLearn HTML" title="This is SoloLern HTML picture" />
<div id="container" >
    <form id="contact" name="loginform" action="loginValdn.php" method="post" >
        <fieldset>
            <legend>Login</legend>
            <p>
                <label for="userId">User ID</label>
                <input type="tel" name="userId" id="userId" placeholder="Mobile Number"/>
            </p>
            <p style="margin-bottom:15px;">
                <label for="pswd">Password</label>
                <input type="password" name="pswd" id="pswd" placeholder="Enter your passsword"/>
            </p>
			<hr style="border-width: 2px;" />
                <button  type="submit">Login<button/>
        </fieldset>
    </form>
</div>
</body>
</html>