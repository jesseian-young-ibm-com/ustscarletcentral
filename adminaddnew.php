<?php
include "./includes/admindashboard.php";
?>

<head>
  <style>
    label {
      font-family: "Mulish", sans-serif;
      ;
      font-variant: small-caps;
    }

    .title {
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

    .short-desc {
      width: 30%;
      height: 100px;
      padding: 12px 20px;
      box-sizing: border-box;
      border: 2px solid #ccc;
      border-radius: 4px;
      background-color: #f8f8f8;
      font-size: 16px;
      resize: none;
    }

    .long-desc {
      width: 70%;
      height: 350px;
      padding: 12px 20px;
      box-sizing: border-box;
      border: 2px solid #ccc;
      border-radius: 4px;
      background-color: #f8f8f8;
      font-size: 16px;
      resize: none;
      white-space: pre-wrap;
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

  <h1>ADD NEW POST</h1>

  <?php if (isset($_GET['success'])) { ?>
    <p class="success"><?php echo $_GET['success']; ?></p>
  <?php } ?>
  <?php if (isset($_GET['error'])) { ?>
    <p class="error"><?php echo $_GET['error']; ?></p>
  <?php } ?>

  <form method="post" action="model/admin/AddPost.php" enctype="multipart/form-data">
    <label>Title:</label>
    <input type="text" name="title" required class="title">
    <br><br>
    <label>Short Description:</label>
    <br>
    <pre><textarea class="short-desc" name="short_description" required></textarea></pre>
    <br><br>
    <label>Long Description:</label>
    <br>
    <pre><textarea class="long-desc" name="long_description" required></textarea></pre>
    <br><br>
    <label>Upload Image</label>
    <input type="file" name="file" required>
    <br>
    <input type="submit" value="Post" class="button-34">
  </form>

</div>

<?php
include "./includes/adminFooter.php";
?>