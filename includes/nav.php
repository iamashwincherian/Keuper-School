<Script>
    $(document).ready(function() {
        $(window).scroll(function () {
            if ($(window).scrollTop() > 400) {
                $('#nav').removeClass('nav-opacity');
                $('#nav').addClass('nav-fixed');
                $('#logo').addClass('logo-small');
                $('#logo').removeClass('logo');
                $('#logo').removeClass('logo');
                $('#logo-subline').addClass('remove');
            }
            if ($(window).scrollTop() < 401) {
                $('#nav').removeClass('nav-fixed');
                $('#logo').addClass('logo');
                $('#logo').removeClass('logo-small');
                $('#logo-subline').removeClass('remove');

            }
        });

        $('#bars').click(function(){
           $('.navigation').css("display", "unset");
           $('.nav-home').css("display", "flex");
        }); 

        $('#close').click(function(){
           $('.nav-school').css("display", "none");
           $('.navigation').css("display", "none");
        }); 

        $('#nav-school').click(function(){
           $('.nav-home').css("display", "none");
           $('.nav-school').css("display", "flex");
           $('.icon-back').css("display", "unset");
           $('.icon-back-none').css("display", "none");
        }); 

        $('.icon-back').click(function(){
           $('.nav-home').css("display", "flex");
           $('.nav-school').css("display", "none");
           $('.icon-back').css("display", "none");
           $('.icon-back-none').css("display", "unset");
        }); 
        
    });

</Script>

<nav id="nav">
    <i class="fas fa-bars" id="bars"></i>
    <div class="uls">

        <ul class="ul ul-left ul-left-unresponsive">
            <li><a href="index"><img src="lib/imgs/logo.png" alt="logo" id="logo" class="logo"></a></li>
            <div class="headline">
                <li><p class="logo-title" id="logo-title-left">Keuper</p></li>
                <li><p class="logo-title" id="logo-title-right">School</p></li>
                <li><a class="logo-subline" href="index">45 years in teaching</a></li>
            </div>
        </ul>

        <ul class="ul ul-left ul-left-responsive">
            <li><img src="lib/imgs/logo.png" href="index" alt="logo" id="logo" class="logo"></li>
            <li><p class="logo-title" id="logo-title-left">Keuper</p></li>
            <li><p class="logo-title" id="logo-title-right">School</p></li>
            <li><p class="logo-subline" href="index" id="logo-subline">45 years in teaching</p></li>
        </ul>
        <ul class="ul ul-right">
            <li><a href="index.php">Home</a></li>
            <li><a href="#">School</a>
                <ul class="nav-school-inner">
                    <li style="background: none; height: 50px;"></li>
                    <li class="a"><a class="b" href="school.php">Management</a></li>
                    <li class="a"><a class="b" href="aims">Aims & Objectives</a></li>
                    <li class="a"><a class="b" href="school.php">Facilities</a></li>
                    <li class="a"><a class="b" href="school.php">School Events</a></li>
                    <li class="a"><a class="b" href="school.php">Downloads</a></li>
                </ul>
             </li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="#">About Us</a></li>
        </ul>
    </div>
</nav>

<div class="navigation">
    <div class="navigation-head">
        <i class="fas fa-arrow-left icon-back"></i>
        <i class="icon-back-none"></i>
        <h1>Keuper school</h1>
        <i class="fas fa-times" id="close"></i>
    </div>
    <div class="navigation-items nav-home">
        <a href="index">Home</a>
        <a href="#" id="nav-school">School</a>
        <a href="#">Gallery</a>
        <a href="#">About Us</a>
    </div>
    <div class="navigation-items nav-school">
        <a>School</a>
        <a href="#">Management</a>
        <a href="#">Aims & Objectives</a>
        <a href="#">Facilities</a>
        <a href="#">School Events</a>
    </div>
</div>