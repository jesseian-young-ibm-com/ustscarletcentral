<?php
error_reporting(E_ALL ^ E_WARNING);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="reset-content">
        <div class="form-content">
            <h2>Enter your new Password</h2>

            <?php if (isset($_GET['success'])) { ?>
                <p class="success"><?php echo $_GET['success']; ?></p>
            <?php } ?>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <?php
            $selector = $_GET["selector"];
            $validator = $_GET["validator"];

            if (empty($selector) || empty($validator)) {
                echo "Wrong link or your link is expired";
            } else {
                if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
            ?>
                    <form action="model/admin/ResetPassword.php" method="post">
                        <input type="hidden" name="selector" value="<?php echo $selector ?>">
                        <input type="hidden" name="validator" value="<?php echo $validator ?>">
                        <div class="input-box">
                            <input type="text" name="password" required>
                            <label for="password">Password</label>
                        </div>
                        <div class="input-box">
                            <input type="text" name="confirmPassword" required>
                            <label for="password">Confirm Password</label>
                        </div>
                        <input type="submit" name="submit_new_password" value="Update" class="submit-btn">
                    </form>
            <?php
                }
            }
            ?>
        </div>
    </div>
</body>

</html>