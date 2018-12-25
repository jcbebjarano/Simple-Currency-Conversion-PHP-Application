
<?php
//Include the database configuration file
include('controller/conn.php');

//Fetch all the country data
$query = $conn->query("SELECT currency1, currency2 FROM pairs");

//Count total number of rows
$rowCount = $query->num_rows;
?>
<html>

<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="js/manage.js"></script>
	<!-- Stylesheets -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<!--// Stylesheets -->
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">
	<!--//fonts-->
</head>

<body>

	<div class="w3ls-login">
		<form  method="post">		
			<div id="base">
				<b>Currency 1</b>
				<select id="currency1">
					<option></option>
				</select>
				<b>Currency 2</b>
				<select id="currency2">
					<option></option>
				</select>
				<BUTTON id="addPairs">+</BUTTON>
			</div>

			<table id="tpanel" class="w3-table-all" border="6">
				<thead>
					<tr class="w3-green">
						<th>A</th>
						<th>B</th>
						<th>--</th>
					</tr>
				</thead>
				<tbody>
					<?php
					if($rowCount > 0){
						while($row = $query->fetch_assoc()){
							echo '<tr>';
							echo '<tr><td><input type="text" id="pair1" value="'.$row['currency1'].'" disabled></td>';
							echo '<td><input type="text" id="pair2" value="'.$row['currency2'].'" disabled></td>';
							echo '<td><BUTTON id="removePairs">--</BUTTON></td>';
							echo '</tr>';
						}
					}
					?>



				</tbody>
			</table>
		</form>

		

	</div>



</body>
</html>


