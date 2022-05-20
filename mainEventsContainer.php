<?php
include "./includes/header.php";
include "model/DatabaseConn.php";
?>

<style>
    body {
        background-image: url('assets/scbg.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }

    .tainer {
        text-align: center;
        padding: 50px;
    }

    .eventrow img {
        width: 400px;
        height: 500px;
    }

    .tainer h3 {
        color: #9D0101;
        font-size: 2.3rem;
        letter-spacing: 5px;
    }

    .tainer h4 {
        letter-spacing: 2px;
        font-style: italic;
    }

    .eventhalf {
        padding: 20px;
        color: #ffffff;
        text-align: center;
        font-size: 14px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        /* background-color: #ffff; */
        border-radius: 5px;
    }

    .eventhalf2 {
        padding: 50px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        /* color:#000000;
       background-color: #fff; */
        border-radius: 5px;
    }

    .eventhalf2 p {
        font-family: "Times New Roman", Times, serif;
        font-size: 15px;
        line-height: 30px;
        text-align: justify;
        text-align-last: center;
        letter-spacing: 2px;
    }

    .eventrow {
        text-align: center;
        display: flex;
        flex-wrap: wrap;
    }

    .flex-row {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
    }

    .button-23 {
        border: 3px solid #B57C13;
        border-radius: 8px;
        box-sizing: border-box;
        color: #B57C13;
        cursor: pointer;
        display: inline-block;
        font-size: 16px;
        font-weight: 600;
        line-height: 20px;
        margin: 0;
        outline: none;
        padding: 13px 23px;
        position: relative;
        text-align: center;
        text-decoration: none;
        touch-action: manipulation;
        transition: box-shadow .2s, -ms-transform .1s, -webkit-transform .1s, transform .1s;
        user-select: none;
        -webkit-user-select: none;
        width: auto;
    }

    .button-23:focus-visible {
        box-shadow: #222222 0 0 0 2px, rgba(255, 255, 255, 0.8) 0 0 0 4px;
        transition: box-shadow .2s;
    }

    .button-23:active {
        background-color: #FFFCE2;
        border-color: #9D0101;
        transform: scale(.96);
    }

    .button-23:disabled {
        border-color: #DDDDDD;
        color: #DDDDDD;
        cursor: not-allowed;
        opacity: 1;
    }

    pre {
        white-space: pre-wrap;
        word-wrap: break-word;
        text-align: justify;
    }
</style>

<div class="tainer">
    <?php
    $query = $db->query("SELECT * FROM posts WHERE id = '$_GET[rowid]' ");
    while ($result = $query->fetch_array()) { ?>
        <div class="item">
            <h3>
                <b><?= $result['title']; ?></b>
            </h3>
            <h4 style="color:#4d5456">
                <pre style="text-align: center;"><?= $result['short_description']; ?></pre>
            </h4>
            <br>

            <div class="eventrow justify-content-center">
                <div class="col-6 col-s-6 eventhalf">
                    <img src="assets/uploads/<?= $result['uploads'] ?>" width=1000px height=500px>
                </div>

                <div class="col-6 col-s-6 eventhalf2">
                    <p>
                    <pre><?= $result['long_description']; ?></pre>
                    </p>
                </div>
            </div>

        </div>
    <?php } ?>
    <br>
    <a href="mainevents.php" class="button-23" role="button">Back to Events ></a>
</div>

<?php
include "./includes/footer.php";
?>