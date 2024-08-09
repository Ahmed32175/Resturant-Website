<!DOCTYPE html>
<html lang ="en-US">
	<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles.css">
<title>Contact</title>
</head>
<body>
	
<div id="container">


<!-- navigation bar -->
	<div class="header">
		<a  href="index.html" target="_self">Home</a>
		<a  href="menu.html" target="_self">Menu</a>
		<a  href="about.html" target="_self">About</a>
		<a class ="active" href="contact.php" target ="_self">Contact</a>
	
	</div>
<!--main content -->
	<div id="content">
		<div class="back_img">
			<div class="back">
			<h1 class="titles">Send Us A Message!</h1>
			<form action="/formhandler/contactform.php" method ="post" >
				<label for="fname">First Name</label> 
				<input type="text" id="fname" name="firstname" placeholder="your first name...">
				<p><?php echo $firstnameErr;?></p>

				<label for="lname">Last Name</label> 
				<input type="text" id="lname" name="lastname" placeholder="your last name...">
				<p><?php echo $lastnameErr;?></p>

				<label for="email">Email</label>
				<input type="text" id="email" name="emailadd" placeholder="your email address...">
				<p><?php echo $emailaddErr;?></p>

				<label for="phnumb">Phone Number</label>
				<input type="text" id="phnumb" name="number" placeholder="your phone number...">

				<label for="subject">Subject</label>
    			<textarea id="subject" name="subject" placeholder="Write something..." style="height:100px"></textarea>
    			<p><?php echo $subjectErr;?></p>

    			<input type="submit" value="submit">

 			</form>
 			</div>	
		</div>
	</div>

<!--footer -->
	<div id="bottom">
		<div id="footer">
			<div class="sect-footer">
				<h1>HOURS:</h1><p><pre>
Monday.....11:00 AM to 8:00 PM
Tuesday.....CLOSED
Wednesday.....11:00 AM to 8:00 PM
Thursday.....11:00 AM to 8:00 PM
Friday.....11:00 AM to 8:00 PM
Saturday.....11:00 AM to 8:00 PM
Sunday.....11:00 AM to 8:00 PM 
		</pre></p></div>

	<div class="sect-footer">
			<h1>FIND US AT:</h1><p><pre>
Karam Restaurant
1473 State St
Schenectady NY
12309
Phone Number: (518)-557-2389 
		</pre></p></div>
	<div class="sect-footer">
		<h1></h1>
		<iframe class= "map-box" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14335.427165797602!2d-73.9325806986723!3d42.7913183753052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89de720defc3f00d%3A0x3d4dd40543d7d72!2sKaram%20Restaurant!5e0!3m2!1sen!2sus!4v1705032131319!5m2!1sen!2sus"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>			
			</div>

	<div class="sect-footer">
		<h1></h1>
		<img src="https://seeklogo.com/images/H/halal-logo-150ED752BD-seeklogo.com.png" alt="halal logo" width="175" height="175">			
			</div>
		</div>
	</div>
</div>
</body>
</html>
