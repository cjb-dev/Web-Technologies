<?php
    echo '<!-- contains overall page content below navigation bar-->';
    echo '<div class="container content">';
      echo '<!-- row with initial information: contains baab icon and intro text-->';
      echo '<div class="row">';
        echo '<!-- my mascot image -->';
        echo '<div class="col-md-4 icon">';
          echo '<img
            class="baab"
            src="assets/images/baab_icon_projects.png"
            width="350"
            height="350"
            alt="home page icon image"
          />';
        echo '</div>';
        echo '<!-- contains general page description to the right of the baab icon -->';
        echo '<div class="col-md-8 textContent">';
          echo '<!-- introduces page-->';
          echo '<div class="page_intro">';
            echo '<h2><em>My Coding Projects</em></h2>';
          echo '</div>';
          echo '<!-- page information -->';
          echo '<div class="description">';
            echo '<h3>Description</h3>';
            echo '<p>
              Here are some projects I\'ve worked on over the years both in and
              outside of the classroom. Luckily, by the end of this semester, I
              should be able to add quite a few finished products to this list!';
            echo '</p>';
            echo '<div class="row">';
              echo '<!-- row showcasing two lists of different skills -->';
              echo '<div class="col-md-6">';
                echo '<!-- coding languages section -->';
                echo '<h3>Coding languages</h3>';
                echo '<ul>';
                  echo '<li>Python</li>';
                  echo '<li>Java</li>';
                  echo '<li>C/C++</li>';
                  echo '<li>C#</li>';
                  echo '<li>HTML5/CSS with Bootstrap</li>';
                echo '</ul>';
              echo '</div>';
              echo '<div class="col-md-6">';
                echo '<!-- environments & tools section -->';
                echo '<h3>Environments &amp Tools</h3>';
                echo '<ul>';
                  echo '<li>Unity</li>';
                  echo '<li>Visual Studio Code</li>';
                  echo '<li>Eclipse</li>';
                  echo '<li>Google Colab</li>';
                  echo '<li>Adobe Dreamweaver</li>';
                echo '</ul>';
              echo '</div>';
            echo '</div>';
          echo '</div>';
        echo '</div>';
      echo '</div>';
      echo '<!-- virus game project -->';
      echo '<div class="row virusGame">';
        echo '<p class="projTitle">';
          echo '<strong>Virus Video Game</strong>, Spring 2022';
          echo '<em>(Created with Unity, Blender, and C#)</em>';
        echo '</p>';
        echo '<p>
          I was the project leader for my Game Development class group project.
          Our idea was to create a low-poly 3D game in which the playable
          character has the ability to spread a deadly virus to enemy NPCs. I
          helped with narrowing down group ideas, coordinating meetings, writing
          documentation, and encouraging communication with all members. Along
          with developing scripts for core UI components such as the main menu,
          I also created original 3D models, generated their rigs, and made
          their own idle/walking animations.';
        echo '</p>';
        echo '<!-- images for Virus Video Game project -->';
        echo '<div class="row projImages">';
          echo '<div class="col-md-5">';
            echo '<img
              class="gameProjImage"


              src="assets/images/game_models.png"
              width="360"
              height="202"
              alt="Image of 3D models I created for Virus Video Game project"
            />';
          echo '</div>';
          echo '<div class="col-md-5">';
            echo '<img
              class="gameProjImage"
              src="assets/images/gameplay.png"
              width="360"
              height="202"
              alt="Image of gameplay for Virus Video Game project"
            />';
          echo '</div>';
        echo '</div>';
      echo '</div>';
      echo '<!-- hackathon project -->';
      echo '<div class="row hackathon">';
        echo '<p class="projTitle">';
          echo '<strong>Username Generator Website</strong>, Spring 2022';
          echo '<em>(Created with JavaScript, HTML/CSS with Bootstrap)</em>';
        echo '</p>';
        echo '<p>
          As part of a Hackathon project in a team of two people, I helped
          developed the core interface and functionality of a username generator
          website, hosted using GitHub Pages. Names are generated using a hash
          key for the inputted string, with an adjective followed by a noun for
          the random name output.';
        echo '</p>';
        echo '<!-- image for Username Generator Website -->';
        echo '<div class="projImages">';
          echo '<img
            class="hackImage"
            src="assets/images/hackathon_project.jpg"
            width="380"
            height="245"
            alt="Screenshot of Hackathon Username Generator Website project"
          />';
        echo '</div>';
      echo '</div>';
      echo '<!-- base conversion calculator project -->';
      echo '<div class="row baseConverter">';
        echo '<p class="projTitle">';
          echo '<strong>Base Conversion Calculator and Quiz Application</strong>, Fall
          2020 <em>(Created with Java and JavaFX)</em>';
        echo '</p>';
        echo '<p>
          Developed with a team to create a Base Conversion application for CS
          students to study for common problems encountered in math-related
          courses for the degree.';
        echo '</p>';
        echo '<!-- image for Base Conversion Calculator project -->';
        echo '<div class="projImages">';
          echo '<img
            class="calcImage"
            src="assets/images/quiz_app.png"
            width="380"
            height="245"
            alt="Screenshot of base conversion quiz application"
          />';
        echo '</div>';
      echo '</div>';
      echo '<!-- card game project -->';
      echo '<div class="row cardGame">';
        echo '<p class="projTitle">';
          echo '<strong>Card Video Game</strong>, Summer 2022';
          echo '<em>(Created with Unity, Krita, C#)</em>';
        echo '</p>';
        echo '<p>
          This is a personal project that I am working on with my best friend,
          based off a comic series that we\'re working on together. It\'s still a
          work in progress, but as of now, I\'ve created some basic UI scripts
          along with all of the assets, including the textures, 3D card models,
          and unique card artwork.';
        echo '</p>';
        echo '<!-- table for card game project to showcase image assets -->';
        echo '<div class="projImages">';
          echo '<table class="card_table">';
            echo '<tr>';
              echo '<th class="card_table_header" align="center" colspan="16">';
                echo '<p>Card Game Assets:</p>';
              echo '</th>';
            echo '</tr>';
            echo '<tr>';
              echo '<td colspan="4">';
                echo '<img
                  class="tableImage"
                  src="assets/images/card_01.png"
                  width="102"
                  height="149"
                  alt="Image of card asset in personal Card Video Game project"
                />';
              echo '</td>';
              echo '<td colspan="4">';
                echo '<img
                  class="tableImage"
                  src="assets/images/card_02.png"
                  width="102"
                  height="149"
                  alt="Image of card asset in personal Card Video Game project"
                />';
              echo '</td>';
              echo '<td colspan="4">';
                echo '<img
                  class="tableImage"
                  src="assets/images/card_03.png"
                  width="102"
                  height="149"
                  alt="Image of card asset in personal Card Video Game project"
                />';
              echo '</td>';
              echo '<td colspan="4">';
                echo '<img
                  class="tableImage"
                  src="assets/images/card_04.png"
                  width="102"
                  height="149"
                  alt="Image of card asset in personal Card Video Game project"
                />';
              echo '</td>';
            echo '</tr>';
            echo '<tr>';
              echo '<td colspan="4">';
                echo '<img
                  class="tableImage"
                  src="assets/images/card_05.png"
                  width="102"
                  height="149"
                  alt="Image of card asset in personal Card Video Game project"
                />';
              echo '</td>';
              echo '<td colspan="4">';
                echo '<img
                  class="tableImage"
                  src="assets/images/card_06.png"
                  width="102"
                  height="149"
                  alt="Image of card asset in personal Card Video Game project"
                />';
              echo '</td>';
              echo '<td colspan="4">';
                echo '<img
                  class="tableImage"
                  src="assets/images/card_07.png"
                  width="102"
                  height="149"
                  alt="Image of card asset in personal Card Video Game project"
                />';
              echo '</td>';
              echo '<td colspan="4">';
                echo '<img
                  class="tableImage"
                  src="assets/images/card_08.png"
                  width="102"
                  height="149"
                  alt="Image of card asset in personal Card Video Game project"
                />';
              echo '</td>';
            echo '</tr>';
          echo '</table>';
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

    echo '<!-- footer/end of page -->';
    echo '<footer><h4>Thank you so much for stopping by!</h4></footer>';
?>