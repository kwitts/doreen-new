<?php 
    if(isset($_POST['submit'])) {
     
        // check reCAPTCHA information
        require_once('recaptchalib.php');
         
        $privatekey = "6Lf77-4SAAAAALvigfwBhfuCxjh6FidROUrqEZhM";
        $resp = recaptcha_check_answer ($privatekey,
                                    $_SERVER["REMOTE_ADDR"],
                                    $_POST["recaptcha_challenge_field"],
                                    $_POST["recaptcha_response_field"]);
         
        // if CAPTCHA is correctly entered!                        
        if ($resp->is_valid) {                        
           // $to = "doreen@salondoreen.com";
            $to = "doreen@curlqueen.net";
            $subject = "curlqueen.net Contact (from new form)";
             
            // data the visitor provided
            $name_field = filter_var($_POST['name'], FILTER_SANITIZE_STRING);  
            $email_field = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
            $message_field = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

            //constructing the message        
            $body = " From: $name_field\n\n Email: $email_field\n\n Message: $message_field";
             
            // ...and away we go!
            mail($to, $subject, $body);
             
            // redirect to confirmation
            print "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";
        } else {
            // handle the CAPTCHA being entered incorrectly
            print "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";
        }
    } else { 
        print "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";
    } 
?>