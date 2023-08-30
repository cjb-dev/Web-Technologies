<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <!-- index/home page -->
    <title>Home Page</title>
    <!-- links to stylesheets -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
  </head>

  <body>
    <!-- changed banner to stay consistent throughout; but tabs should be more clearer now-->
    <div class="banner"><h1>Christa's Website</h1></div>
    <!-- added a redundant navigation class so I can work with the navigation bar outside of Bootstrap pre-defined classes-->
    <div class="row navbar navigation">
      <div class="col-md-3 navActive">
        <a class="navLink" href="index.php">Home</a>
      </div>
      <div class="col-md-3 navItem">
        <a class="navLink" href="projects.php">Projects</a>
      </div>
      <div class="col-md-3 navItem">
        <a class="navLink" href="artwork.php">Artwork</a>
      </div>
      <div class="col-md-3 navItem">
        <a class="navLink" href="contact.php">Contact</a>
      </div>
    </div>
    <!-- contains overall page content below navigation bar-->
    <div class="container content">
      <!-- row with initial information: contains baab icon and intro text-->
      <div class="row">
        <!-- my mascot image -->
        <div class="col-md-4 icon">
          <img
            class="baab"
            src="assets/images/baab_icon_home.png"
            width="350"
            height="350"
            alt="home page icon image"
          />
        </div>
        <!-- contains general page description to the right of the baab icon -->
        <div class="col-md-8 textContent">
          <!-- introduces page-->
          <div class="page_intro">
            <h2><em>Hi there!</em></h2>
          </div>
          <!-- page information -->
          <div class="description">
            <!-- about me section -->
            <h3>About me</h3>
            <p>
              My name is <strong>Christa J. Baca</strong>. I'm currently
              pursuing a Computer Science degree at UTSA. I'm more of an artist
              at heart, so while I do enjoy some of the lower-level interactions
              with computers, honestly I just way prefer the UI side of things.
              I hope to use a lot of what I learn in this class to make websites
              on my own, ones that are hopefully more mobile friendly (which I
              struggle with at the moment).
            </p>
            <!-- likes & hobbies list section -->
            <h3>Likes &amp Hobbies</h3>
            <ul>
              <li>3D Printing</li>
              <li>Video Games</li>
              <li>Dogs</li>
              <li>Pokemon Card Collecting</li>
              <li>Fashion</li>
              <li>Traditional Indonesian Dance</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- contains images for home page -->
      <div class="row homeRow">
        <!-- image of my dog -->
        <div class="col-md-4">
          <img
            class="homeImage"
            src="assets/images/dog.png"
            width="333"
            height="233"
            alt="home page icon image"
          />
        </div>
        <!-- image with me in dance group -->
        <div class="col-md-4">
          <img
            class="homeImage"
            src="assets/images/dance.jpg"
            width="333"
            height="233"
            alt="home page icon image"
          />
        </div>
        <!-- pokemon cards image -->
        <div class="col-md-4">
          <img
            class="homeImage"
            src="assets/images/pokemon_cards.jpg"
            width="333"
            height="233"
            alt="home page icon image"
          />
        </div>
      </div>
      <div class="row profile">
        <!-- baab background color = #fb5cab if i plan to re-use later -->
        <!-- EXTERNAL IMAGE: Links to the profile image associated with my ArtStation account. -->
        <img
          class="profilePic"
          src="https://cdna.artstation.com/p/users/avatars/006/491/316/large/b2685b287b561b908603f3c663a354e0.jpg?1662489991"
          width="100"
          height="100"
          alt="'PxP Character Design Concept 02', illustration by Buttabun on ArtStation"
        />
      </div>
    </div>

    <!-- footer/end of page: note that this is positioned relative to page information/container;
    so currently it may not touch the bottom for larger monitors or the bottom of vertical screens (i.e. phones)-->
    <footer><h4>Thank you so much for stopping by!</h4></footer>
  </body>
</html>
