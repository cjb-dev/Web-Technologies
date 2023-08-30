<?php
	include("functions.php");
	$dblink=db_connect("contact_data");
	$sql="Select * from `user_input` where 1";
	$result=$dblink->query($sql) or
		die("Something went wrogn with $sql".$dblink->error);
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
?>