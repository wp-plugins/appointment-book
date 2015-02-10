<?php 
/** 
* @author     Jack Mason 
* @website    volunteer @ http://www.osipage.com , web access application and bookmarking tool.   
* @copyright free script 
* @created    2013 
* @Language  PHP 
* This script is free and can  be used anywhere, no attribution required 
*/ 

/* 
Change your message body in the given $subjectPara variables.  
$subjectPara1 means 'first paragraph in message body', $subjectPara2 means'first paragraph in message body', 
if you don't want more than 1 para, just put NULL in unused $subjectPara variables. 
*/ 

$subtitle="Hi User,";
$subjectPara1 = 'Appointment successfully approved by admin!'; 
$subjectPara2 = 'Please click here to show approved <a href="#">Appointment</a>.'; 
$subjectPara3 = 'Thank you'; 
$subjectPara4 = NULL; 
$subjectPara5 = NULL; 

$message = '<!DOCTYPE HTML>'. 
'<head>'. 
'<meta http-equiv="content-type" content="text/html">'. 
'<title>Email notification</title>'. 
'</head>'. 
'<body style="width:100%;">'. 
'<div id="header" style="width: 60%;height: 60px;margin: 0 auto;padding: 10px;color: #fff;text-align: center;background-color: #E0E0E0;font-family: Open Sans,Arial,sans-serif;">'. 
   '<img height="65" width="150" style="border-width:0;te" src="'.$imgSrc.'" alt="'.$imgDesc.'" title="'.$imgTitle.'">'. 
'</div>'. 

'<div id="outer" style="width: 78%;margin: 0 auto;margin-top: 10px;">'.  
   '<div id="inner" style="width: 78%;margin: 0 auto;background-color: #fff;font-family: Open Sans,Arial,sans-serif;font-size: 13px;font-weight: normal;line-height: 1.4em;color: #444;margin-top: 10px;">'. 
       '<p>'.$subtitle.'</p>'.
       '<p>'.$subjectPara1.'</p>'. 
       '<p>'.$subjectPara2.'</p>'. 
       '<p>'.$subjectPara3.'</p>'. 
       '<p>'.$subjectPara4.'</p>'. 
       '<p>'.$subjectPara5.'</p>'. 
   '</div>'.   
'</div>'. 

'<div id="footer" style="width: 60%;height: 40px;margin: 0 auto;text-align: center;padding: 10px;font-family: Verdena;background-color: #E2E2E2;">'. 
   'All rights reserved @ mysite.html 2014'. 
'</div>'. 
'</body>'; 


//print_r($message);


/*EMAIL TEMPLATE ENDS*/ 


$to      = 'me@example.com';             // give to email address 
$subject = 'Email template sample PHP';  //change subject of email 
$from    = '';                           // give from email address 

// mandatory headers for email message, change if you need something different in your setting. 
$headers  = "From: " . $from . "\r\n"; 
$headers .= "Reply-To: ". $from . "\r\n"; 
$headers .= "CC: test@example.com\r\n"; 
$headers .= "MIME-Version: 1.0\r\n"; 
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n"; 


// Remember, mail function may not work in PHP localhost setup but the email template can be used anywhere like (PHPmailer, swiftmailer, PHPMail classes etc.) 
// Sending mail 
?>