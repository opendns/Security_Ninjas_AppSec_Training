<!DOCTYPE HTML>

<html>
	<head>
		<title>A2 : Broken Authentication and Session Management</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<script src="js/setup.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body>

		<!-- Nav -->
			<nav id="nav">
				<ul class="container">
					<img src="images/ninja.png" alt="" width="8.5%" height="8.5%" align="left" />
					<li><a href="a1.html">A1</a></li>
					<li><a href="a2.html">A2</a></li>
					<li><a href="a3.html">A3</a></li>
					<li><a href="a4.html">A4</a></li>
					<li><a href="a5.html">A5</a></li>
					<li><a href="a6.html">A6</a></li>
					<li><a href="a7.html">A7</a></li>
					<li><a href="a8.html">A8</a></li>
					<li><a href="a9.html">A9</a></li>
					<li><a href="a10.html">A10</a></li>
					<!-- <li><img src="images/opendns_logo.png" alt="" width="65.5%" height="65.5%" align="right" /> -->
				</ul>
			</nav>

		
			<div class="wrapper style2">
				<article id="work">
					<header>
						<h5>A2 : Broken Authentication and Session Management</h5>
					</header>
					<div class="container">
							<?php

								$uname = $_POST['uname'];
								$pass = $_POST['pwd'];
								
								//verify_credentials($uname,$pass);
								if(($uname=='user1')&&($pass=='145_Bluxome'))
								{	
									$hash1 = hash("sha1", "user1");
									echo '<script>document.cookie="sessionID='.$hash1.'";</script>';
									echo "Login successful as $uname!<br>";
									echo "<a href=user_details.php>View personal details</a>";
								}
								elseif(($uname=='user2')&&($pass=='xxww!'))
								{
									$hash2 = hash("sha1", "user2");
									echo '<script>document.cookie="sessionID='.$hash2.'";</script>';
									echo "Login successful as $uname!<br>";
									echo "<a href=user_details.php>View personal details</a>";
								}	
								else
								{	
									echo "Failed login<br>";
									echo "<a href=a2.html>Please Login</a>";

								}	

							?>

							</div>
						
					</div>
					
				</article>
			</div>

		<div class="wrapper style4">
				<article id="contact" class="container small">
					<header>
				
						<p>There is a flaw in the way this page handles authentication and sessions.</p>
					</header>
					<div>
						There is a login required to view personal information. <br>Login credentials for user1 : username - 'user1', password - '145_Bluxome' <br>
						There is another user with username 'user2'. You have to steal his personal information by exploiting the vulnerability on this page.<br><br>	
						
						<div class="row">
							<div class="12u">
							<ul>
								<li><H5 style="cursor: pointer" onclick="DisplayHintOrSolution('a2h1');"> Hint 1 </H5><p id="a2h1"></p></li>
								<li><H5 style="cursor: pointer" onclick="DisplayHintOrSolution('a2h2');"> Hint 2 </H5><p id="a2h2"></p></li>
								<li><H5 style="cursor: pointer" onclick="DisplayHintOrSolution('a2s');"> Solution </H5><p id="a2s"></p></li>
							</ul>
							</div>
						</div>
					</div>
					<footer>
						<ul id="copyright">
							<li>&copy; OpenDNS. All rights reserved.</li><li><a href="http://engineering.opendns.com/security/" target="_blank">OpenDNS Security</a></li>
						</ul>
					</footer>
				</article>
			</div>
	</body>
</html>

