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

        <ul class="ul ul-left ul-left-unresponsive">
            <li><img src="lib/imgs/logo.png" alt="logo" id="logo" class="logo"></li>
            <div class="headline">
                <li><p class="logo-title" id="logo-title-left">Keuper</p></li>
                <li><p class="logo-title" id="logo-title-right">School</p></li>
                <li><p class="logo-subline">45 years in teaching</p></li>
            </div>
        </ul>

        <ul class="ul ul-left ul-left-responsive">
            <li><img src="lib/imgs/logo.png" alt="logo" id="logo" class="logo"></li>
            <li><p class="logo-title" id="logo-title-left">Keuper</p></li>
            <li><p class="logo-title" id="logo-title-right">School</p></li>
            <li><p class="logo-subline">45 years in teaching</p></li>
        </ul>
        <ul class="ul ul-right">
            <li><a href="index.php">Home</a></li>
            <li><a href="#">School</a>
                <ul class="nav-school-inner">
                    <li style="background: none; height: 50px;"></li>
                    <li class="a"><a class="b" href="school.php">Management</a></li>
                    <li class="a"><a class="b" href="school.php">Aims & Objectives</a></li>
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