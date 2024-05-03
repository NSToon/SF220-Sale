<?php

    session_start();

    if (isset($_POST["email"])){

        include("condb.php");

        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordenc = md5($password);

        $query = "SELECT * FROM users WHERE email = '$email' AND password = '$passwordenc'";

        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {

            $row = mysqli_fetch_array($result);

            $_SESSION['userid'] = $row['id'];
            $_SESSION['user'] = $row['firstname'] . " " . $row['lastname'];
            $_SESSION['userlevel'] = $row['userlevel'];

            if($_SESSION['userlevel'] == 'a'){
                header("Location: admin.php");
            }

            if($_SESSION["userlevel"] == "m"){
                header("Location: user_page.php");
            }
        }else{
            echo "<script>alert('User or Password uncorrect');</script>"("Location: index.php");
        }
    }else{
        header("Location: index.php");
    }

?>