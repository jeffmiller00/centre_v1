<?php
$mailto = "scheduling@thecentrehall.com,waverly@truevalue.net,mbeltd@aol.com,jeffmiller00@gmail.com";
$DEFAULT_EXIT_PAGE = "thankyou.php";
	// En: exit page.
$subject = "TheCentreHall.com: New Booking";

// End  Necessary Variables section
/******************************************************************************/

$headersep = (!isset( $uself ) || ($uself == 0)) ? "\r\n" : "\n" ;
$headers  = "From: \"TheCentreHall.com\" <No-reply@TheCentreHall.com>";
$http_referrer = getenv( "HTTP_REFERER" );
$body = "" ;

// This is to get rid of the submit
//array_pop($_POST);

foreach($_POST as $key => $data)
	$body .= $key.": ".$data."\n";

/*

if (empty($name) || empty($email) ) {
   header( "Location: $errorurl" );
   exit ;
}
if ( ereg( "[\r\n]", $name ) || ereg( "[\r\n]", $email ) ) {
	header( "Location: $errorurl" );
	exit ;
}

*/
if (get_magic_quotes_gpc()) {
	$body = stripslashes( $body );
}

$messageproper =
	"This message was sent from:\n" .
	"$http_referrer\n\n" .
	"------------------------- Needs Form -------------------------\n\n" .
	$body .
	"\n\n------------------------------------------------------------\n" ;

//echo $messageproper;

mail($mailto, $subject, $messageproper, $headers);
	// En : Send mail

if(! $exit_page)
	$exit_page = $DEFAULT_EXIT_PAGE;

Header("Location: ".$exit_page);
	// Exit -> $exit_page
?> 