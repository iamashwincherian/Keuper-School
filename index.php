<?php include "includes/header.php" ?>

<Script>
    $(document).ready(function() {
        $(window).scroll(function () {
            if ($(window).scrollTop() > 400) {
                $('#nav').removeClass('nav-opacity');
                $('#nav').addClass('nav-fixed');
                $('#logo').addClass('logo-small');
                $('#logo').removeClass('logo');
            }
            if ($(window).scrollTop() < 401) {
                $('#nav').removeClass('nav-fixed');
                $('#logo').addClass('logo');
                $('#logo').removeClass('logo-small');
            }
        });
    });

</Script>

<nav id="nav">
    <i class="fas fa-bars"></i>
    <div class="uls">
        <ul class="ul ul-left">
            <li><img src="lib/imgs/logo.png" alt="logo" id="logo" class="logo"></li>
            <li><p class="logo-title" id="logo-title-left">Keuper</p></li>
            <li><p class="logo-title" id="logo-title-right">School</p></li>
        </ul>
        <ul class="ul ul-right">
            <li><a href="#">Home</a></li>
            <li><a href="#">School</a>
                <ul class="nav-school-inner">
                    <li style="background: none; height: 50px;"></li>
                    <li class="a"><a class="b" href="#">Management</a></li>
                    <li class="a"><a class="b" href="#">Aims & Objectives</a></li>
                    <li class="a"><a class="b" href="#">Facilities</a></li>
                    <li class="a"><a class="b" href="#">School Events</a></li>
                </ul>
             </li>
            <li><a href="#">Gallery</a></li>
            <li><a href="#">About Us</a></li>
        </ul>
    </div>
</nav>

<section class="section-hero">
    <p class="hero hero-title">Good start for your child</p>
    <p class="hero hero-subline">Aenean nonummyendrerit maurhasellus portasce susci varius mi. Cum sociis<br>natoque penatibus et mag dis parturient ontes nascetur ridiculus mus. Nulla du<br>usce feugiat malesuada odio. Morbi nunc odio gravi.</p>
</section>

<section class="section-hots">
    <div class="hots gallery">
        <p id="gallery-title" class="hots-title">Gallery</p>
        <img id="hots-gallery-img" src="lib/imgs/gallery-img.png" alt="Gallery Img">
        <hr id="hr-gallery">
        <a href="#" class="view-more">View More →</a>
    </div>
    <div class="hots levents">
        <p id="events-title" class="hots-title">Latest Events</p>
            <div class="events event1">
                <div class="event-date">
                    <div class="event-date-month event-line1"><p>March</p></div>
                    <div class="event-date-day"><p>30</p></div>
                </div>
                <div class="event-details">
                    <div class="event-details-title event-line1">Annual Day Celebration</div>
                    <div class="event-details-desc">Turie ntots nascetur riculus mullamale ada odi dio gravida atcur ecuus a lorm ecaistique orci ac sis ultricpharetra gna. Donec accusan malsuad.</div>
                </div>
            </div>
            <div class="events event2">
                <div class="event-date">
                    <div class="event-date-month event-line1"><p>May</p></div>
                    <div class="event-date-day"><p>05</p></div>
                </div>
                <div class="event-details">
                    <div class="event-details-title event-line1">School Reopening</div>
                    <div class="event-details-desc">Turie ntots nascetur riculus mullamale ada odi dio gravida atcur ecuus a lorm ecaistique orci ac sis ultricpharetra gna. Donec accusan malsuad.</div>
                </div>
            </div>
        <hr id="hr-events">
        <a href="#" class="view-more">View More →</a>
    </div>
</section>
    
<section class="section-offers">
    <p id="offers-title">What We Offer</p>
    <p id="offers-subline">At our education center, we provide a variety of benefits and advantages for your kid's successful edication, while allowing them to stay fully active, creative and healthy.</p>
    <div class="offers">
        <div class="offers-col">
            <img class="offers-img" src="./lib/imgs/safety.png" alt="Safety Img">
            <p class="offers-sub-title">Safety First</p>
            <p class="offers-sub-subline">We offer first class protection and security for your children in Keuper</p>
        </div>
        <div class="offers-col">
            <img class="offers-img" src="./lib/imgs/happy.png" alt="Safety Img">
            <p class="offers-sub-title">Happy Environment</p>
            <p class="offers-sub-subline">Our best conditions for your child to have the unique learning experience</p>
        </div>
        <div class="offers-col">
            <img class="offers-img" src="./lib/imgs/creative.png" alt="Safety Img">
            <p class="offers-sub-title">Creative Lessons</p>
            <p class="offers-sub-subline">Our curriculum was designed to nurture creativity in all students of Keuper</p>
        </div>
    </div>
</section>

<section class="section-contact">

</section>

<?php include "includes/footer.php" ?>