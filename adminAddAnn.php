<?php
include "./includes/admindashboard.php";
?>

<head>
<style>

.title{
  width: 30%;
  height: 30px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;
}

.ann{
  width: 40%;
  height: 100px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;
}

.button-34 {
    background: #9D0101;
    border-radius: 999px;
    box-shadow: #9D0101 0 10px 20px -10px;
    box-sizing: border-box;
    color: #FFFFFF;
    cursor: pointer;
    font-size: 14px;
    font-weight: 700;
    line-height: 24px;
    opacity: 1;
    outline: 0 solid transparent;
    padding: 8px 20px;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
    width: fit-content;
    word-break: break-word;
    border: 0;
    text-decoration: none;
    margin-top: 10px;
  }

</style>
</head>



<div class="main_content">

        <!-- DITO KAYO MAG-ADD NG CONTENT SA LOOB NG DIV THANK YOU HEHE -->

        <h1>ADD NEW ANNOUNCEMENT</h1>

        <?php if (isset($_GET['success'])) { ?>
                <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>
        <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <form method="post" action="model/admin/AddAnnouncement.php">
        <br><br>
                <label>Title:</label>
                <input class="title" type="text" name="title" required>
                <br><br>
                <label>Description:</label>
                <br>
                <input class="ann" type="text" name="description" required>
                <br><br>
                <input type="submit" value="Post" class="button-34">
        </form>

</div>

<?php
include "./includes/adminFooter.php";
?>