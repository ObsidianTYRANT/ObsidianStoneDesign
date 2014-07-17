<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: Obsidian Stone Design'; 
    $to = 'HeroOfHyrule07@hotmail.com'; 
    $subject = 'Obsidian Stone Design Message';
    $human = $_POST['human'];
			
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
				
    if ($_POST['submit'] && $human == '5') {				 
        if (mail ($to, $subject, $body, $from)) { 
	    echo '<p>Thank You! Your message has been sent.</p>';
	} else { 
	    echo '<p>An error has occured, please try again.</p>'; 
	} 
    } else if ($_POST['submit'] && $human != '4') {
	echo '<p>You answered the anti-spam question incorrectly!</p>';
    }
?>