<?php
include "./includes/header.php";
include "model/DatabaseConn.php";
?>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<style>
  body {
    background-image: url('BG.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
  }

  .spacing-sideleft {
    margin-top: 75px;
    margin-bottom: 100px;
    margin-right: 200px;
    margin-left: 100px;
  }

  .spacing-sideright {
    margin-top: 100px;
    margin-bottom: 75px;
    margin-right: 200px;
    margin-left: 100px;
    text-align: left;
    text-align: justify;
  }


  .image1 {
    float: right;

    margin: 0px 0px 20px 25px;
  }

  .image2 {
    float: left;

    margin: 0px 50px 100px 0px;
  }



  .tainer {
    width: 1200px;


    border-radius: .5em;
    padding: 50px;
    display: flex;
    justify-content: space-between;
    margin: 1em;
  }

  .item {
    width: 290px;
    height: 375px;
    padding: 10px;
    border-radius: 10px;
    background-color: rgba(229, 229, 229);
    text-align: justify;
    line-height: 2.0;

  }

  table,
  th,
  td {
    border: 1px solid black;
    margin-top: 50px;
    margin-bottom: 150px;
  }

  table {
    border-collapse: collapse;
    width: 1250px;
    color: black;
  }

  td {
    height: 100px;
    width: 100px;
    text-align: center;
    margin-top: 50px;
  }
</style>

<body style="background-image: url('assets/scbg.jpg');">

  <div class="spacing-sideleft">

    <a href="#history" id="sublink1"> HISTORY </a>
    <a href="#RMV" id="sublink2"> MISSION VISSION </a>
    <a href="#officers" id="sublink3"> OFFICERS </a>


    <h1 style="font-family:sedan ;" id="history">History of Scarlet</h1>
    <p>
    <h5 style="font-family:sedan ;">S.Y. 2022-2023</h5>
    <p>
    <p style="line-height:2.5">
    <div class="image1">
      <img src="assets/USTSCAR.jpg" width=300px height=195px style="border-radius: 10%;">
    </div>
    <p style="line-height:2.5; text-align: justify;">
      In the year 1961, a group Filipino-Chinese college students, founded an organization that will cater to the Fil-Chi students of the university. Initially, the founders of this organization came from the College of Science and the Faculty of Arts and Letters. Thus the word SCARLET was formed from the name of these two colleges. It also means the color Red is associated with luck for the Chinese people, adapting it as the official color of the organization. <br> Courtesy of UST Scarlet Central
    </p>
  </div>

  <div class="spacing-sideright">
    <div class="image2">
      <img src="assets/USTSCAR2.jpg" width=350px height=250px style="border-radius: 10%;">
    </div>
    <p style="line-height:2.5">
      Scarlet opened its doors to other colleges, faculties, and institutes to cater to students from different courses and inclination throughout the years. Currently, UST Scarlet Central has six (6) active units from Arts and Letters, Science, Pharmacy, Architecture, Accountancy, and Commerce. Scarlet also aims to foster better relationships between Filipino-Chinese students from other ethnic and cultural backgrounds. It commits itself to multiculturalism and humanitarian programs by administering Filipino and Chinese cultural activities and traditions incorporating the Thomasian Values of Compassion, Competence, and Committed.
    </p>

  </div>

  <center>
    <div class="tainer" id="RMV">
      <div class="item">
        <h3 style="color:#9d0101">
          <b>
            <center style="margin-bottom: 20px;">RATIONALE</center>
          </b>
        </h3>
        <h6 style="color:#4d5456; padding: 10px;">
          The UST Scarlet Central of the Pontifical and Royal University of Santo Tomas is a multicultural organization aiming to foster better relationships with Filipino, Chinese and other students from other ethnic or cultural backgrounds. This organization seeks to conquer diversity with unity and introduce the rich culture of the Filipino-Chinese community in the country.
        </h6>
      </div>

      <div class="item">
        <h3 style="color:#9d0101">
          <b>
            <center style="margin-bottom: 20px;">MISSION</center>
          </b>
        </h3>
        <h6 style="color:#4d5456; padding: 10px;">
          Scarlet commits itself to work towards multiculturalism and shall encompass cultural exchanges by administering Filipino and Chinese cultural activities and traditions and introducing other diverse cultural principles beneficial to the Thomasian community. Scarlet shall also encourage and let the members participate in wholesome activities geared towards the full development of their intellectual, social, and moral aspects.

        </h6>
      </div>

      <div class="item">
        <h3 style="color:#9d0101">
          <b>
            <center style="margin-bottom: 20px;">VISION</center>
          </b>
        </h3>
        <h6 style="color:#4d5456; padding: 10px;">
          SCARLET envisions herself as a powerful force in shaping the University of Santo Tomas into an environment institutionalizing a community containing multiple cultures and actualizing the learning and appreciation of the rich Filipino, Chinese, and other diverse cultures and traditions that will influence the youth in creating a new way of appreciating the Filipino-Chinese cultural heritage not only within the university but also throughout the country.

        </h6>

      </div>
    </div>

     <h3 style="color:#9d0101">
          <b>
            <center style="margin-bottom: 20px;">Courtesy of UST Scarlet Central</center>
          </b>
        </h3>

    <center><br><br>
      <h1 style="font-family:sedan ; color:#9d0101;" id="officers">2021-2022 UST SCARLET OFFICERS:</h1>
    </center>

  </center>
  <center>
    <table>
      <tr>
        <?php
        $query = $db->query("SELECT * FROM officers WHERE position = 'President' ");
        while ($result = $query->fetch_assoc()) {
        ?>
          <td>
            <h4><?= $result['full_name'] ?></h4>
            <p style="font-size: 12px;"><?= $result['position'] ?>
          </td>

        <?php } ?>

        <?php
        $query = $db->query("SELECT * FROM officers WHERE position = 'Vice President' ");
        while ($result = $query->fetch_assoc()) {
        ?>
          <td>
            <h4><?= $result['full_name'] ?></h4>
            <p style="font-size: 12px;"><?= $result['position'] ?>
          </td>
        <?php } ?>

        <?php
        $query = $db->query("SELECT * FROM officers WHERE position = 'External Vice President' ");
        while ($result = $query->fetch_assoc()) {
        ?>
          <td>
            <h4><?= $result['full_name'] ?></h4>
            <P style="font-size: 12px;"><?= $result['position'] ?>
          </td>
        <?php } ?>

        <?php
        $query = $db->query("SELECT * FROM officers WHERE position = 'Executive Secretary' ");
        while ($result = $query->fetch_assoc()) {
        ?>
          <td>
            <h4><?= $result['full_name'] ?></h4>
            <p style="font-size: 12px;"><?= $result['position'] ?>
          </td>
        <?php } ?>

        <?php
        $query = $db->query("SELECT * FROM officers WHERE position = 'Assistant Secretary' ");
        while ($result = $query->fetch_assoc()) {
        ?>
          <td>
            <h4><?= $result['full_name'] ?></h4>
            <p style="font-size: 12px;"><?= $result['position'] ?>
          </td>
        <?php } ?>
      </tr>
      <tr>
        <?php
        $query = $db->query("SELECT * FROM officers WHERE position = 'VP for Professional Development' ");
        while ($result = $query->fetch_assoc()) {
        ?>
          <td>
            <h4><?= $result['full_name'] ?></h4>
            <p style="font-size: 12px;"><?= $result['position'] ?>
          </td>
        <?php } ?>

        <?php
        $query = $db->query("SELECT * FROM officers WHERE position = 'Associate VP for Alumni Affairs' ");
        while ($result = $query->fetch_assoc()) {
        ?>
          <td>
            <h4><?= $result['full_name'] ?></h4>
            <p style="font-size: 12px;"><?= $result['position'] ?>
          </td>
        <?php } ?>

        <?php
        $query = $db->query("SELECT * FROM officers WHERE position = 'Vice President for Communications' ");
        while ($result = $query->fetch_assoc()) {
        ?>
          <td>
            <h4><?= $result['full_name'] ?></h4>
            <p style="font-size: 12px;"><?= $result['position'] ?>
          </td>
        <?php } ?>

        <?php
        $query = $db->query("SELECT * FROM officers WHERE position = 'Associate Vice President for Communications' ");
        while ($result = $query->fetch_assoc()) {
        ?>
          <td>
            <h4><?= $result['full_name'] ?></h4>
            <p style="font-size: 12px;"><?= $result['position'] ?>
          </td>
        <?php } ?>

        <?php
        $query = $db->query("SELECT * FROM officers WHERE position = 'Vice President for Business and Marketing' ");
        while ($result = $query->fetch_assoc()) {
        ?>
          <td>
            <h4><?= $result['full_name'] ?></h4>
            <P style="font-size: 12px;"><?= $result['position'] ?>
          </td>
        <?php } ?>
      </tr>
      <tr>
        <?php
        $query = $db->query("SELECT * FROM officers WHERE position = 'Vice President for Finance' ");
        while ($result = $query->fetch_assoc()) {
        ?>
          <td>
            <h4><?= $result['full_name'] ?></h4>
            <p style="font-size: 12px;">
              <?= $result['position'] ?>
          </td>
        <?php } ?>

        <?php
        $query = $db->query("SELECT * FROM officers WHERE position = 'Vice President for Audit and Inventory' ");
        while ($result = $query->fetch_assoc()) {
        ?>
          <td>
            <h4><?= $result['full_name'] ?></h4>
            <p style="font-size: 12px;">
              <?= $result['position'] ?>
          </td>
        <?php } ?>

        <?php
        $query = $db->query("SELECT * FROM officers WHERE position = 'Vice President for Community Development' ");
        while ($result = $query->fetch_assoc()) {
        ?>
          <td>
            <h4><?= $result['full_name'] ?></h4>
            <p style="font-size: 12px;">
              <?= $result['position'] ?>
          </td>
        <?php } ?>

        <?php
        $query = $db->query("SELECT * FROM officers WHERE position = 'Vice President for Arts and Design' ");
        while ($result = $query->fetch_assoc()) {
        ?>
          <td>
            <h4><?= $result['full_name'] ?></h4>
            <p style="font-size: 12px;">
              <?= $result['position'] ?>
          </td>
        <?php } ?>


        <?php
        $query = $db->query("SELECT * FROM officers WHERE position = 'Associate Vice President for Arts and Design' ");
        while ($result = $query->fetch_assoc()) {
        ?>
          <td>
            <h4><?= $result['full_name'] ?></h4>
            <p style="font-size: 12px;">
              <?= $result['position'] ?>
          </td>
        <?php } ?>
      </tr>
      <tr>
        <?php
        $query = $db->query("SELECT * FROM officers WHERE position = 'Vice President for Documentation' ");
        while ($result = $query->fetch_assoc()) {
        ?>
          <td>
            <h4><?= $result['full_name'] ?></h4>
            <p style="font-size: 12px;">
              <?= $result['position'] ?>
          </td>
        <?php } ?>

        <?php
        $query = $db->query("SELECT * FROM officers WHERE position = 'Vice President for Logistics' ");
        while ($result = $query->fetch_assoc()) {
        ?>
          <td>
            <h4><?= $result['full_name'] ?></h4>
            <p style="font-size: 12px;">
              <?= $result['position'] ?>
          </td>
        <?php } ?>

        <?php
        $query = $db->query("SELECT * FROM officers WHERE position = 'Vice President for Athletics' ");
        while ($result = $query->fetch_assoc()) {
        ?>
          <td>
            <h4><?= $result['full_name'] ?></h4>
            <p style="font-size: 12px;">
              <?= $result['position'] ?>
          </td>
        <?php } ?>

        <?php
        $query = $db->query("SELECT * FROM officers WHERE position = 'AFiCS Representative' ");
        while ($result = $query->fetch_assoc()) {
        ?>
          <td>
            <h4><?= $result['full_name'] ?></h4>
            <p style="font-size: 12px;">
              <?= $result['position'] ?>
          </td>
        <?php } ?>

        <td></td>
      </tr>
    </table>
  </center>



  <button onclick="topFunction()" id="myBtn" title="Go to top">Back to Top</button>

  <?php
  include "./includes/footer.php";
  ?>
</body>

</html>