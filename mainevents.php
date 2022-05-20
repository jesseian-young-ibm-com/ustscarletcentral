<style>
	body {
		background-image: url('assets/scbg.jpg');
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;
	}

	.container {
		margin: 50px 200px 50px 200px;
		position: relative;
        min-height: 100vh;
		margin-top: 50px;
        margin-left: 50px;
        margin-right: 50px;
        border-radius: 10px;
        padding-bottom: 30px;
	}

	.tainer {
		display: grid;
		grid-template-columns: repeat(4, 1fr);
		gap: 40px;
	}

	.item {
		width: 275px;
		height: 400px;
		padding: 10px;
		border-radius: 10px;
		background-color: rgba(229, 229, 229);

	}

	.button {
		border: none;
		color: white;
		padding: 15px 32px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
		margin: 4px 2px;
		cursor: pointer;
	}

	.button1 {
		background-color: #9d0101;
	}

	h1 {
        color: #9d0101;
        text-align: center;
		justify-content: center;
        font-size: 50px;
        font-weight: bold;
	}

	@media (max-width: 768px) {
    .container {
        grid-template-columns: repeat(1, 1fr);
        margin: 50px auto 50px auto;
    }
		
	


</style>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body style="background-image: url('assets/scbg.jpg');">
	<?php
	include "./includes/header.php";
	include "model/DatabaseConn.php";
	?>
	<p>
	<p>
	<p>
	<p>
	<div class="container">
		<center>
			<h1 style="font-size:4vw; margin-bottom:50px; color:#9d0101">HOT EVENTS HAPPENING: NOW</h1> 
		</center>


		<center>
			<div class="tainer">
				<?php
				$query = $db->query("SELECT * FROM posts ORDER BY id DESC LIMIT 8");
				while ($result = $query->fetch_array()) { ?>
					<div class="item">
						<img src="assets/uploads/<?= $result['uploads'] ?>" width=225px height=290px>

						<h3 style="color:#9d0101">
							<b><?= $result['title']; ?></b>
						</h3>
						<h6 style="color:#4d5456">
							<pre><?= $result['short_description']; ?></pre>
						</h6>
						<center>
							<a href="mainEventsContainer.php?rowid=<?= $result['id'] ?>">
								<button class="button button1">Read more</button>
							</a>
						</center>
					</div>
				<?php } ?>
			</div>
		</center>
	</div>

	<button onclick="topFunction()" id="myBtn" title="Go to top">Back to Top</button>

</head>


	<?php
	include "./includes/footer.php";
	?>