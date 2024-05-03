<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <link rel="stylesheet" href="d3_style.css">
</head>

<body>

    <form action="login.php" method="post">

        <header>
        <div class="top">
            <div class="logo">
            <a href="show-pro.php">
                <img src="Logo/Nillarut_Logo_white.svg" alt="logo">
                </a>
            </div>
        </div>
        </header>
        
        <div class="Text-log-in">
            <h1>Log in</h1>
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

                <a href="show-pro.php">
                    <div class="Click-log-in">
                        <br>

                    <input type="submit" name="submit" value="Log  in">

                </div>
             </a>

            </div>

            <div class="Bottom">

            </div>
    </form>

    <a href="register.php">Go to register</a>

</body>

</html>