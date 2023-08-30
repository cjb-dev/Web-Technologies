<?php 
echo '<!DOCTYPE html>';
echo '<html>';
  echo '<head>';
    echo '<meta charset="utf-8" />';
    echo '<!-- contact page -->';
    echo '<title>Contact</title>';
    echo '<!-- links to stylesheets -->';
    echo '<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" />';
    echo '<link href="assets/css/style.css" rel="stylesheet" type="text/css" />';
  echo '</head>';

  echo '<body>';
    echo '<!-- page banner -->';
    echo '<div class="banner"><h1>Christa\'s Website</h1></div>';
    echo '<!-- navigation bar -->';
    echo '<div class="row navbar navigation">';
      echo '<div class="col-md-3 navItem">';
        echo '<a class="navLink" href="index.php">Home</a>';
      echo '</div>';
      echo '<div class="col-md-3 navItem">';
        echo '<a class="navLink" href="projects.php">Projects</a>';
      echo '</div>';
      echo '<div class="col-md-3 navItem">';
        echo '<a class="navLink" href="artwork.php">Artwork</a>';
      echo '</div>';
      echo '<div class="col-md-3 navActive">';
        echo '<a class="navLink" href="contact.php">Contact</a>';
      echo '</div>';
    echo '</div>';
    echo '<!-- contains overall page content below navigation bar-->';
    echo '<div class="container content">';
      echo '<div class="row">';
        echo '<div class="contactForm">';
          echo '<div class="formContainer">';

	  			if (!(isset($_POST['submit']))) {
					echo '<h3><strong>Fill out my contact form:</strong></h3>';
            		echo '<hr />';
					echo '<form method="POST" action="">';
					echo '<div class="form-group">';
					echo '<label>First name:</label>';
					echo '<input class="form-control" type="text" id="fname" name="fname" onblur="checkName(this.value, this.id)"/>';
					echo '<p class="help-block" id="fnameHelp"></p>';
					echo '</div>';
					echo '<div class="form-group">';
					echo '<label>Last name:</label>';
					echo '<input class="form-control" type="text" id="lname" name="lname" onblur="checkName(this.value, this.id)"/>';
					echo '<p class="help-block" id="lnameHelp"></p>';
					echo '</div>';
					echo '<div class="form-group">';
					echo '<label>Email:</label>';
					echo '<input class="form-control" type="text" id="email" name="email" onblur="checkEmail(this.value, this.id)" />';
					echo '<p class="help-block" id="emailHelp"></p>';
					echo '</div>';
					echo '<div class="form-group">';
					echo '<label>Username:</label>';
					echo '<input class="form-control" type="text" id="username" name="username"
						onblur="checkUsername(this.value, this.id)"/>';
					echo '<p class="help-block" id="usernameHelp"></p>';
					echo '</div>';
					echo '<div class="form-group">';
					echo '<label>Comments:</label>';
					echo '<input class="form-control" type="text" id="comment" name="comment" onblur="checkComments(this.value, this.id)"/>';
					echo '<p class="help-block" id="commentHelp"></p>';
					echo '</div>';
					echo '<button type="submit" class="btn btn-primary submitButton" name="submit" value="submit">Submit</button>';
					echo '</form>';
				}
	
			  	if (isset($_POST['submit'])){
					$firstName=$_REQUEST['fname'];
					$lastName=$_REQUEST['lname'];
					$email=$_REQUEST['email'];
					$username=$_REQUEST['username'];
					$comment=$_REQUEST['comment'];
					echo '<h3><strong>Results:</strong></h3>';
					echo '<hr />';
					echo '<p> First name: ' .$firstName. '</p>';
					echo '<p> Last name: ' .$lastName. '</p>';
					echo '<p> Email address: ' .$email. '</p>';
					echo '<p> Username: ' .$username. '</p>';
					echo '<p> Comments: ' .$comment. '</p>';
				}
			
            echo '</div>';
          echo '</div>';
        echo '</div>';
      
      echo '<!-- profile image near bottom of page -->';
      echo '<div class="row profile">';
        echo '<!-- EXTERNAL IMAGE: Links to the profile image associated with my ArtStation account. -->';
        echo '<img
          class="profilePic"
          src="https://cdna.artstation.com/p/users/avatars/006/491/316/large/b2685b287b561b908603f3c663a354e0.jpg?1662489991"
          width="100"
          height="100"
          alt="\'My avatar\', illustration by Buttabun on ArtStation"
        />';
      echo '</div>';
    echo '</div>';

    echo '<!-- footer/end of page: note that this is positioned relative to page information/container; so currently it may not touch the bottom for larger monitors or the bottom of vertical screens (i.e. phones)-->';
    echo '<footer><h4>Thank you so much for stopping by!</h4></footer>';
  echo '</body>';
  echo '<script src="assets/js/validation.js"></script>';
echo '</html>';
?>
