<!Doctype <!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
	<title>Elisav</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/mystyle.css">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>
<!-- Motto -->
	<!-- Nav Bar -->
	<nav>
		<div class="menu">
			<ul>
				<li><a href="#motto"><i class="fa fa-home"></i><span>Home</span></a></li>
				<li><a href="#about"><i class="fa fa-info-circle"></i><span>About</span></a></li>
				<li><a href="#projects"><i class="fa fa-cog"></i><span>Project</span></a></li>
				<li><a href="#media"><i class="fa fa-globe"></i><span>Media</span></a></li>
				<li><a href="#chat"><i class="fa fa-whatsapp"></i><span>Chat</span></a></li>
				<li><a href="#games"><i class="fa fa-gamepad"></i><span>Games</span></a></li>
			</ul>
		</div>
	</nav>
	<!-- Wallpaper -->
	<div class="motto" id="motto">
		<ul>
			<li>
				<a id="register" href="#"><i class="fa fa-book"></i>Register</a>
				<a id="sign-in" href="#"><i class="fa fa-user"></i>Sign In</a>
			</li>
		</ul>
		<img src="img/responsive.png" alt="Responsiveness" id="responsive-img" /><br/>
	</div>
	</div>

<!-- Auth Forms -->
	<!-- Register -->
	<div class="register">
		<form id="form-register">
			<div id="top">
				<img src="img/exit.png" alt="Exit" id="exit" />
				<h3>Create Account</h3>
			</div>
			<!-- <hr><br/> -->
			<br/>
			<label>Email:</label>
			<input type="email" name="email" placeholder="exapmle@gmail.com" required /><br/>
			<label>Username:</label>
			<input type="text" name="username" placeholder="Username" required /><br/>
			<label>Password:</label>
			<input type="password" name="password" placeholder="***********" required /><br/>
			<input type="submit" name="register-button" value="Register" id="register-button" /><br/>
		</form>
	</div>
	<div class="signIn"></div>

<!-- Quotes -->
	<div class="row-fluid quotes">
		<div class="col-lg-12">
			<h3>"Quote of the day" - Clark Kent</h3>
		</div>
	</div>

<!-- About -->
	<div class="row-fluid about" id="about">
		<div class="col-lg-6 avatar">
		</div>
		<div class="col-lg-6 bio">
			<h2>About</h2>
			<p id="bio-info">After a series of privatizations and reforms in the late 1990s and 2000s, government intervention in the Romanian economy is somewhat lower than in other European economies. In 2005, the government replaced Romania's progressive tax system with a flat tax of 16% for both personal income and corporate profit, among the lowest rates in the European Union. The economy is predominantly based on services, which account for 51% of GDP, even though industry and agriculture also have significant contributions, making up 36% and 13% of GDP, respectively. Additionally, 30% of the Romanian population was employed in 2006 in agriculture and primary production, one of the highest rates in Europe.</p>
			<p>Author - Bruce Wayne</p>
		</div>
	</div>

	<div class="row-fluid hobbies">
		<div class="col-lg-6 bio">
			<h2>Hobbies</h2>
			<p id="bio-info">After a series of privatizations and reforms in the late 1990s and 2000s, government intervention in the Romanian economy is somewhat lower than in other European economies. In 2005, the government replaced Romania's progressive tax system with a flat tax of 16% for both personal income and corporate profit, among the lowest rates in the European Union. The economy is predominantly based on services, which account for 51% of GDP, even though industry and agriculture also have significant contributions, making up 36% and 13% of GDP, respectively. Additionally, 30% of the Romanian population was employed in 2006 in agriculture and primary production, one of the highest rates in Europe.</p>
			<p>Author - Bruce Wayne</p>
		</div>
		<div class="col-lg-6 hobbie">
		</div>
	</div>

<!-- Projects -->
	<div class="row-fluid projects" id="projects">
		<div class="col-lg-4 work1">
			<img class="icons" src="img/android.jpg" alt="Work1" />
			<p class="description">A wiki is not a carefully crafted site for casual visitors. Instead, it seeks to involve the visitor in an ongoing process of creation and collaboration that constantly changes the Web site landscape.collaboration that constantly changes the Web site landscape.</p>
		</div>
		<div class="col-lg-4 work2">
			<img class="icons" src="img/web.jpg" alt="Work1" />
			<p class="description">A wiki is not a carefully crafted site for casual visitors. Instead, it seeks to involve the visitor in an ongoing process of creation and collaboration that constantly changes the Web site landscape.collaboration that constantly changes the Web site landscape.</p>
		</div>
		<div class="col-lg-4 work3">
			<img class="icons" src="img/games.png" alt="Work1" />
			<p class="description">A wiki is not a carefully crafted site for casual visitors. Instead, it seeks to involve the visitor in an ongoing process of creation and collaboration that constantly changes the Web site landscape.collaboration that constantly changes the Web site landscape.</p>
		</div>
	</div>

<!-- Footer -->
	<footer id="media">
		<div class="row-fluid media">
			<div class="col-lg-6 social-media">
				<ul>
					<li><a href="#"><i id="facebook" class="fa fa-facebook-square"></i></a></li>
					<li><a href="#"><i id="twitter" class="fa fa-twitter-square"></i></a></li>
					<li><a href="#"><i id="google" class="fa fa-google-plus-square"></i></a></li>
					<li><a href="#"><i id="github" class="fa fa-github"></i></a></li>
					<li><a href="#"><i id="mail" class="fa fa-envelope"></i></a></li>
				</ul>
			</div>
			<div class="col-lg-6 copyright">
				<p>&copy; 2016. All rights reserved.</p>
			</div>			
		</div>
		<div class="row contact-form">
			<div class="col-lg-6 contact">
				<ol class="breadcrumb">
				  	<li><a href="index.php">Home</a></li>
				  	<li class="active">Contact</li>
				</ol>	
				<form action="php/email/email.php" method="POST">
					<label for="email">Email:</label>
	  				<input type="email" name="email" id="email" placeholder="your_email@yahoo.com" required><br>
	  				<label for="subject">Subject:</label>
	  				<input type="text" name="subject" id="subject" placeholder="Type the subject" required><br>
	  				<label for="message">Message:</label>
	  				<textarea name="message" id="message" placeholder="Type your message here..." required></textarea><br>
	  				<input class="btn btn-primary" type="submit" value="Send" id="send">
				</form>
			</div>
			<div class="col-lg-6 googleMap">
				<ol class="breadcrumb">
				  	<li><a href="index.php">Home</a></li>
				  	<li class="active">Your Location</li>
				</ol>
				<div id="map"></div>
				<p id="coord"></p>
			</div>
		</div>
	</footer>
<script src="js/map.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/auth.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>
