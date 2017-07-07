<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!--tf2 logo on navbar-->
            <a class="navbar-brand" href="<?= url('teamfortressforum/src/index.php')?>"><img class="logo" src="<?= asset('teamfortressforum/src/img/tf2logo.png')?>" alt="TF2 logo"></a>
        </div>


        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">


                <!--home button-->
                <li class="active"><a href="<?= url('teamfortressforum/src/index.php')?>">Home</a></li>


                <!--themes dropdown-->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Themes<span class="caret"></span></a>

                    <!--themes-->
                    <ul class="dropdown-menu">

                        <li><a href="<?= url('teamfortressforum/src/app/topic/topics.php')?>">General Discussion</a></li>
                        <li><a href="<?= url('teamfortressforum/src/app/topic/topics.php')?>">Mercenaries</a></li>
                        <li><a href="<?= url('teamfortressforum/src/app/topic/topics.php')?>">Weapons</a></li>
                        <li><a href="<?= url('teamfortressforum/src/app/topic/topics.php')?>">Maps</a></li>
                        <li><a href="<?= url('teamfortressforum/src/app/topic/topics.php')?>">Playstyles</a></li>
                        <li><a href="<?= url('teamfortressforum/src/app/topic/topics.php')?>">News/updates</a></li>
                    </ul>
                </li>

            </ul>

            <?php
            session_start();
            if (isset($_SESSION['username'])) {
                ?>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?= url('teamfortressforum/src/app/profile/profile.php') ?>">Profile</a></li>
                </ul>
                <?php
            } else {
                ?>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?= url('teamfortressforum/src/app/authentication/register.php') ?>"><span class="glyphicon glyphicon-user"></span> Sign Up </a></li>
                    <li><a href="<?= url('teamfortressforum/src/app/authentication/login.php') ?>"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>
                </ul>
                <?php
            };
            ?>
        </div>
    </div>
</nav>