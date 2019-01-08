<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>National Social Summit</title>
                <link rel="icon" href="/images/logo_without_text.png" type="image/gif" sizes="16x16" />
		<link rel="stylesheet" type="text/css" media="screen" href="nss.css" />
		<style>
			#contact legend{	font-size:30px; font-weight:bold;	}
			fieldset{	border:0px solid white; padding:30px;	}
			body{	padding: 20px; background-image: url("contact-background-image.png");	}
		</style>
	</head>
	<body>
        
        <a href="http://nationalsocialsummit.org/index.html">
        <img alt="NSS Event Logo" src="event_logo.png" title="NSS Event Logo" width="270px" height="120px">
        </a>
	<br/><br/>
        
		<div id="container" >
                
<!-- text, password, datetime, datetime- local, date, month, time, week, number, email, url, search, tel, and color.-->

			<form name="contact" id="contact" action="registrationvldn1.php"method="post" >
                        
                        <div align="center" >
                          <a href="registration2.php">
                          <button type="button" class="round"><marquee>Click Here ! Registration For Delegates</marquee></button>
                          </a>
                        </div> 
                                <fieldset>
  					<p><h3 style="text-align:center">Register As Campus Ambassador</h3></p>
                                        <p>
						<label for="name">Full Name : </label>
						<input type="text" id="name" name="name" minlength="7" maxlength="20" placeholder="Enter Your Name" required />
					</p>
					<p>
						<label for="number">Contact Number : </label>
						<input type="tel" id="number" name="number" placeholder="Your Contact Number" minlength="10" maxlength="15" required />
					</p>
					<p>
						<label for="emailId">Email Id : </label>
						<input type="email" id="emailId" name="emailId" placeholder="Enter Your Email Id" required />
					</p>
					<p>
						<label for="dob">Date &nbsp;Of&nbsp; Birth : </label>
						<input type="date" id="dob" name="dob" required />
					</p>
					<p>
						<label for="gender">Gender : </label>
						<select name="gender" required>
						<option>- - Select - -</option><option>Male</option><option>Female</option>
						<option>Other</option><option>Prefer not to say</option></select>
					</p>
					<p>
						<label for="year">Year Of Graduation : </label>&nbsp;
						<select name="year" required>
                        <option value="none" >- - Select - -</option><option value="2019" >2019</option><option value="2020" >2020</option>
						<option value="2021" >2021</option><option value="2022" >2022</option><option value="2023" >2023</option>
                        </select>
					</p>
					<p>
					<label for="college">College Name : </label>
					<input type="text" id="college" name="college"  placeholder="college Name" required />
					</p>
					<p>
					<label for="collegeState">College State : </label>
					<input type="text" id="collegeState" name="collegeState" placeholder="college State" required />
					</p>
					<p>
						<label for="pswd">Password : </label>
						<input type="password" id="pswd" name="pswd" minlength="7" maxlength="15" placeholder="Enter Password" required />
					</p>
					<p>
						<label for="rePswd">Confirm Password : </label>
						<input type="password" id="rePswd" name="rePswd" minlength="7" maxlength="15" placeholder="Confirm Password" required />
					</p>
                                        
                                        <p><br/>
                                        <hr style="border-width: 2px;" /></p>
                                        <p>
                                        <button  type="submit">SUBMIT</button>
                                        </p>
                                </fieldset>
			</form>
		</div>
	</body>
</html>