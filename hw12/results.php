<?php
	include("functions.php");

	echo '<div class="container content">';
	echo '<h3 align="center"><strong>Contact Form Data Results</strong></h3>';
	$dblink=db_connect("contact_data");
	$sql="Select * from `user_input` where 1";
	$result=$dblink->query($sql) or
		die("Something went wrogn with $sql".$dblink->error);

	echo '<table class="tableData" border="1" width="100%">';
	echo '<tr>';
	echo '<th class="rowData">Record #</th><th class="rowData">First Name</th><th class="rowData">Last Name</th><th class="rowData">Email</th><th class="rowData">Username</th><th class="rowData">Comments</th>';
	echo '</tr>';
	while ($data=$result->fetch_array(MYSQLI_ASSOC)) {
		echo '<tr>';
		
		if ($data['auto_id'] == "")
			echo '<td class="cellData">N/A</td>';
		else
			echo '<td class="cellData">'.$data['auto_id'].'</td>';
		
		if ($data['first_name'] == "")
			echo '<td class="cellData">N/A</td>';
		else
			echo '<td class="cellData">'.$data['first_name'].'</td>';
		
		if ($data['last_name'] == "")
			echo '<td class="cellData">N/A</td>';
		else
			echo '<td class="cellData">'.$data['last_name'].'</td>';
		
		if ($data['email'] == "")
			echo '<td class="cellData">N/A</td>';
		else
			echo '<td class="cellData">'.$data['email'].'</td>';
		
		if ($data['username'] == "")
			echo '<td class="cellData">N/A</td>';
		else
			echo '<td class="cellData">'.$data['username'].'</td>';
		
		if ($data['comments'] == "")
			echo '<td class="cellData">N/A</td>';
		else
			echo '<td class="cellData">'.$data['comments'].'</td>';
		
		echo '</tr>';
	}
	echo '</table>';

	
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
?>