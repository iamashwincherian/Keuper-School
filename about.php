<?php include "includes/header.php" ?>

<?php include "includes/nav.php" ?>

<div class="nav-space"></div>

<section class="section-about">
    <div class="about">
        <div class="about-heading">
            <h1>About Us</h1>
            <p class="link">Home   <span>></span>   School   <span>></span>   About Us</p>
        </div>
    </div>
    <div class="about-body">
        <div class="about-box">
            <div class="box box-left">
                <p class="box-title box-title-dark">Write to Us</p>
                <form action="" class="about-form" method="POST">
                    <input type="text" placeholder="Name" class="inputs" name="name">
                    <input type="email" placeholder="Email" class="inputs" name="email">
                    <textarea name="message" class="inputs" id="message" cols="30" rows="8" placeholder="Message"></textarea>
                    <button type="submit" name="submit" class="inputs send-button">Send</button>
                </form>

<?php
    if(isset($_POST['email'])) {
    
        // EDIT THE 2 LINES BELOW AS REQUIRED
        $email_to = "enquiry@keuperedu.com";
        $email_subject = "Enquery Email";
    
        function died($error) {
            // your error code can go here
            echo "We are very sorry, but there were error(s) found with the form you submitted. ";
            echo "These errors appear below.<br /><br />";
            echo $error."<br /><br />";
            echo "Please go back and fix these errors.<br /><br />";
            die();
        }
    
    
        // validation expected data exists
        if(!isset($_POST['name']) ||
            !isset($_POST['email']) ||
            !isset($_POST['message'])) {
            died('We are sorry, but there appears to be a problem with the form you submitted.');       
        }
    
        
    
        $name = $_POST['name']; // required
        $email_from = $_POST['email']; // required
        $message = $_POST['message']; // required
    
        $error_message = "";
        $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    
        if(!preg_match($email_exp,$email_from)) {
            $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
        }
        
            $string_exp = "/^[A-Za-z0-9 .'-]+$/";
        
        if(!preg_match($string_exp,$name)) {
            $error_message .= 'The First Name you entered does not appear to be valid.<br />';
        }
        
        if(strlen($message) < 2) {
            $error_message .= 'The Comments you entered do not appear to be valid.<br />';
        }
        
        if(strlen($error_message) > 0) {
            died($error_message);
        }
    
        $email_message = "Enquiry Details : \n\n";
    
        
        function clean_string($string) {
            $bad = array("content-type","bcc:","to:","cc:","href");
            return str_replace($bad,"",$string);
        }

        $email_message .= "Name: ".clean_string($name)."\n";
        $email_message .= "Email: ".clean_string($email_from)."\n";
        $email_message .= "Message: ".clean_string($message)."\n";
    
        // create email headers
        $headers = 'From: '.$email_from."\r\n".
        'Reply-To: '.$email_from."\r\n" .
        'X-Mailer: PHP/' . phpversion();
        @mail($email_to, $email_subject, $email_message, $headers);

        echo "<script>
        alert('Message has been successfully sent!');
        </script>";
} 
?>

<!-- 
                <form method="post" action="about.php">
                    <textarea name="message"></textarea>
                    <input type="submit" name="submit">
                </form> -->

<?php
    // if(isset($_POST["message"])) {
    //     $message = $_POST["message"];
    //     mail("iamashwincherian@gmail.com", "Form to email message", $_POST["message"], "From: ashwincherianjoseph@gmail.com");
    // }
?>

            </div>
            <div class="box box-right">
                <div class="box-right-contents">
                    <p class="box-title box-title-light">Contact Us</p>  
                    <p class="contact-phone contact-items contact-address">
                        <i class="fas fa-phone contact-icon">
                        </i> +91 9686994492<br>+91 8884644492<br>+91 7090444492
                    </p>
                    <p class="contact-email contact-items"><span><i class="fas fa-paper-plane contact-icon"></i></span> keuperschool@gmail.com</p>    
                    <div class="contact-item contact-address">
                        <i class="fas fa-map-marker-alt contact-icon"></i>
                        <div class="contact-items contact-item-address"> #44, Maruthi Meadows, Opp. SABC Bible College, Hennur - Bagalur Main Road, Kothanur Post, Bengaluru, Karnataka 560077</div>
                    </div>    
                </div>                                       
            </div>
        </div>
    </div>

    <!-- ------------- footer ------------- -->

    <div class="footer-grad">
        <div class="footer-grad-content footer-grad-contact">
            <p class="footer-grad-content-title">Contact</p>
            <!-- <p class="footer-grad-subcontent contact-content">Phone : +91 9876543210</p> -->
            <p class="footer-subcontent contact-content phone">Phone : +91 9686994492<br>               +91 8884644492<br>               +91 7090444492</p>
            <p class="footer-subcontent contact-content phone-res">Phone : <br>+91 9686994492<br>+91 8884644492<br>+91 7090444492</p>
            <p class="footer-grad-subcontent contact-content">keuperschool@gmail.com</p>
            <p class="footer-grad-subcontent contact-content address">#44, Maruthi Meadows, Opp. SABC Bible College, Hennur - Bagalur Main Road, Kothanur Post, Bengaluru, Karnataka 560077</p>
        </div>
        <div class="footer-grad-content footer-grad-center">
            <p class="footer-grad-content-title footer-grad-content-title-center">KEUPER SCHOOL</p>
            <p class="footer-grad-content-center-copy footer-grad-subcontent">Copyright &copy 2019, All rights reserved to Keuper</p>
            <p class="footer-grad-content-center-creator footer-grad-subcontent">Created <i class="fas fa-code code-icon"></i> by Ashwin Cherian Joseph</p>
        </div>
        <div class="footer-grad-content footer-grad-follow">
            <p class="footer-grad-content-title footer-grad-content-title-center-follow">Follow Us</p>
            <div class="footer-grad-contact-social">
                <a href="#"><i class="fab fa-facebook-f social-icon social-icon-facebook"></i></a>
                <a href="#"><i class="fab fa-youtube social-icon social-icon-youtube"></i></a>
            </div>
        </div>
    </div>
</section>
