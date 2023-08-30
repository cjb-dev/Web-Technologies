<?php
$firstName=$_POST['fname'];
$lastName=$_POST['lname'];
$email=$_POST['email'];
$username=$_POST['username'];
$comment=$_POST['comment'];
echo '<h2>Results:</h2>';
echo '<p> First name: ' .$firstName. '</p>';
echo '<p> Last name: ' .$lastName. '</p>';
echo '<p> Email address: ' .$email. '</p>';
echo '<p> Username: ' .$username. '</p>';
echo '<p> Comments: ' .$comment. '</p>';
?>