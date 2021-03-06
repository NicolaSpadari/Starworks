<?php
    session_start();
    include_once 'functions-panel.php';
    include_once 'functions-events.php';
    if (!isset($_SESSION['admin'])) {
        header("Location: login.php");
        die();
    }
    
    if (isset($_POST['btnsave'])) {
        clickedSave();
    }
    if(isset($_GET['delete_id'])){
        clickedDelete();
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Admin Panel</title>
        <meta charset="utf-8">
        <link href="panel-style.css" rel="stylesheet">
        <link href="../CSS/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="admin-buttons container-fluid">
            <?php getAdminButtons(); ?>
        </div>
        <section id="heading">
            <h1 class="title text-center spaced-bottom">Edit events</h1>
        </section>
        <section id="edit-slideshow">
            <div class="container">
                <form method="post" enctype="multipart/form-data" class="form-horizontal">
                    <table class="table table-bordered table-responsive">                  
                        <tr>
                            <td><label class="control-label">Cover</label></td>
                            <td><input class="input-group" type="file" name="event-image" accept="image/*" /></td>
                        </tr>
                        <tr>
                            <td><label class="control-label">Code</label></td>
                            <td><input class="form-control" type="text" name="event-code" placeholder="Write the code" autocomplete="off" value="<?php $code ?>" /></td>
                        </tr>
                        <tr>
                            <td><label class="control-label">Title</label></td>
                            <td><input class="form-control" type="text" name="event-title" placeholder="Write the title" autocomplete="off" value="<?php $title ?>" /></td>
                        </tr>
                        <tr>
                            <td><label class="control-label">Date</label></td>
                            <td><input class="form-control" type="date" name="event-date"/></td>
                        </tr>                 
                        <tr>
                            <td><label class="control-label">Time</label></td>
                            <td><input class="form-control" type="time" name="event-time"/></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button  type="submit" name="btnsave" class="btn btn-default">
                                    <i class="fa fa-upload" aria-hidden="true"></i> Upload
                                </button>
                            </td>
                        </tr>
                    </table>
                </form>
                <div class="hidden">
                    <script src="https://www.fatsoma.com/widgets/scripts/events.js" data-reference="3a13e27b-2b18-4869-b381-132c23351666"></script>                                                      
                </div>
                <div class="row text-center">
                    <?php getEventsEdit(); ?>
                </div>
            </div>
        </section>
    </body>

    <script src="../Javascript/jquery.min.js"></script>
    <script src="../Javascript/bootstrap.min.js"></script>
    <script src="panel-js.js"></script>
</html>