<?php session_start(); ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Starworks Warehouse</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="theme-color" content="#000" />
        <link href="../CSS/bootstrap.min.css" rel="stylesheet">
        <link href="../CSS/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" type="image/png" sizes="72x72" href="../Images/favicon.png"/>
        <link href="../CSS/style.css" rel="stylesheet">
    </head>
    <body>
        <?php include_once '../Include/header-alt.html'; ?>

        <section id="about" class="pt-3">
            <div class="container">
                <p id="line" class="lead">About us</p>
                <div class="row">
                    <div class="col-sm-6">
                        <img src="../Images/main-room.jpg" class="img-fluid rounded">
                    </div>
                    <div class="col-sm-6">
                        <p id="desc">
                            Starworks Warehouse is a 40,000 sq ft historic building now developed into an unrivaled events space, based in the Midlands.
                            A cultural hub, hosting large scale music events, fashion shows, film screenings, art & design exhibitions, wedding fairs and pop up street food festivals…
                            New Industrial music venue with world-class facilities including:<br><br>

                            - 270,000 Watt sound system<br>

                            - 2400 capacity main room<br>

                            - Artist Dressing rooms with en suite facilities<br>

                            - Artist Green Room with complimentary bar<br>

                            - Two Production offices<br>

                            - Tour bus parking
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="history" class="pt-5">
            <div class="container">
                <p id="line" class="lead">History</p>
                <div class="row">
                    <div class="col-sm-6">
                        <p id="desc">
                            The story began when Edward Lisle built his own first bicycle in the early 1870’s.
                            After gaining mass success through racing his creation, he then began to build his bicycles to order.<br>
                            Edward Lisle founded the Star Cycle Company In 1883. In 1889, business was booming and the company were able to purchase a factory on Stewart Street.
                            By 1899, production levels reached an incredible 10,000 cycles per year, and by 1904 Star were the largest bicycle manufacturer in Wolverhampton.<br>
                            However by 1897, times were changing. As were the demands of the customers.
                            The company followed suit and acquired a ‘Benz Car’, using it as a template and basis for the design of their very own car.<br>
                            The Star Cycle Company went on to purchase the rights to produce Star-Benz cars in Wolverhampton and began production at the Stewart Street Works.
                            The cars were now being sold under the Star Motor Company name, a registered subsidiary of Star Engineering Limited, who adopted a policy of building as much as possible in house.<br>
                            In 1902, the Star Motor Company finally changed its name to the Star Engineering Company.
                            The business grew rapidly and diversified, expanding the Stewart Street works and obtaining additional premises in neighboring streets.<br>
                            The company went on to undertake their final quest in 1903 – building a magnificent 40,000 sq. ft. site on Frederick Street, where it remains to this very day.
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <img src="../Images/wall.jpg" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </section>
    </body>
    <?php include_once '../Include/footer.html'; ?>

    <!--Script-->
    <script src="../Javascript/jquery.min.js"></script>
    <script src="../Javascript/pace.min.js"></script>
    <script src="../Javascript/popper.min.js"></script>
    <script src="../Javascript/bootstrap.min.js"></script>
    <script src="../Javascript/init.js" type="text/javascript"></script>
</html>