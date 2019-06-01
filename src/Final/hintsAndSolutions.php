<?php
// Array with names
$hintsAndSolutions = array(
	"a1h1" => "Manipulate Domain Name to inject an OS Command",
	"a1h2" => "Use a separator (;) to inject an OS command in the Domain Name",
	"a1s" => "{domain name}; {OS command}<br> e.g. &nbsp;  google.com; pwd",
	"a2h1" => "Login as user1 and see how Session Management is being done.",
	"a2h2" => "Look at the session cookie. Does it look predictable?",
	"a2s" => "sessionID cookie is a SHA1 hash of the username. Replace SHA1(user1) in the cookie by SHA1(user2) to authenticate as user2. <br />i.e.  sessionID=a1881c06eec96db9901c7bbfe41c42a3f08e9cb4",
	"a3rh1" => "Inject a script in the text box.",
	"a3rs" => "Enter any malicious JavaScript code. e.g., &lt;script&gt;window.location.href = &quot;http://opendns.com&quot;;&lt;/script&gt;",
	"a3sh1" => "Inject a script in the Name or Username field",
	"a3ss" => "Enter any malicious javascript code. e.g., &lt;script&gt;window.location.href = &quot;http://opendns.com&quot;;&lt;/script&gt;",
	"a4h1" => "Can you make out anything from how the document is named?",
	"a4h2" => "Decode the document name (ASCII-HEX)",
	"a4s" => "636f6e666964656e7469616c.pdf <br>i.e. ASCII-HEX of \"confidential\"",
	"a5h1" => "Access to files in other directories is not prohibited",
	"a5h2" => "Can you get to sensitive files like /etc/passwd?",
	"a5s" => "Fetch sensitive files by changing the fname parameter e.g., fname=../../../../../etc/passwd",
	"a6h1" => "Look at the Source code",
	"a6s" => "oneteamonedream",
	"a7h1" => "Look at the div with id 'admin_view'",
	"a7s" => "Remove the style 'display:none' in the div with id 'admin_view' to make the hidden div visible. As this function lacks server side access control, you would be able to exploit this functionality.",
	"a8h1" => "Can you formulate the parameters needed to complete the query?",
	"a8s" => "'update_email.php?new_email=user1@gmail.com&user=user1&Update=Save' is the relative URL and send it as a phishing link to user1 or embed it in a page and make user1 go to that page. If user1 is authenticated, the action would be executed (vice versa for user2).",
	"a9h1" => "Look at all the libraries used on this page. Search the web to explore if they have any vulnerabilities. ",
	"a9h2" => "This page uses jquery-1.6.1 <br><a href=\"http://www.cvedetails.com/cve/CVE-2011-4969/\" target=\"_blank\" >CVE details</a>
							<br><a href=\"http://blog.mindedsecurity.com/2011/07/jquery-is-sink.html\" target=\"_blank\">Exploit details</a>",
	"a9s" => "Append \"#&lt;img src=x onerror=alert(1)&gt;\" at the end of the URL. Note that this proof of concept attack might not pop up an alert if your browser has anti-XSS protections. You might need to refresh the page or wait for a few moments for the pop up to actually show.",
	"a10h1" => "Look at all parameters being sent to the server",
	"a10h2" => "Edit the parameter 'redirect_to' to include a malicious URL. Note that there is validation done on the redirect location on the back end but that is imperfect.",
	"a10s" => "Edit redirect_to to opendns.com.{bad URL} <br> e.g. opendns.com.internetbadguys.com"
);

// get the q parameter from URL
$q = $_REQUEST["q"];

echo $hintsAndSolutions[$q]

?>