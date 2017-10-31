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
        
        <section id="parking" class="pt-5">
            <div class="container">
                <p id="line" class="lead">Parking</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2883.1790487938206!2d-2.1302058613976356!3d52.57946780045451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sparking+near+starworks+warehouse!5e0!3m2!1sit!2sit!4v1507287909184" width="100%" height="610" frameborder="0" style="border:0" allowfullscreen></iframe>  
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