<?php
session_start();

if (isset($_SESSION['logged_in']) == false) {
	header("Location: memberlogin.php");
}

include "./includes/memberheader.php";
?>

<body>
	<?php if (isset($_GET['success'])) { ?>
		<p class="success"><?php echo $_GET['success']; ?></p>
	<?php } ?>	
	<link href='https://fonts.googleapis.com/css?family=Mulish' rel='stylesheet'>

	<div class="header">
		<img src="assets/cover.jpg" alt="cover" width="100%" height="100%">
	</div>

	<h1 style="color:#B57c13;text-align:center;line-height:5;font-family: 'Mulish';font-size: 50px; letter-spacing: 2px; ">Welcome to pandAMAZING family ❤🐼!</h1>

	<p style="color:000000;text-align: center;line-height:2; font-family: 'Mulish'; font-size: 25px;margin-bottom: 60px;">你好(nǐhǎo)，Pandas!
			<br>
			We warmly welcome you as a member of this Organization! 
			<br>
			Thank you for being part of Scarlet Central. ❤🐼</p>
</body>

<style>
	body {
		background-image: url('assets/bg.jpg');
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;
	}
</style>

<?php
include "./includes/footer.php";
?>