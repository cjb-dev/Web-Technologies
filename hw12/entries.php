<script src="assets/js/jquery-3.5.1.js"></script>
<?php
	

	echo '<div class="container content">';
	echo '<h3 align="center"><strong>Contact Form Data Results</strong></h3>';
	


	echo '<table class="tableData" border="1" width="100%">';
	echo '<tr>';
	echo '<th class="rowData">Record #</th><th class="rowData">First Name</th><th class="rowData">Last Name</th><th class="rowData">Email</th><th class="rowData">Username</th><th class="rowData">Comments</th>';
	echo '</tr>';
	echo '<tbody id="entries">';
	echo '</tbody>';
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
<script>
function refresh_div() {
	$.ajax({
		type: 'post',
		url: 'https://ec2-18-220-17-115.us-east-2.compute.amazonaws.com/hw12/query.php',
		success: function(data) {
			$('#entries').html(data);
		}
	});
};
setInterval(function(){ refresh_div(); }, 500 );
//refresh_div();
</script>

