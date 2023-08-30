<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <!-- artwork page -->
    <title>Artwork</title>
    <!-- links to stylesheets -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
  </head>

  <body>
    <!-- page banner -->
    <div class="banner"><h1>Christa's Website</h1></div>
    <!-- navigation bar -->
    <div class="row navbar navigation">
      <div class="col-md-3 navItem">
        <a class="navLink" href="index.php">Home</a>
      </div>
      <div class="col-md-3 navItem">
        <a class="navLink" href="projects.php">Projects</a>
      </div>
      <div class="col-md-3 navActive">
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
            src="assets/images/baab_icon_artwork.png"
            width="350"
            height="350"
            alt="home page icon image"
          />
        </div>
        <div class="col-md-8 textContent">
          <!-- introduces page -->
          <div class="page_intro">
            <h2><em>Check out my illustrations!</em></h2>
          </div>
          <!-- page information -->
          <div class="description">
            <!-- prompt user to check my art profile -->
            <h3>Portfolio</h3>
            <p>
              If you are interested in viewing my non-CS work, please feel free
              to check out my <em>Art Station</em> account
              <!-- EXTERNAL LINK: Link that opens new tab leading to my ArtStation account. -->
              <!-- also uses inline-css since this is a one-time used element -->
              <strong>
                <a
                  style="color: rgb(255, 2, 82)"
                  id="buttabun"
                  href="https://buttabun.artstation.com/"
                  target="_blank"
                  >@Buttabun</a
                > </strong
              >.
              <!-- sub-script that also uses inline-css since this is a one-time used element -->
              <sub
                ><em style="color: rgb(190, 0, 60)"
                  >(I've only uploaded a few things so far, since I made this
                  account like very recently, but I plan to upload more
                  soon!)</em
                ></sub
              >
            </p>
            <!-- environments & tools section -->
            <h3>Environments &amp Tools</h3>
            <ul>
              <li>Adobe Illustrator, some Photoshop</li>
              <li>Krita</li>
              <li>Inkskape</li>
              <li>Autodesk</li>
              <li>Blender</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- **note that I changed images so I could show a larger one for the page layout. -->
      <!-- showcases a sample image of my work, not yet uploaded elsewhere -->
      <div class="row artSample">
        <h3>Sample of my work:</h3>
        <img
          id="charDesign"
          src="assets/images/character_designs_01.png"
          width="998"
          height="480"
          alt="'PxP Character Design Concept 02', illustration by Buttabun on ArtStation"
        />
      </div>
      <!-- profile image near bottom of page -->
      <div class="row profile">
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

    <!-- footer/end of page -->
    <footer><h4>Thank you so much for stopping by!</h4></footer>
  </body>
</html>
