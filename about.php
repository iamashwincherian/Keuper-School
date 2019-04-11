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
            </div>
            <div class="box box-right">
                <div class="box-right-contents">
                    <p class="box-title box-title-light">Contact Us</p>  
                    <p class="contact-phone contact-items contact-res">
                        <i class="fas fa-phone contact-icon"></i>
                        +91 9686994492<br>+91 8884644492<br>+91 7090444492
                    </p>
                    <p class="contact-email contact-items contact-res">
                        <i class="fas fa-paper-plane contact-icon"></i>
                        info@keuperedu.com<br>chairman@keuperedu.com<br>principal@keuperedu.com
                    </p>    
                    <div class="contact-item contact-res">
                        <i class="fas fa-map-marker-alt contact-icon"></i>
                        <div class="contact-items contact-item-address"> #44, Maruthi Meadows, Opp. SABC Bible College, Hennur - Bagalur Main Road, Kothanur Post, Bengaluru, Karnataka 560077</div>
                    </div>    
                </div>                                       
            </div>
        </div>
    </div>

    <?php include "includes/enquiry.php" ?>

    <?php include "includes/footer-grad.php" ?>

</section>
