<?php
echo '<!DOCTYPE html>';
echo '<html>';
  echo '<head>';
    echo '<meta charset="utf-8" />';
    echo '<!-- index/home page -->';
    echo '<title>Home Page</title>';
    echo '<!-- links to stylesheets -->';
    echo '<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" />';
    echo '<link href="assets/css/style.css" rel="stylesheet" type="text/css" />';
  echo '</head>';

  echo '<body>';
    
    echo '<div class="banner"><h1>Christa\'s Website</h1></div>';
    

	echo '<!-- navigation -->';
	if(isset($_REQUEST['page'])) 
		$page=$_REQUEST['page'];
	else
		$page="index";
	include("navigation.php");
  	
	switch($page){
		case "index":
			include("home.php");
			break;
			
		case "projects":
			include("projects.php");
			break;
			
		case "artwork":
			include("artwork.php");
			break;
			
		case "contact":
			include("contact.php");
			break;
		
		default:
			include("home.php");
			break;
			
}
echo '</body>';
echo '</html>';
?>