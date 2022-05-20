<?php
include "./includes/header.php";
?>
<head>
<style>
	body{
		background-image: url('assets/bg.jpg');
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;
	}

    div.gallery {
    border: 1px solid #ccc;
  }
  
  div.gallery:hover {
    border: 1px solid #777;
  }
  
  div.gallery img {
    width: 100%;
    height: auto;
  }
  
  div.desc {
    padding: 15px;
    text-align: center;
  }
  
  * {
    box-sizing: border-box;
  }
  
  .responsive {
    padding: 0 6px;
    float: left;
    width: 25%;
  }
  
  @media only screen and (max-width: 700px) {
    .responsive {
      width: 49.99999%;
      margin: 6px 0;
    }
  }
  
  @media only screen and (max-width: 500px) {
    .responsive {
      width: 100%;
    }
  }
  
  .clearfix:after {
    content: "";
    display: table;
    clear: both;
  }

  .h4{
      justify-content: center;
      text-align: center;
  }

</style>
</head>
<body>
    
	<link href='https://fonts.googleapis.com/css?family=Mulish' rel='stylesheet'>
    
    
    <div class="responsive">
  <div class="gallery">
      <img src="assets/sc2.jpg" width="600" height="400">
      <h3>Scarlet Fair 2019 </h3> 
		<p> April 16, 2019 </p>

  </div>
</div>


<div class="responsive">
  <div class="gallery">
  <img src="assets/sc3.jpg" width="600" height="400">
  <h4>UST Scarlet Central R101</h4> 
		<p> September 17, 2019 </p>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
  <img src="assets/sc_mooncake.jpg" width="600" height="400">
  <h4>ScarLET'S Celebrate Mooncake Festival </h4>
					<p> September 28, 2019 </p>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
  <img src="assets/sc_rtgh.jpg" width="600" height="400">
  <h4>Road to Good Health </h4>
		<p> January 21, 2020</p>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
  <img src="assets/sc_cny2.jpg" width="600" height="400">
  <h4>Chinese New Year 2020 </h4>
	<p> January 24, 2020</p>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
  <img src="assets/sc_cny3.jpg" width="600" height="400">
  <h4>Scarlet x OSA: CNY 2020 </h4>
	<p> January 31, 2020</p>
  </div>
</div>

<div class="clearfix"></div>



    <button onclick="topFunction()" id="myBtn" title="Go to top">Back to Top</button>

<?php
include "./includes/footer.php";
?>