<?php include 'condb.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css.css">
  <link rel="stylesheet" href="Mywebsite/index.php">
</head>
<header>
  <div class="top">
      <div class="logo">
      <a href="show-pro.php">
          <img src="Logo/Nillarut_Logo_white.svg" alt="ไม่ขึ้น" width="55px" height="55px">
      </a>
      </div>

      <div class="categories">
        <?php
        $sql = "SELECT * FROM type ORDER BY type_name";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)) {
            $type_id = htmlspecialchars($row['type_id']);
            $type_name = htmlspecialchars($row['type_name']);
            $url = "show-pro.php?type_id=$type_id&type_name=$type_name";
        ?>
            <li><a href="<?= $url ?>">
                <?= $type_name ?>
            </a></li>
        <?php
        }
        ?>
    </div>

      <div class="sign_log">
          <div class="btn-signin" >
              <a type="signin" href="register.php"><button>Sign up</button></a>
          </div>
          <div class="btn-login">
            <a type="login" href="index.php"><button>Log in</button></a>
          </div>
      </div>
  </div>
    <footer>
        <div class="Bottom"></div>
    </footer>
</header>
