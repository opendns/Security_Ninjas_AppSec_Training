<!DOCTYPE HTML>

<html>
	<head>
		<title>A8 : Cross-Site Request Forgery (CSRF)</title>
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
		<script langauge="javascript">
	    function showForm1(){
	    	document.getElementById('form1').style.display="block";
	    	document.getElementById('form2').style.display="none";	
	    }

	    function showForm2(){
	    	document.getElementById('form2').style.display="block";
	    	document.getElementById('form1').style.display="none";	
	    }

		</script>
		<script type="text/javascript" src="logout.js"></script>
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
					
						<h5>A8 : Cross-Site Request Forgery (CSRF)</h5>
					
					<div class="container">
							<button onclick="logoff()">Log Off</button><br><br><br>

							<table>
							  <tr>
							    <th><b>User</b></th>
							    <th><b>Email</b></th>
							    <th></th>
							  </tr>
							  <tr>
							    <td>user1</td>
							    <td>
							    	<?php
									$file = fopen("user1.txt", "r") or die("Unable to open file!");
									echo fgets($file);
									fclose($myfile);
									?>
							    </td>
							    <td><form id="ctrl" name="ctrl">
							    <input type="button" id="ctrlbtn" name="update_u2"  value="Update" onclick="showForm1();"/> <br>
								</form>
								</td>
							    <td>
							    	<div id="form1" name="form1" style="display:none">
							    	<form id="frm1" name="frm1" action="update_email.php" method="GET">
							    	New Email <input type="text" name="new_email"/> <br>
							    	<input type="hidden" name="user" value="user1">
							  		<input type="submit" name="Update" value="Save"/> <br>
									</form>
									</div>
							    </td>
							  </tr>
							  <tr>
							    <td>user2</td>
							    <td>
							    	<?php
									$file = fopen("user2.txt", "r") or die("Unable to open file!");
									echo fgets($file);
									fclose($myfile);
									?>
							    </td>
							    <td><form id="ctrl" name="ctrl">
							    <input type="button" value="Update" onclick="showForm2();"/> <br>
								</form>
								</td>
							    <td>
							    	<div id="form2" name="form2" style="display:none">
							    	<form id="frm2" name="frm2" action="update_email.php" method="GET">
							    	New Email <input type="text" name="new_email"/> <br>
							    	<input type="hidden" name="user" value="user2">
							  		<input type="submit" name="Update" value="Save"/> <br>
									</form>
									</div>
							    </td>
							  </tr>
							</table>


					
					</div>
					
				</article>
			</div>
	
			<div class="wrapper style4">
				<article id="contact" class="container small">
					<header>
				
						<p>This page doesn't have any CSRF protection. e.g., unique random token, etc.</p>
					</header>
					<div>
						<div class="row">
							<div class="12u">
							<ul>
							<li><H5 style="cursor: pointer" onclick="toggleBlock(this, 'hint1');"> Hint 1 </H5>
							<DIV id="hint1" style="display:none">
							<P>
							Can you formulate the parameters needed to complete the query?
							</P>
							</DIV></li>

							<li><H5 style="cursor: pointer" onclick="toggleBlock(this, 'solution');"> Solution </H5>
							<DIV id="solution" style="display:none">
							<P>
							'update_email.php?new_email=user1@gmail.com&user=user1&Update=Save' is the relative URL and send it as a phishing link to user1 or embed it in a page and make user1 go to that page. If user1 is authenticated, the action would be executed (vice versa for user2). 
							</P>
							
							</DIV></li>
							
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