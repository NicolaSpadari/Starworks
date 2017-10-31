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

        <section id="gallery" class="pt-5">
            <div class="container pb-5">
                <div class="row text-center">
                    <?php getAlbums(); ?>
                </div>
            </div>
            <div class="modal fade" id="album-modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div id="album" class="modal-dialog">
                        <div id="content" class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-2x fa-arrow-left" aria-hidden="true"></i></button>
                                <h4 class="modal-title" id="myModalLabel"></h4>
                            </div>
                            <div class="modal-body"></div>
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