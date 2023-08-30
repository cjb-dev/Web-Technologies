<?php

  switch($page){
	  case "index":
		  echo '<div class="row navbar navigation">';
			  echo '<div class="col-md-3 navActive">';
				echo '<a class="navLink" href="index.php">Home</a>';
			  echo '</div>';
			  echo '<div class="col-md-3 navItem">';
				echo '<a class="navLink" href="index.php?page=projects">Projects</a>';
			  echo '</div>';
			  echo '<div class="col-md-3 navItem">';
				echo '<a class="navLink" href="index.php?page=artwork">Artwork</a>';
			  echo '</div>';
			  echo '<div class="col-md-3 navItem">';
			  	echo '<a class="navLink" href="index.php?page=contact">Contact</a>';
			  echo '</div>';
		  echo '</div>';
	  	  break;
		  
	  case "projects":
		   echo '<div class="row navbar navigation">';
			  echo '<div class="col-md-3 navItem">';
				echo '<a class="navLink" href="index.php?page=index">Home</a>';
			  echo '</div>';
			  echo '<div class="col-md-3 navActive">';
				echo '<a class="navLink" href="index.php?page=projects">Projects</a>';
			  echo '</div>';
			  echo '<div class="col-md-3 navItem">';
				echo '<a class="navLink" href="index.php?page=artwork">Artwork</a>';
			  echo '</div>';
			  echo '<div class="col-md-3 navItem">';
				echo '<a class="navLink" href="index.php?page=contact">Contact</a>';
			  echo '</div>';
			echo '</div>';
		    break;
		  
	  case "artwork":
		   echo '<div class="row navbar navigation">';
			  echo '<div class="col-md-3 navItem">';
				echo '<a class="navLink" href="index.php?page=index">Home</a>';
			  echo '</div>';
			  echo '<div class="col-md-3 navItem">';
				echo '<a class="navLink" href="index.php?page=projects">Projects</a>';
			  echo '</div>';
			  echo '<div class="col-md-3 navActive">';
				echo '<a class="navLink" href="index.php?page=artwork">Artwork</a>';
			  echo '</div>';
			  echo '<div class="col-md-3 navItem">';
				echo '<a class="navLink" href="index.php?page=contact">Contact</a>';
			  echo '</div>';
			echo '</div>';
		    break;

	  case "contact":
		  echo '<div class="row navbar navigation">';
			  echo '<div class="col-md-3 navItem">';
				echo '<a class="navLink" href="index.php?page=index">Home</a>';
			  echo '</div>';
			  echo '<div class="col-md-3 navItem">';
				echo '<a class="navLink" href="index.php?page=projects">Projects</a>';
			  echo '</div>';
			  echo '<div class="col-md-3 navItem">';
				echo '<a class="navLink" href="index.php?page=artwork">Artwork</a>';
			  echo '</div>';
			  echo '<div class="col-md-3 navActive">';
				echo '<a class="navLink" href="index.php?page=contact">Contact</a>';
			  echo '</div>';
	      echo '</div>';
		  break;
		  
	  default:
	   	  echo '<div class="row navbar navigation">';
			  echo '<div class="col-md-3 navActive">';
				echo '<a class="navLink" href="index.php">Home</a>';
			  echo '</div>';
			  echo '<div class="col-md-3 navItem">';
				echo '<a class="navLink" href="index.php?page=projects">Projects</a>';
			  echo '</div>';
			  echo '<div class="col-md-3 navItem">';
				echo '<a class="navLink" href="index.php?page=artwork">Artwork</a>';
			  echo '</div>';
			  echo '<div class="col-md-3 navItem">';
			  	echo '<a class="navLink" href="index.php?page=contact">Contact</a>';
			  echo '</div>';
		  echo '</div>';
	  	  break;
  }
?>