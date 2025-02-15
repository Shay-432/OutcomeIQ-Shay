<?php
require_once('config/database.php');
?>

<nav>
    <div class="navContainer">
        <div><img src="images/LogoWhiteTextOutcomeIQ.svg" alt=""></div>
        <div class="searchBox">
            <i class="fa fa-magnifying-glass magGlass"></i>
            <input type="search" id="search-input" placeholder="Search">
        </div>
        <div class="lNameInitials"> <!--needs to be loaded dynamically from database-->
            <h2 class="lecturerName">Yonela Nuba</h2>
            <div class="initialBox">
                YN
            </div>
        </div>   

        <button id="openNavButton"> <i class="fa fa-bars"></i> </button>
        <button id="closeNavButton"> <i class="fa-solid fa-greater-than"></i> </button>
    </div> <!--END OF NAV CONTAINER-->
</nav>