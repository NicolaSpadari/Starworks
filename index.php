<?php
    session_start();
    include_once 'Include/functions.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Starworks Warehouse</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="theme-color" content="#000" />
        <link href="CSS/bootstrap.min.css" rel="stylesheet">
        <link href="CSS/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link href="Images/favicon.png" rel="shortcut icon" type="image/png" sizes="72x72"/>
        <link type="text/css" href="CSS/style.css" rel="stylesheet">
    </head>
    <body>
        <?php include_once 'Include/header.html'; ?>
        <section id="home"></section>        

        <section id="slideshow">
            <div id="slideshowIndicators" class="carousel slide" data-ride="carousel">
                <?php getSlideshow(); ?>
            </div>
        </section>

        <section id="events" class="pt-5">
            <div class="container">                
                <p id="line" class="lead">Upcoming events</p>
                <div class="row">
                    <div class="widget-iframe-container">
                        <script src="https://www.fatsoma.com/widgets/scripts/events.js" data-reference="3a13e27b-2b18-4869-b381-132c23351666"></script>                                                      
                    </div>
                    <?php getEvents(); ?>
                </div>
            </div>
        </section>

        <section id="prevEvents">
            <div class="container pt-5">
                <p id="line" class="lead">Previous events</p>
                <?php getVideos(); ?>
            </div>
        </section>

        <section id="location" class="pt-5">
            <div class="container">
                <p id="line" class="lead">Location</p>
                <div class="row">
                    <div class="col-sm-4">
                        <h3 class="section-title">Location & contact</h3>
                        <address>
                            <p>
                                <i class="fa fa-caret-right" aria-hidden="true"></i> Starworks Warehouse<br>
                                <i class="fa fa-caret-right" aria-hidden="true"></i> Wolverhampton<br>
                                <?php getInfos(); ?>
                            </p>
                        </address>
                    </div>
                    <div class="col-sm-8">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2424.481885244926!2d-2.1305755847118024!3d52.57898033960983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48709b979019b189%3A0xed450e43e8449ff4!2sStarworks+Warehouse+Wolverhampton!5e0!3m2!1sit!2sit!4v1507023626579" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </section>
    </body>
    <?php include_once 'Include/footer.html'; ?>

    <!--Script-->
    <script src="Javascript/jquery.min.js"></script>
    <script src="Javascript/pace.min.js"></script>
    <script src="Javascript/popper.min.js"></script>
    <script src="Javascript/bootstrap.min.js"></script>
    <script src="Javascript/init.js" type="text/javascript"></script>
</html>