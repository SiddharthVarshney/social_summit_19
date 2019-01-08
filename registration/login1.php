<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link
              rel="icon"
              href="/images/logo_without_text.png"
              type="image/gif"
              sizes="16x16" />
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script src="main.js"></script>
    <style>
                        
			legend{	font-size:30px; font-weight:bold; font-variant:none;	
				}
			fieldset{ border:0px solid white; padding:20px;
				}
			body{	padding: 20px; background-image: url("contact-background-image.png");
                                }
                        .round{
	padding:5px;
        width:100%;
	font-size:22px;
	background-color:#f5de78;
	color:#0e666c;
	border-radius:0 0 20px 20px;
}
		</style>
</head>
<body>

        <a href="http://nationalsocialsummit.org/index.html">
        <img alt="NSS Event Logo" src="event_logo.png" title="NSS Event Logo" width="270px" height="120px">
        </a>


<div id="container" >
    <form id="contact" name="loginform" action="loginValdn1.php" method="post" >
    
     <div align="center" >
       <a href="login2.php">
          <button type="button" class="round"><marquee>Click Here ! Login For Delegates</marquee></button>
       </a>
     </div> 
     
        <fieldset>
            <p><h3 style="text-align:center">Login For Campus Ambassadors</h3></p>
            <p>
                <label for="userId">User ID</label>
                <input type="tel" name="userId" id="userId" placeholder="Mobile Number"/>
            </p>
            <p style="margin-bottom:15px;">
                <label for="pswd">Password</label>
                <input type="password" name="pswd" id="pswd" placeholder="Enter your passsword"/>
            </p>
			<hr style="border-width: 2px;" />
                <button  type="submit">Login</button>
        </fieldset>
    </form>
</div>
</body>
</html>