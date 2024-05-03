

<?php

    session_start();

    require_once("condb.php");

    if (isset($_POST["submit"])) {

        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];

        $user_check = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
        $result = mysqli_query($conn, $user_check);
        $user = mysqli_fetch_assoc($result);
        
        if($user['email'] === $email){
            echo "<script>alert('Username already exist');</script>";
        }else{
            $passwordenc = md5($password);

            $query = "INSERT INTO users (email, password, firstname, lastname, userlevel)
                        VALUE ('$email', '$passwordenc', '$firstname', '$lastname', 'm')";
            $result = mysqli_query($conn, $query);

            if($result){
                $_SESSION['success'] = "Insert user successfully";
                header("Location: index.php");
            }else{
                $_SESSION["error"] = "Something Wrong";
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>

    <link rel="stylesheet" href="d2_style.css">
</head>
<body>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <header>
        <div class="top">
            <div class="logo">
            <a href="show-pro.php">
                <img src="Logo/Nillarut_Logo_white.svg" alt="logo">
                </a>
            </div>
        </div>
    </header>

    <div class="Text-sign-up">
        <h1>Sign up</h1>
    </div>

    <div>
        <div class="Back-text">

            <div class="email">
                <p>E-mail:</p>
                <div>
                    <input type="email" id="email" name="email" required>
                </div>
            </div>

            <div class="email">
                <p>Password:</p>
                <div>
                    <input type="password" id="password" name="password" required>
                </div>
            </div>

            <div class="email">
                <p> Firstname :</p>
                <div>
                    <input type="text" id="Firstname" name="firstname" required>
                </div>
            </div>

            <div class="email">
                <p> Lastname :</p>
                <div>
                    <input type="text" id="Lastname" name="lastname" required>
                </div>
            </div>
            <div class="btn-reset">
                <button class="reset" type="reset"><img src="https://scontent.fbkk3-3.fna.fbcdn.net/v/t1.15752-9/437980025_408472438660243_5160481762937772502_n.png?stp=cp0_dst-png&_nc_cat=103&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGyMh6lhkatIS_qVnasf6j73M3RU2VsezXczdFTZWx7NSrM-8O15vzUyOCcwqaWEIKTjjhcMMY3KKfC1JpoDj7N&_nc_ohc=LXZ73i2TqeoAb7wGbge&_nc_ht=scontent.fbkk3-3.fna&oh=03_Q7cD1QFO3f4UJk-6rOV0QFj5KXTpcn-SJkwAUHXNe1j35nm6Lg&oe=664B0789"/>Reset</button>
            </div>
            <div class="check">
                <p><input type="checkbox" id="accept" name="accept" required>I accept the agreement.</p>
            </div>

            <a href="index.php">
                        <div class="Click-sign-up">
                        <input type="submit" name="submit" value="Sign up">
                </div>
            </a>
            

            <!-- <a href="show-pro.php">
                    <div class="Click-log-in">
                        <br>

                    <input type="submit" name="submit" value="Login">

                </div>
             </a> -->
        </div>
    </div>
    </form>

    <footer>
        <div class="Bottom"></div>
    </footer>

</body>
</html>