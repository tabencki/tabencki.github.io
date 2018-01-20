<?php

//Begin a PHP block

$msg = "E-MAIL SENT FROM CARL THE FOG\n";

/* start building a message string for sending email
E-MAIL SENT FROM CARL THE FOG will be the first line in the message text of the email that is sent and can
be changed to anything you like. \n is a carriage return. */

$msg .= "Victim's Name:        $_POST[victim_name]\n";
$msg .= "Victim's E-mail:      $_POST[victim_email]\n";
$msg .= "Victim's Fave Pet:    $_POST[pet]\n";
$msg .= "Victim's Fave Track:  $_POST[trackdaybro]\n";
$msg .= "Victim's Fave Ipsums:  $_POST[ipsum] $_POST[ipsum1] $_POST[ipsum2] $_POST[ipsum3] $_POST[ipsum4] $_POST[ipsum5] $_POST[ipsum6] $_POST[ipsum7] $_POST[ipsum8] $_POST[ipsum9] $_POST[ipsum10] $_POST[ipsum11]\n";
$msg .= "Victim's Fave Fuzzy:  $_POST[fuzzy]\n";
$msg .= "Additional Comments:  $_POST[comments]\n\n";

/* Continue building the message string by adding an
entry for the sender's name, e-mail address, age,
and the message. The variable names in the brackets
must match EXACTLY your variable names in your form.
$msg .= "Sender's Favorite Colors: $_POST[color] $_POST[color1] $_POST[color2]\n";*/


$to = "jtabenck@mail.ccsf.edu";

//Create a variable to hold the recipient's e-mail address (substitute your own):

$subject = "Form_Feedback_from_Carl_the_Fog";

//Create a variable to hold the subject of the e-mail

$mailheaders = "From: $_POST[victim_email]\n";

/* Create a variable to hold the From: mailheader.
Note also that the variable name inside of the square brackets must match EXACTLY
the variable name in your form input text box for sender's email address. */


$mailheaders .= "Reply-To: $_POST[victim_email]\n\n";

//Create a variable to hold the Reply-To: mailheader


mail($to, $subject, $msg, $mailheaders);

if (mail($to, $subject, $msg, $mailheaders)) {
    echo("<p><b>Email successfully sent! :-)</b></p>");
    } else {
    echo("<p>Email delivery failed :-(</p>");
    }

?>





<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">

<title>The following email has been sent to Mr. JT Tabencki</title>

</head>
<body style="background-color: #C4CED6;">

<h3>The following email has been sent to Mr. JT Tabencki:</h3>

<p><b>Your Name: </b>
<?php echo "$_POST[victim_name]"; ?>
</br></br>

<!--
returns to the screen the value of sender_name.
Note again that the variable name inside of the square brackets must match EXACTLY
the variable name in your form input text box for sender's name. */
-->

<b>Your E-mail Address: </b>
<?php echo "$_POST[victim_email]"; ?>
</br></br>

<!--returns to the screen the value of sender_email.-->

<b>Your Fave Pet: </b>
<?php echo "$_POST[pet]"; ?>
<!--returns to the screen the value of fave pet.-->
</br></br>
<b>Your Fave Track: </b>
<?php echo "$_POST[trackdaybro]"; ?>
<!--returns to the screen the value of fave track.-->
</br></br>
<b>Your Fave Ipsum: </b>
<?php echo "$_POST[ipsum]"; ?>
<?php echo " "; ?>
<?php echo "$_POST[ipsum1]"; ?>
<?php echo " "; ?>
<?php echo "$_POST[ipsum2]"; ?>
<?php echo " "; ?>
<?php echo "$_POST[ipsum3]"; ?>
<?php echo " "; ?>
<?php echo "$_POST[ipsum4]"; ?>
<?php echo " "; ?>
<?php echo "$_POST[ipsum5]"; ?>
<?php echo " "; ?>
<?php echo "$_POST[ipsum6]"; ?>
<?php echo " "; ?>
<?php echo "$_POST[ipsum7]"; ?>
<?php echo " "; ?>
<?php echo "$_POST[ipsum8]"; ?>
<?php echo " "; ?>
<?php echo "$_POST[ipsum9]"; ?>
<?php echo " "; ?>
<?php echo "$_POST[ipsum10]"; ?>
<?php echo " "; ?>
<?php echo "$_POST[ipsum11]"; ?>
<?php echo " "; ?>

<!--returns to the screen the value of fave ipsum(s).-->

</br></br>
<b>Your Fave Fuzzy: </b>
<?php echo "$_POST[fuzzy]"; ?>
</br></br>


<!--returns to the screen the value of fave fuzzy.-->

<b>Your Comments:</b>
<?php echo "$_POST[comments]"; ?>


<!--returns to the screen the value of comments.-->

</p>

</body>
</html>
