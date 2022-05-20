<?php
include "./includes/header.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA PRIVACY CONSENT NOTICE</title>
    <link rel="stylesheet" href="./css/dataprivacy.css">

    <link rel="stylesheet" href="./css/all.css">
    <!-- Custom Style -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/footer.css">


    <link rel="stylehseet" href="https://cdjns.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">

</head>

<body style="background-image: url('assets/scbg.jpg');">
    <div class="container">


    <form method="post" action="model/RequestSubmit.php">
            <h1>DATA PRIVACY CONSENT NOTICE</h1>
            <h4> We need you to help us with some basic 
							information for our online registration. 
							Here is our data privacy consent notice. 
							Please read them carefully. </h4>

            <div class="tandc">

               <h5 style="text-align:justify">The UST Scarlet Central is committed to protecting the privacy of all students who are aspiring to be member of this organization. It is the policy of the UST Scarlet Central that information collected from its students be stored, maintained, 
				   and used by the UST Scarlet Central only for appropriate, necessary, and clearly defined purposes, and that such information be controlled and safeguarded in order to ensure the protection of personal privacy to the extent permitted by law.
				   To be consistent with data protection laws, we ask you to take a moment to review the key points in this privacy policy. By availing of the UST Library services, you consent to the use of your data under this privacy policy.<br><br>
				   The goal of UST Scarlet Central is to collect information and to identify its users by gathering only the necessary personal information, which includes the following: a) Name b) UST ID number c) UST email address d) Department affiliation e) Degree Program f) Contact number 
				   g) Year level h) Birthday.<br><br>The UST Scarlet Central processes your data to receive member privileges, it is necessary that the UST Scarlet Central has access to your personal information. Information you provide will only be used for the following purposes: a) creating/updating membership account; 
				   b) accessing the UST Scarlet Central membership website; c) generating reports. We may use your personal information to contact you on matters pertaining to your member privileges.</h5>

				<br><h5><i>Reference: Data privacy notice - miguel de benavides library. (n.d.). From http://library.ust.edu.ph/privacy.html</i><h5><br>

			   <!-- <tr class="header">
						<td>
							
						</td>
						<td><br> -->
                <label> 
                <input type="checkbox" name="chkbox" class="chkbox" value="chkbox" required> By using this form I have read and agreed with the storage and handling 
							of my data by the UST Scarlet Central in accordance with the Data Privacy Consent Notice.<br>
                </label><br>
					<button class="button button1" id="regnext"><a href="registration.php">Next</a></button>
        </form>
    </div>



<?php
include "./includes/footer.php";
?>