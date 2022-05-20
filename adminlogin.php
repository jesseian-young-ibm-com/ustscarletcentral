<?php
session_start();

if (isset($_SESSION['logged_in']) == true) {
    header("Location: adminmanageposts.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UST SCARLET CENTRAL ADMIN LOGIN</title>
    <link rel="stylesheet" href="./css/adminlogin.css">

    <link rel="stylesheet" href="./css/all.css">
    <!-- Custom Style -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/footer.css">


    <link rel="stylehseet" href="https://cdjns.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
</head>

<body style="background-image: url('assets/scbg.jpg');">
    <div class="container">


        <form action="model/admin/LoginSubmit.php" method="post">

            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <?php if (isset($_GET['reset'])) { ?>
                <p class="success"><?php echo $_GET['reset']; ?></p>
            <?php } ?>
            <?php if (isset($_GET['forgot'])) { ?>
                <p class="error"><?php echo $_GET['forgot']; ?></p>
            <?php } ?>

            <img src="./assets/ustlogo.png" />
            <img src="./assets/sclogo.png" />
            <h3>UST Scarlet Central</h3>
            <h1>ADMINISTRATOR LOGIN</h1>
            <h4>Unauthorized Access is strictly Prohibited!</h4>

            <div class="form input">

                <label>Username</label>
                <input type="text" name="username" placeholder="username" />
            </div>

            <div class="form input">
                <label>Password</label>
                <input type="password" name="password" placeholder="password" />
            </div>

            <input type="submit" class="btn-login" value="Login">
            <!-- <button class="btn-login" type="submit" value="Login">Login</button> -->

            <a href="#" id="button" class="button">
                <h4>Forgot Password</h4>
            </a>
        </form>
    </div>

    <!-- Forgot Password -->
    <div class="modal">
        <div class="modal-contents-admin">
            <div class="close">+</div>
            <form method="post" action="model/admin/CreateTokenPassword.php">
                <h4>Forgot Password</h4>
                <label for="reset_email">Email Address</label>
                <input type="email" name="reset_email" id="reset_email" placeholder="juandelacruz@gmail.com">

                <input type="submit" class="submit-btn" name="reset_submit" value="Send">
            </form>
        </div>
    </div>
    <!-- Forgot Password -->


    <script>
        document.getElementById('button').addEventListener("click", function() {
            document.querySelector('.modal').style.display = "flex";
        });

        document.querySelector('.close').addEventListener("click", function() {
            document.querySelector('.modal').style.display = "none";
        });
    </script>

</body>

</html>