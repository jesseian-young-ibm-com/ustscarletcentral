<?php
session_start();

if (isset($_SESSION['logged_in']) == false) {
    header("Location: memberlogin.php");
}

include "./includes/memberheader.php";
include "model/DatabaseConn.php";
?>


<style>
    body {
        background-image: url('assets/bg.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }


    #announcements {
        text-align: center;
        background-color: #FFFCE2;
        margin-top: 50px;
        margin-left: 50px;
        margin-right: 50px;
        border-radius: 10px;
        padding-bottom: 30px;
    }

    h1 {
        color: #B57C13;
        text-align: center;
        line-height: 3;
        font-family: 'Mulish';
        font-size: 50px;
        letter-spacing: 3px;
        font-weight: bold;
    }

    #ann-content {
        margin-bottom: 20px;
    }

    #page-container {
        position: relative;
        min-height: 100vh;
        padding-bottom: 50px;
    }
</style>

<div id="page-container">
    <div id="announcements">
        <section>

            <h1 style="font-size:4vw;"> 📢 ANNOUNCEMENTS 📢</h1>

                <?php
                $query = $db->query("SELECT * FROM announcements ORDER BY id DESC");
                while ($result = $query->fetch_assoc()) {
                ?>

                    <h2><?= $result['title'] ?></h2>
                    <p><?= $result['description'] ?></p>
                    <p><?= $result['date_and_time'] ?></p>

                <?php } ?>

        </section>
    </div>
</div>

<?php
include "./includes/footer.php";
?>