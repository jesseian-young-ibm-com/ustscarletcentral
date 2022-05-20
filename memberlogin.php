<?php
session_start();

if (isset($_SESSION['logged_in']) == TRUE) {
    header("Location: memberhome.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USTSC MEMBERSHIP LOGIN</title>

    <link rel="stylesheet" href="./css/all.css">
    <!-- Custom Style -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/member.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>

<body style="background-image: url('assets/scbg.jpg');">
    <div class="container">

        <img src="./assets/ustlogo.png" />
        <img src="./assets/sclogo.png" />
        <h3>UST Scarlet Central</h3>

        <form class="login-member" method="post" action="model/LoginSubmit.php">
            <p class="login-text" style="font-size: 2rem; font-weight: 800,"> MEMBER LOGIN </p>

            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <?php if (isset($_GET['reset'])) { ?>
                <p class="success"><?php echo $_GET['reset']; ?></p>
            <?php } ?>
            <?php if (isset($_GET['forgot'])) { ?>
                <p class="error"><?php echo $_GET['forgot']; ?></p>
            <?php } ?>

            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="username">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="password">
            </div>

            <input type="submit" class="btn-mem" value="Login">
            <!-- <a href="memberhome.php" class="btn-mem" type="submit">Login</a> -->
        </form>

        <!-- Forgot Password -->
        <a href="#" id="button" class="button">
            <h4>Forgot Password</h4>
        </a>

        <div class="bg-modal">
            <div class="modal-contents">
                <div class="close">+</div>
                <form method="post" action="model/CreateTokenPassword.php">
                    <h4>Forgot Password</h4>
                    <div class="form-group">
                        <label for="reset_email">Email Address</label>
                        <input type="email" class="form-control" name="reset_email" id="reset_email" placeholder="juandelacruz@gmail.com">
                    </div>
                    <input type="submit" class="submit-btn" name="reset_submit" value="Send">
                </form>

            </div>
        </div>
        <!-- Forgot Password -->

    </div>

    <script>
        document.getElementById('button').addEventListener("click", function() {
            document.querySelector('.bg-modal').style.display = "flex";
        });

        document.querySelector('.close').addEventListener("click", function() {
            document.querySelector('.bg-modal').style.display = "none";
        });
    </script>

</body>

</html>