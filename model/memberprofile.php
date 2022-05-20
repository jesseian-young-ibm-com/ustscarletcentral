<?php

session_start();

if (isset($_SESSION['logged_in']) == false) {
	header("Location: memberlogin.php");
}

include "./includes/memberheader.php";
include "model/DatabaseConn.php";
?>


<head>

	<title>
		MEMBERSHIP PROFILE
	</title>
	<style type="text/css">
		body {
			background-image: url('assets/scbg.jpg');
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;

		}

		body .wrapper {
			margin-top: 3%;
			font-size: 100%;
			color: #B57C13;
			font-family: 'Mulish', sans-serif;
			font-weight: bold;
			text-align: center;

		}

		.display {
			margin-left: 50%;
			padding: 30px;
			border-radius: 10px;

			color: #000000;
			font-family: 'Mulish', sans-serif;
			font-weight: bold;


		}

		.profile {
			margin-left: 35%;
			padding: 30px;
			border-radius: 10px;

			color: #000000;
			font-family: 'Mulish', sans-serif;
			font-weight: bold;
			font-size: 150%;
			text align: center;
		}

		.textbox {
			margin top: 50%;

			border-radius: 10px;
			color: #000000;
			font-family: 'Mulish', sans-serif;
			font-weight: bold;
			font-size: 90%;
		}

		label {
			display: inline-block;
			width: 240px;
		}
	</style>
</head>

<body>
	<?php
	$query = $db->query("SELECT * FROM members WHERE id='$_SESSION[id]'");
	while ($result = $query->fetch_array()) {
	?>
		<div class="wrapper">
			<h1> Hello there, <?= $result['first_name'] ?>. </h1><br>

		</div>

		<div class="profile">
			<div class="displayProfile" id="displayProfile">
				<label>Student Number</label>
				<input type="text" class="textbox" value="<?= $result['student_number'] ?>" disabled /><br><br>
				<label>First Name</label>
				<input type="text" class="textbox" value="<?= $result['first_name'] ?>" disabled /> <br><br>
				<label>Last Name</label>
				<input type="text" class="textbox" value="<?= $result['last_name'] ?>" disabled /><br><br>
				<label>UST Email</label>
				<input type="text" class="textbox" value="<?= $result['ust_email'] ?>" disabled /><br><br>
				<label>College</label>
				<input type="text" class="textbox" value="<?= $result['department'] ?>" disabled /><br><br>
				<label>Year level</label>
				<input type="text" class="textbox" value="<?= $result['year_level'] ?>" disabled /><br><br>
				<label>Phone Number</label>
				<input type="text" class="textbox" value="<?= $result['phone_number'] ?>" disabled /><br><br>
				<label>Birthday</label>
				<input type="text" class="textbox" value="<?= $result['birthday'] ?>" disabled /><br><br>
				<button onclick="toggleProfile()">Edit</button>
			</div>

			<form method="post" action="model/EditProfile.php" id="edit" style="display: none">
				<label>Student Number</label>
				<input type="text" class="textbox" name="studNo" value="<?= $result['student_number'] ?>" /><br><br>
				<label>First Name</label>
				<input type="text" class="textbox" name="firstName" value="<?= $result['first_name'] ?>" /> <br><br>
				<label>Last Name</label>
				<input type="text" class="textbox" name="lastName" value="<?= $result['last_name'] ?>" /><br><br>
				<label>UST Email</label>
				<input type="text" class="textbox" name="email" value="<?= $result['ust_email'] ?>" /><br><br>
				<label>College</label>
				<input type="text" class="textbox" name="" value="<?= $result['department'] ?>" disabled /><br><br>
				<label>Year level</label>
				<input type="text" class="textbox" name="yearLevel" value="<?= $result['year_level'] ?>" /><br><br>
				<label>Phone Number</label>
				<input type="text" class="textbox" name="phone" value="<?= $result['phone_number'] ?>" /><br><br>
				<label>Birthday</label>
				<input type="text" class="textbox" name="" value="<?= $result['birthday'] ?>" disabled /><br><br>
				<input type="submit" value="Save">
			</form>

		</div>
	<?php } ?>

	<?php if (isset($_GET['success'])) { ?>
		<p class="success"><?php echo $_GET['success']; ?></p>
	<?php } ?>
	<?php if (isset($_GET['error'])) { ?>
		<p class="error"><?php echo $_GET['error']; ?></p>
	<?php } ?>

	<form method="post" action="model/ChangePassword.php">

		<label>Old Password</label>
		<input type="text" name="old_password" id="old_password">

		<label>New Password</label>
		<input type="text" name="new_password" id="new_password">

		<label>Confirm Password</label>
		<input type="text" name="confirm_new_password" id="confirm_password">

		<input type="submit" value="Update" class="btn">

	</form>

	<script>
		function toggleProfile() {
			var edit = document.getElementById("edit");
			var profile = document.getElementById("displayProfile");
			if (edit.style.display === "none") {
				edit.style.display = "block";
				profile.style.display = "none";
			} else {
				edit.style.display = "none";
				profile.style.display = "block";
			}
		}
	</script>

	<?php
	include "./includes/footer.php";
	?>