<?php
echo '<!-- contains overall page content below navigation bar-->';
			echo '<div class="container content">';
			  echo '<!-- row with initial information: contains baab icon and intro text-->';
			  echo '<div class="row">';
				echo '<!-- my mascot image -->';
				echo '<div class="col-md-4 icon">';
				  echo '<img
					class="baab"
					src="assets/images/baab_icon_home.png"
					width="350"
					height="350"
					alt="home page icon image"
				  />';
				echo '</div>';
				echo '<!-- contains general page description to the right of the baab icon -->';
				echo '<div class="col-md-8 textContent">';
				  echo '<!-- introduces page-->';
				  echo '<div class="page_intro">';
					echo '<h2><em>Hi there!</em></h2>';
				  echo '</div>';
				  echo '<!-- page information -->';
				  echo '<div class="description">';
					echo '<!-- about me section -->';
					echo '<h3>About me</h3>';
					echo '<p>';
					 echo ' My name is <strong>Christa J. Baca</strong>. I\'m currently
					  pursuing a Computer Science degree at UTSA. I\'m more of an artist
					  at heart, so while I do enjoy some of the lower-level interactions
					  with computers, honestly I just way prefer the UI side of things.
					  I hope to use a lot of what I learn in this class to make websites
					  on my own, ones that are hopefully more mobile friendly (which I
					  struggle with at the moment).';
					echo '</p>';
					echo '<!-- likes & hobbies list section -->';
					echo '<h3>Likes &amp Hobbies</h3>';
					echo '<ul>';
					  echo '<li>3D Printing</li>';
					  echo '<li>Video Games</li>';
					  echo '<li>Dogs</li>';
					  echo '<li>Pokemon Card Collecting</li>';
					  echo '<li>Fashion</li>';
					  echo '<li>Traditional Indonesian Dance</li>';
					echo '</ul>';
				  echo '</div>';
				echo '</div>';
			  echo '</div>';

			  echo '<!-- contains images for home page -->';
			  echo '<div class="row homeRow">';
				echo '<!-- image of my dog -->';
				echo '<div class="col-md-4">';
				  echo '<img
					class="homeImage"
					src="assets/images/dog.png"
					width="333"
					height="233"
					alt="home page icon image"
				  />';
				echo '</div>';
				echo '<!-- image with me in dance group -->';
				echo '<div class="col-md-4">';
				  echo '<img
					class="homeImage"
					src="assets/images/dance.jpg"
					width="333"
					height="233"
					alt="home page icon image"
				  />';
				echo '</div>';
				echo '<!-- pokemon cards image -->';
				echo '<div class="col-md-4">';
				  echo '<img
					class="homeImage"
					src="assets/images/pokemon_cards.jpg"
					width="333"
					height="233"
					alt="home page icon image"
				  />';
				echo '</div>';
			  echo '</div>';
			  echo '<div class="row profile">';
				echo '<!-- baab background color = #fb5cab if i plan to re-use later -->';
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

			echo '<!-- footer/end of page: note that this is positioned relative to page information/container;
			so currently it may not touch the bottom for larger monitors or the bottom of vertical screens (i.e. phones)-->';
			echo '<footer><h4>Thank you so much for stopping by!</h4></footer>';

?>