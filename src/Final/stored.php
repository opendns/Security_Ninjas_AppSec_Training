<!DOCTYPE HTML>

<html>
	<head>
		<title>A3 : Stored Cross-Site Scripting (XSS)</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
		<script type="text/javascript">

		function validateForm() {

		    var name = document.forms["inputform"]["name"].value;
		    var uname = document.forms["inputform"]["uname"].value;
		 	var upass = document.forms["inputform"]["password"].value;
		 
		    if (!(/[a-zA-Z0-9]/.test(name))) {
		        alert("Only alphanumeric characters allowed in the Name");
		        return false;
		    }
		   
		    if (!(/[a-zA-Z0-9]/.test(uname))) {
		        alert("Only alphanumeric characters allowed in the User Name");
		        return false;
		    }
		  	
		  	if(upass == '')
		  	{
		  		alert("Password can't be empty");
		        return false;
		  	}

		    return true;
		}
		</script>
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
					
						<h5>A3 : Stored Cross-Site Scripting (XSS)</h5>
					
					<div class="container">
						<form name="inputform" action="store_users.php" onsubmit="return validateForm();" method="post">
							Name: <input type="text" name="name"><br>
							Username: <input type="text" name="uname"><br>
							Password: <input type="password" name="password"><br>
							<input type="submit" value="Submit">

						</form>					
					</div>
					
				</article>
			</div>

		
		
			<div class="wrapper style4">
				<article id="contact" class="container small">
					<header>
				
						<p>Login credentials for you -  
							&nbsp;
							username: user1
							&nbsp;
							password: 145_Bluxome
						</p><p><br>
							There is another user. You have to steal his personal information but for that you need to bypass authentication / login as him.</p>
					</header>
					<div>
						<div class="row">
							<div class="12u">
							<ul>
							<li>	Hint 1: Manipulate Domain Name to include OS Command </li>
							<li>	Solution: {domain name}; {OS command}. e.g. google.com; pwd</li>
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