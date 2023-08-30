<?php
    echo '<!-- contains overall page content below navigation bar-->';
    echo '<div class="container content">';
      echo '<!-- row with initial information: contains baab icon and intro text-->';
      echo '<div class="row">';
        echo '<!-- my mascot image -->';
        echo '<div class="col-md-4 icon">';
          echo '<img
            class="baab"
            src="assets/images/baab_icon_artwork.png"
            width="350"
            height="350"
            alt="home page icon image"
          />';
        echo '</div>';
        echo '<div class="col-md-8 textContent">';
          echo '<!-- introduces page -->';
          echo '<div class="page_intro">';
            echo '<h2><em>Check out my illustrations!</em></h2>';
          echo '</div>';
          echo '<!-- page information -->';
          echo '<div class="description">';
            echo '<!-- prompt user to check my art profile -->';
            echo '<h3>Portfolio</h3>';
            echo '<p>';
              echo 'If you are interested in viewing my non-CS work, please feel free
              to check out my <em>Art Station</em> account';
              echo '<!-- EXTERNAL LINK: Link that opens new tab leading to my ArtStation account. -->';
              echo '<!-- also uses inline-css since this is a one-time used element -->';
              echo '<strong>
                <a
                  style="color: rgb(255, 2, 82)"
                  id="buttabun"
                  href="https://buttabun.artstation.com/"
                  target="_blank"
                  >@Buttabun</a
                > </strong>.';
              echo '<!-- sub-script that also uses inline-css since this is a one-time used element -->';
              echo '<sub><em style="color: rgb(190, 0, 60)"
                  >(I\'ve only uploaded a few things so far, since I made this
                  account like very recently, but I plan to upload more
                  soon!)</em>';
                echo '></sub>';
            echo '</p>';
            echo '<!-- environments & tools section -->';
            echo '<h3>Environments &amp Tools</h3>';
            echo '<ul>';
              echo '<li>Adobe Illustrator, some Photoshop</li>';
              echo '<li>Krita</li>';
              echo '<li>Inkskape</li>';
              echo '<li>Autodesk</li>';
              echo '<li>Blender</li>';
            echo '</ul>';
          echo '</div>';
        echo '</div>';
      echo '</div>';
      echo '<!-- **note that I changed images so I could show a larger one for the page layout. -->';
      echo '<!-- showcases a sample image of my work, not yet uploaded elsewhere -->';
      echo '<div class="row artSample">';
        echo '<h3>Sample of my work:</h3>';
        echo '<img
          id="charDesign"
          src="assets/images/character_designs_01.png"
          width="998"
          height="480"
          alt="\'PxP Character Design Concept 02\', illustration by Buttabun on ArtStation"
        />';
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

    echo '<!-- footer/end of page -->';
    echo '<footer><h4>Thank you so much for stopping by!</h4></footer>';
?>