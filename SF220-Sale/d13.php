


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment method</title>
    <link rel="stylesheet" href="d13_style.css">
</head>
<body>
    <header>
        <div class="top">
            <div class="vector">
                <a href="show-pro.php">
                    <img src="https://scontent.fbkk12-4.fna.fbcdn.net/v/t1.15752-9/437941558_3687205061547986_2892936918996533099_n.png?stp=cp0_dst-png&_nc_cat=110&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGce3JShzn9G-WyWkVEdfvX2a-yFnRUa5bZr7IWdFRrljnTTLdBTzZ2A9FtuxxlBjcdTGVe4Ik-b6BENS7FMnoQ&_nc_ohc=0RIsZTi2PkgAb4ti7om&_nc_ht=scontent.fbkk12-4.fna&oh=03_Q7cD1QGXGRQxQ0PvvwQhN5FfiCnATtC0EGJQhXHvsyFq28rE-A&oe=664CBD4E"/>
                </a>
            </div>
            <div class="bta">
                <li><a href="show-pro.php">Back to Homepage</a></li>
            </div>

            <div class="logo">
                <a href="show-pro.php">
                    <img src="Logo/Nillarut_Logo_white.svg" alt="ไม่ขึ้น" width="55px" height="55px">
                </a>
            </div>
            <div class="user">
                <img src="https://scontent.fbkk12-4.fna.fbcdn.net/v/t1.15752-9/439352859_942150747911617_8554514964316315235_n.png?stp=cp0_dst-png&_nc_cat=110&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeG-sd2JW3_BYTUZwSnL9uIKp4lyaZk1H-eniXJpmTUf54PaHROp_DEEjSXWID9esPDJ3mYfLzs_dwoftgWEYkUY&_nc_ohc=XWvEvhm_TkQAb5RF4Q3&_nc_ht=scontent.fbkk12-4.fna&oh=03_Q7cD1QExaYIlJHxlKPD93Yj_lyMPVPlW5yEfl_PUmTm4mPiYMQ&oe=664CAE6F"/>
            </div>
        </div>
    </header>

    <div class="Payment-method">
        <p>Payment method</p>
    </div>

    <div class="Box1">
        <div class="container">
            <div class="choice">
                <p><button type="submit">PromptPay</button></p>
                <p><button type="submit">Credit card</button></p>
                <p><button type="submit">Debit card</button></p>
            </div>
        </div>
    </div>

    <!-- <div class="background">
        <img src="Logo/Nillarut_Logo.svg" alt="" />
    </div> -->
    <script>
        var button = document.querySelector('.choice');
        button.addEventListener('click', function() {
        window.location.href = 'd14.html';
            });
    </script>
    <footer>
        <div class="Bottom"></div>
    </footer>
</body>

