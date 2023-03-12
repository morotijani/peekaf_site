<?php 
    include ("../../helpers/helpers.php");

    if ($_POST) {
        // code...
        $to      = 'info@peekaf.com';
        $subject = 'CONTACT.';
        $body = '
            <html>
            <head>
               <title>Contact</title>
            </head>
            <body>
               <p>
                    <center>
                        <h3>Name</h3>
                        <b>'.sanitize($_POST['name']).'</b>
                        <br>
                        <h3>Email</h3>
                        <b>'.sanitize($_POST['email']).'</b>
                        <br>
                        <h3>Subject</h3>
                        <b>'.sanitize($_POST['subject']).'</b>
                        <br>
                        <h3>Message</h3>
                        <b>'.sanitize($_POST['message']).'</b>
                    </center>
                </p>
           </body>
           </html>
        ';
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From:" . sanitize($_POST['email']);
            
        if (mail($to, $subject, $body, $headers)) {
            echo 1;
            // echo js_alert('Message Sent.');
            // redirect('contact');
        } else {
            echo 2;
            // echo js_alert('Mail not sent, please try again');
            // redirect('contact');
        }
    }