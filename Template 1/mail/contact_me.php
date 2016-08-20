<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: Personal Website'; 
    $to = 'mzack5020@gmail.com'; 
    $subject = 'Message from Contact Form';
			
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
				
    if ($_POST['submit']) {				 
        if (mail ($to, $subject, $body, $from)) { 
             echo '<script type="text/javascript">',
             'onSuccess();',
             '</script>'
        ;
	} else { 
	    echo '<script type="text/javascript">',
         'onError();',
         '</script>'
        ;
	} 
    } else if ($_POST['submit'] && $human != '4') {
	echo '<p>You answered the anti-spam question incorrectly!</p>';
    }
?>