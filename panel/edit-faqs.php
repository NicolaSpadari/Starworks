<?php
    session_start();
    include_once 'functions-panel.php';
    include_once 'functions-faqs.php';
    if (!isset($_SESSION['admin'])) {
        header("Location: login.php");
        die();
    }
    
    if (isset($_POST['btnsave'])) {
        clickedSave();
    }
    if (isset($_POST['edit_id'])) {
        clickedEdit();
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
            <h1 class="title text-center spaced-bottom">Edit faqs</h1>
        </section>
        <section id="edit-slideshow">
            <div class="container">
                <form method="post" class="form-horizontal">
                    <table class="table table-bordered table-responsive">                       
                        <tr>
                            <td><label class="control-label">Question</label></td>
                            <td><input class="form-control" type="text" name="question" placeholder="Write the question" autocomplete="off" value="<?php $question ?>" /></td>
                        </tr>                      
                        <tr>
                            <td><label class="control-label">Answer</label></td>
                            <td><input class="form-control" type="text" name="answer" placeholder="Write the answer" autocomplete="off" value="<?php $answer ?>" /></td>
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
                <div class="row text-center">
                    <?php getFaqsEdit(); ?>
                </div>
            </div>
        </section>
    </body>

    <script src="../Javascript/jquery.min.js"></script>
    <script src="../Javascript/bootstrap.min.js"></script>
    <script src="panel-js.js"></script>
</html>