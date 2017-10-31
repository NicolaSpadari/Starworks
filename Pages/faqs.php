<?php
    session_start();
    include_once '../Include/functions.php';
?>

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
                <p id="line" class="lead">Faqs</p>
                <?php getFaqs(); ?>
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