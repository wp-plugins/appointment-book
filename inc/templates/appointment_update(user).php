<?php 
/** 
* @author     Jack Mason 
* @website    volunteer @ http://www.osipage.com , web access application and bookmarking tool.   
* @copyright free script 
* @created    2013 
* @Language  PHP 
* This script is free and can  be used anywhere, no attribution required 
*/ 

//require_once (dirname(dirname(dirname(dirname(dirname(dirname((__FILE__))))))).'/wp-config.php');

global $wpdb,$current_user;
$table=$wpdb->prefix.'Appointments';

$id=$_REQUEST['txtid'];

$userid=$_REQUEST['userid'];
$username = $wpdb->get_var("SELECT user_login FROM {$wpdb->users} WHERE ID = '{$userid}'");

get_currentuserinfo();
$user=$current_user->user_login;

$admin_email = get_option('email_address');

$res=$wpdb->get_results("SELECT * from $table WHERE appointment_id='".$id."'");

foreach($res as $val){

  $a=$val->email_id;
}

$path = $this->options['upload_image'];
$img = "<img src=".$path.">";

$url=site_url();
/* 
Change your message body in the given $subjectPara variables.  
$subjectPara1 means 'first paragraph in message body', $subjectPara2 means'first paragraph in message body', 
if you don't want more than 1 para, just put NULL in unused $subjectPara variables. 
*/ 

$subtitle="Hi Admin,";
$subjectPara1 = 'Appointment successfully updated by <strong>'.$username.'</strong>.'; 
$subjectPara2 = 'Thank you'; 

$message = '<!DOCTYPE HTML>'. 
'<head>'. 
'<meta http-equiv="content-type" content="text/html">'. 
'<title>Update Notification</title>'. 
'</head>'. 
'<body style="width:100%;">'. 
'<div id="header" style="width: 60%;height: 60px;margin: 0 auto;padding: 10px;color: #fff;text-align: center;background-color: #E0E0E0;font-family: Open Sans,Arial,sans-serif;">'.$img.'
</div>'.

'<div id="outer" style="width: 78%;margin: 0 auto;margin-top: 10px;">'.  
   '<div id="inner" style="width: 78%;margin: 0 auto;background-color: #fff;font-family: Open Sans,Arial,sans-serif;font-size: 13px;font-weight: normal;line-height: 1.4em;color: #444;margin-top: 10px;">'. 
       '<p>'.$subtitle.'</p>'.
       '<p>'.$subjectPara1.'</p>'. 
       '<p>'.$subjectPara2.'</p>'. 
   '</div>'.   
'</div>'. 

'<div id="footer" style="width: 60%;height: 40px;margin: 0 auto;text-align: center;padding: 10px;font-family: Verdena;background-color: #E2E2E2;">'. 
   'All rights reserved @ mysite.html 2014'. 
'</div>'. 
'</body>'; 

/*EMAIL TEMPLATE ENDS*/ 


$to      = $admin_email;             // give to email address 
$subject = 'Updation notification';  //change subject of email  

// mandatory headers for email message, change if you need something different in your setting. 
$headers  = "From: " . $a . "\r\n"; 
$headers .= "Reply-To: ". $a . "\r\n"; 
$headers .= "MIME-Version: 1.0\r\n"; 
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n"; 


//die($message);
// Remember, mail function may not work in PHP localhost setup but the email template can be used anywhere like (PHPmailer, swiftmailer, PHPMail classes etc.) 
// Sending mail 
wp_mail($to, $subject, $message, $headers);
?>