<?php
include 'app/helpers/helper_functions.php';
include 'app/templates/header.php';

include 'app/templates/navbar.php';
?>


<!--theme carousel-->
<div id="themecarousel" class="carousel slide">

        <!--indicator-->
        <ol class="carousel-indicators">
            <li data-target="#themecarousel" data-slide-to="0" class="active"></li>
            <li data-target="#themecarousel" data-slide-to="1"></li>
            <li data-target="#themecarousel" data-slide-to="2"></li>
            <li data-target="#themecarousel" data-slide-to="3"></li>
            <li data-target="#themecarousel" data-slide-to="4"></li>
            <li data-target="#themecarousel" data-slide-to="5"></li>
        </ol>

        <!--slides-->
        <div class="carousel-inner">

            <!--general-->
            <div class="item active">
                <a href="app/topic/topics.php">
                    <img src="img/general.png" alt="General Discussion" href="replies.html">
                    <div class="carousel-caption">
                        <h1>General Discussion</h1>
                        <h3>Main TF2 Discussion, for everything that is not directly related to one of the other themes</h3>

                    </div>
                </a>
            </div>

            <!--mercenaries-->
            <div class="item">
                <a href="app/topic/topics.php">
                    <img src="img/mercenaries.jpg" alt="Mercenaries">
                    <div class="carousel-caption">
                        <h1>Mercenaries</h1>
                        <h3>Everything related to your favorite mercenaries!</h3>
                    </div>
                </a>
            </div>

            <!--weapons-->
            <div class="item">
                <a href="app/topic/topics.php">
                    <img src="img/weapons.jpg" alt="Weapons">
                    <div class="carousel-caption">

                        <h1>Weapons</h1>
                        <h3>Questions or tips for a certain weapon? This is the place to be!</h3>
                    </div>
                </a>
            </div>

            <!--maps and gamemodes-->
            <div class="item">
                <a href="app/topic/topics.php">
                    <img src="img/maps.jpg" alt="Maps and Gamemodes">
                    <div class="carousel-caption">
                        <h1>Maps and Gamemodes</h1>
                        <h3>What are your favorite maps and gamemodes?</h3>
                    </div>
                </a>
            </div>

            <!--playstyles-->
            <div class="item">
                <a href="app/topic/topics.php">
                    <img src="img/playstyles.jpg" alt="Playstyles">
                    <div class="carousel-caption">
                        <h1>Playstyles</h1>
                        <h3>Found a news and interesting playstyle? Or do you want to discuss how to play Pybro effectively?</h3>
                    </div>
                </a>
            </div>

            <!--news and updates-->
            <div class="item">
                <a href="app/topic/topics.php">
                    <img src="img/news.jpg" alt="News" href="reactions.html">
                    <div class="carousel-caption">
                        <h1>News</h1>
                        <h3>Anything related to the latest TF2 news and updates</h3>
                    </div>
                </a>
            </div>

        </div>

        <!--controls-->
        <a class="left carousel-control" href="#themecarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#themecarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


<?php
include 'app/templates/footer.php';?>