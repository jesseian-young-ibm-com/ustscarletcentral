<?php
include "./includes/header.php";
?>

<html>

<head>
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">

<style>

    body {
        background-image: url('assets/scbg.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }

    .flex-container {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
    }

  .flex-container > div {
  width: 100px;
  margin: 10px;
  text-align: center;
  line-height: 75px;
}

</style>

<body>
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
    <div class="header">
        <img src="assets/cover.jpg" alt="cover" width="100%" height="100%">
    </div>

    <div class="row ">
        <div class="col-4 col-s-3 menu" width="100%" height="100%">
            <img src="assets/sc1.jpg">
        </div>

        <div class="col-4 col-s-3 menu" width="100%" height="100%">
            <img src="assets/sc2.jpg">
        </div>

        <div class="col-4 col-s-3 menu" width="100%" height="100%">
            <img src="assets/sc3.jpg">
        </div>
    </div>


    <div class="row justify-content-center">
        <div class="col-3 col-s-3 menu">

        </div>
        <div class="col-6 col-s-6 menu">
            <ul>
                <li>A Filipino and Chinese organization in the University of Santo Tomas
                    committed to promoting the appreciation of the Chinese-Filipino cultural
                    heritage and the attainment of humanitarian ends while preserving and
                    strengthening the spirit of camaraderie among its members.</li>
            </ul>
        </div>
        <div class="col-3 col-s-3 menu">

        </div>
    </div>


    <div class="row justify-content-center">
        <div class="col-6 col-s-6 menu halfrow">
            <h4>UST SCARLET HIGHLIGHTS</h4>


            <table style="width:100%">
            
                <tr>
                    <td>
                        <img style="width:100%" src="assets/sc2.jpg">
                        <p>Scarlet Fair 2019 || April 16, 2019</p>
                    </td>
                    <td>
                        <img style="width:75%" src="assets/sc3.jpg">
                        <p>UST Scarlet Central R101 || September 17, 2019</p>
                    </td>

                    <td>
                        <img style="width:100%" src="assets/sc_rtgh.jpg">
                        <p>Road to Good Health || January 21, 2020</p>
                    </td>
                    <td>
                        <img style="width:75%" src="assets/sc_mooncake.jpg">
                        <p>ScarLET'S Celebrate Mooncake Festival || September 28, 2019 </p>
                    </td>
                </tr>
            </table>
            <br>
            <br>
            <a href="mainhighlights.php" class="button-23" role="button">See More ></a>
        </div>

        




    <button onclick="topFunction()" id="myBtn" title="Go to top">Back to Top</button>


</head>











    <?php
    include "./includes/footer.php";
    ?>