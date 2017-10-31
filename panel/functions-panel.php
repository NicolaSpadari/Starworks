<?php
    /* INCLUDE CONNECTION */
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/Starworks2017/Include/connect.php";
    include_once($path);
    global $key;

    /* EDIT GENERIC FUNCTIONS */
    function emptyDiv(){
        echo "<div class='col-10 text-center'>
                <div class='alert alert-warning'>
                    <i class='fa fa-exclamation-circle' aria-hidden='true'></i> No data found
                </div>
             </div>";
    }
    function getAdminButtons(){
        echo "<div class='row justify-content-between'>
                <div class='col-2'>
                    <a href='logout.php' class='col-12 btn btn-lg btn-outline-primary' role='button'>Logout</a>
                </div>
                <div class='col-2'>
                    <a href='panel.php' class='col-12 btn btn-lg btn-outline-primary' role='button'>Home</a>
                </div>
            </div>";
    }
    function login($username, $password) {
        connection();
        global $connect;
        $logged = false;
        
        $result = mysqli_query($connect, "SELECT username, password FROM login");
        if (!$result) {
            die(mysql_error());
        }
        while ($row = mysqli_fetch_array($result)) {
            if ($row['username'] == $username && $row['password'] == $password) {
                $logged = true;
                session_start();
                $_SESSION['admin'] = 1;
            }
        }
        if (!$logged) {
            echo "<script> alert('Incorrect login'); </script>";
        }else{
            header('Location: panel.php');
        }
        
        mysqli_close($connect);
    }
    /*function sendCode(){
        connection();
        global $connect;
        $key = strtoupper(substr(md5(uniqid(rand(), true)), 0, 5));
        $result = mysqli_query($connect, "INSERT INTO codes (code, used) VALUES ('$key', 'F')");
        if (!$result) {
            die(mysql_error());
        }
        
        $address = "spadari.nicola@gmail.com";
        /* ryan@starworkswarehouse.co.uk
        $subject = "Starworks admin password reset";
        $message = "If you need to reset the password for the admin panel insert this code in the text box on the panel: $key";
        mail($address, $subject, $message);

        mysqli_close($connect);
    }
    function confirmCode(){
        connection();
        global $connect;
        $userCode = $_POST['user-code'];
        $result = mysqli_query($connect, "SELECT * FROM codes");
        if (!$result) {
            die(mysql_error());
        }
        while ($row = mysqli_fetch_array($result)) {
            if($row['code'] == $userCode && $row['used'] == "F"){
                setUsedCode($row['id']);
            }elseif($row['code'] == $userCode && $row['used'] == "T"){
                echo "<script>alert('The code was already used.\nTry again')</script>";
            }
        }
        
        mysqli_close($connect);
    }
    function setUsedCode($id){
        connection();
        global $connect;
        $result = mysqli_query($connect, "UPDATE codes SET used = 'T' WHERE id = '$id'");
        
        if (!$result) {
            die(mysql_error());
        }
        
        mysqli_close($connect);
    }*/
?>