<?php

$captcha_text="following finding";
$captcha_input= $_GET['captcha'];
$redirect_location=$_GET['redirect_to'];
$should_contain="opendns.com";

if($captcha_input!=$captcha_text){
	echo "Wrong CAPTCHA. Try Again.";
}

elseif(strpos($redirect_location,$should_contain) !== false){
	header("Location: http://".$redirect_location);
}


else{
	header("Location: http://opendns.com/");
}

?>