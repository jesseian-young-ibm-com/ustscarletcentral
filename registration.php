<?php
include "./includes/header.php";

// date_default_timezone_set('Asia/Manila');

// if (!(date('G') >= 7 && date('G') <= 17)) {
// 	header("Location: closePage.php");
// }
?>


<head>
	<link rel="stylesheet" href="css/reg.css">
	<link rel="stylesheet" href="./css/style.css">
	<title>
		REGISTRATION
	</title>
	<style>
		body {
			background-image: url('assets/scbg.jpg');
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
		}

		/* The Modal (background) */
		.modal {
			display: none;
			/* Hidden by default */
			position: fixed;
			/* Stay in place */
			z-index: 1;
			/* Sit on top */
			padding-top: 100px;
			/* Location of the box */
			left: 0;
			top: 0;
			width: 100%;
			/* Full width */
			height: 100%;
			/* Full height */
			overflow: auto;
			/* Enable scroll if needed */
			background-color: rgb(0, 0, 0);
			/* Fallback color */
			background-color: rgba(0, 0, 0, 0.4);
			/* Black w/ opacity */

		}

		/* Modal Content */
		.modal-content {
			background-color: #FFFCE2;
			margin: auto;
			padding: 30px;
			border: 1px solid #888;
			width: 60%;
			border-radius: 20px;
		}

		.modal-content p {
			font-family: 'Mulish';
			font-size: 15px;
			line-height: 30px;
			text-align: justify;
			text-align-last: center;
		}

		.modal-content .up-date {
			font-family: 'Mulish';
			font-size: 15px;
			line-height: 30px;
			font-weight: bold;

		}

		.modal-content h1 {
			font-size: 40px;
			letter-spacing: 4px;
			font-weight: bold;
		}

		.modal-content img {
			width: 60px;
			height: 50px;
			text-align: center;
		}

		/* The Close Button */
		.close {
			color: #9D0101;
			float: right;
			font-size: 28px;
			font-weight: bold;
		}

		.close:hover,
		.close:focus {
			color: #000;
			text-decoration: none;
			cursor: pointer;
		}

		.header h1 {
			font-size: 40px;
			letter-spacing: 4px;
			font-weight: bold;
		}
		.hide {
  		display: none;
		}
    
		.email:hover + .hide {
 		display: block;
 		color: black;
 		font-size: 12px;
 		letter-spacing: 0px;
		}

		.container { 
  		height: 200px;
  		position: relative;
  		left: 215px;
		}

		.center {
  		margin: 0;
  		position: absolute;
  		top: 50%;
  		left: 50%;
  		-ms-transform: translate(-50%, -50%);
  		transform: translate(-50%, -50%);
		}

	</style>
</head>

<body>
	<div class="row justify-content-center regpage" id="myDIV">

		<div class="col-7 col-s-6 menu reghalf1">
			<table style="width:100%">
				<tr class="header">
					<td>
						<h1> We will be needing your <br> Basic Information. ❤🐼 </h1><br>
					</td>
					<td>


						<!-- The Modal -->
						<div id="myModal" class="modal">

							<!-- Modal content -->
							<div class="modal-content">
								<span class="close">&times;</span>
								<h1>Data Privacy Consent</h1>
								<p class="up-date">(Updated at 2022-01-01)</p>
								<br>
								<p>By filling out this for, you hereby authorize the UST Scarlet Central to use the data you provide herein for review and analysis purpose.
									Prompt actions shall be taken and due appropriate recommendations shall be given to address the valid concerns identified.<br><br>

									In adherennce to the Data Privacy Act of 2012 (R.A 10173), all data and information generated from this survey questionnaire
									shall only be used for the purpose of determining your perceptions on how your institution’s initiatives and strategies contribute to the
									effective internationalization of your academic programs.<br><br>

									Rest assured that all personal data, as contemplated by the Data Privacy Act, gathered herein shall be kept confidential between the
									student and the UST Scarlet Central.</p>
								<br>
								<img src="assets/sclogo.png" alt="" class="sc">
							</div>

						</div>

					</td>
				</tr>
			</table>

			<?php if (isset($_GET['success'])) { ?>
				<p class="success"><?php echo $_GET['success']; ?></p>
			<?php } ?>
			<?php if (isset($_GET['error'])) { ?>
				<p class="error"><?php echo $_GET['error']; ?></p>
			<?php } ?>

			<form method="post" action="model/RequestSubmit.php">
				<table style="width:100%">
					<tr class="header">
						<td>
							<label>First Name</label> <input type="text" name="fname" class="textbox" placeholder="Juan" required /><br><br>
						</td>
						<td>
							<label>Last Name</label> <input type="text" name="lname" class="textbox" placeholder="Dela Cruz" required /> <br><br>
						</td>
					</tr>
					<tr class="header">
						<td>
							<label>Student Number</label> <input type="text" name="snum" class="textbox" placeholder="2020123456" maxlength="10" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required /><br><br>
						</td>
						<td>
							<label><div class="email">UST Email</div> <div class="hide">For 1st Year students with no UST Email yet, please enter your alternative email.</div></label><input type="email" name="email" class="textbox" placeholder="juan.delacruz.cos@ust.edu.ph" required /><br><br>
						</td>
					</tr>
					<tr class="header">
						<td>
							<label>Department</label>
							<select name="dept" id="textbox" required><br><br>
								<option value="" selected disabled hidden>Choose...</option>
								<option value="College of Accountancy">College of Accountancy</option>
								<option value="College of Architecture">College of Architecture</option>
								<option value="Faculty of Arts and Letters">Faculty of Arts and Letters</option>
								<option value="Faculty of Civil Law">Faculty of Civil Law</option>
								<option value="College of Commerce and Business Administration">College of Commerce and Business Administration</option>
								<option value="College of Education">College of Education</option>
								<option value="Faculty of Engineering">Faculty of Engineering</option>
								<option value="College of Fine Arts and Design">College of Fine Arts and Design</option>
								<option value="College of Information and Computing Science">College of Information and Computing Science</option>
								<option value="Conservatory of Music">Conservatory of Music</option>
								<option value="College of Nursing">College of Nursing</option>
								<option value="Faculty of Pharmacy">Faculty of Pharmacy</option>
								<option value="Institute of Physical Education and Athletics">Institute of Physical Education and Athletics</option>
								<option value="College of Rehabilitation Sciences">College of Rehabilitation Sciences</option>
								<option value="College of Tourism and Hospitality Management">College of Tourism and Hospitality Management</option>
								<option value="Faculty of Medicine and Surgery">Faculty of Medicine and Surgery</option>
							</select>
							<!-- <input type="text" name="dept" class="textbox" placeholder="College of Science" required /><br><br> -->
						</td>
						<td>
							<label>Phone Number</label><input type="text" name="num" class="textbox" placeholder="+63 000 000 0000" maxlength="12" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required /><br><br>
						</td>
					</tr>
					<tr class="header">
						<td>
							<label>Year level</label>
							<select name="level" id="textbox" required><br><br>
								<option value="" selected disabled hidden>Choose...</option>
								<option value="1st Year">1st Year</option>
								<option value="2nd Year">2nd Year</option>
								<option value="3rd Year">3rd Year</option>
								<option value="4th Year">4th Year</option>
								<option value="5th Year">5th Year</option>
							</select>
							<!-- <input type="text" name="level" class="textbox" placeholder="Freshman/1st Yr/2nd Yr etc." required /><br><br> -->
						</td>
						<td>
							<label>Birthday</label><input type="date" name="bday" id="textbox" placeholder="YYYY/MM/DD" required /><br><br><br>
						</td>
					</tr>
						<td>
							<div class="container">
							<input type="submit" class="center" id="regsubmit" value="Submit">
						</td>
				
				</table>
			</form>

		</div>


		<div class="col-5 col-s-6 menu reghalf2">

			<img src="assets/sc_rtgh.jpg"> <br><br>
			<img src="assets/sc2.JPG"> <br><br>
			<img src="assets/sc1.jpg"> <br><br>


		</div>

	</div>

	<script>
		// Get the modal
		var modal = document.getElementById("myModal");

		// Get the button that opens the modal
		var a = document.getElementById("databtn");

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];

		// When the user clicks the button, open the modal 
		a.onclick = function() {
			modal.style.display = "block";
		}

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
			modal.style.display = "none";
		}

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
	</script>

	<?php
	include "./includes/footer.php";
	?>