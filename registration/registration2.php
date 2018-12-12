<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>MBook</title>
                <link rel="icon" href="/images/logo_without_text.png" type="image/gif" sizes="16x16" />
		<link rel="stylesheet" type="text/css" media="screen" href="nss.css" />
		<style>
			#contact legend{	font-size:30px; font-weight:bold;
								font-style:oblique; font-variant:none;	}
			fieldset{	border:0px solid white; padding:30px;	}
			body{	padding: 20px; background-image: url("contact-background-image.png");	}
		</style>
	</head>
	<body>
	<img src="event_logo.png" alt="SoloLearn HTML" title="This is SoloLern HTML picture" />
        
        
        <div>
          <a href="registration1.php">
          <button type="button" class="btn  btn-lg">Registration for Campus Ambassador ! Click Here</button>
          </a>
	</div> 
	
		<div id="container" >

<!-- text, password, datetime, datetime- local, date, month, time, week, number, email, url, search, tel, and color.-->

			<form name="contact" id="contact" action="registrationvldn2.php"method="post" >
				<fieldset>
					<legend>NSS Registration For Others</legend>
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
					<input type="text" id="college" name="college"  placeholder="College Name" required />
					</p>
					<p>
					<label for="collegeState">College State : </label>
					<input type="text" id="collegeState" name="CollegeState" placeholder="College State" required />
					</p>
					<p>
					<label for="refcode">Referral Code : </label>
					<input type="text" id="refcode" name="refcode"  placeholder="Referral Code" />
					</p>
					<p>
						<label for="pswd">Password : </label>
						<input type="password" id="pswd" name="pswd" minlength="7" maxlength="15" placeholder="Enter Your password" required />
					</p>
					<p>
						<label for="rePswd">Confirm password : </label>
						<input type="password" id="rePswd" name="rePswd" minlength="7" maxlength="15" placeholder="Enter Your password" required />
					</p>
				</fieldset>
				<hr style="border-width: 2px;" />
				<p style="text-align:center;">
					<input type="submit" value="SUBMIT" />&nbsp;&nbsp;&nbsp;<input type="reset" value="RESET" />
				</p>
			</form>
		</div>
	</body>
</html>