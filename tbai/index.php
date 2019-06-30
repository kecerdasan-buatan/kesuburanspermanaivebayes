<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM tb_statlog ORDER BY id ASC"); // using mysqli_query instead
?>

<html>
<head>	
	<title>Sistem Pakar Kesuburan Sperma</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
<!-- <a href="add.html">Add New Data</a><br/><br/> -->

<div class="container-fluid">
	<div class="row">
		<div class="col-8">
			<table class="table table-striped">
				<thead>
    				<tr>
						<th scope="col">Umur</th>
						
						<th scope="col">PenyakitKanak</th>
						<th scope="col">Kecelakaan</th>
						<th scope="col">Bedah</th>
						<th scope="col">DemamTinggi</th>
						<th scope="col">Merokok</th>
						<th scope="col">HasilDiagnosa</th>
    				</tr>	
  				</thead>
				  <tbody>
				  	<tr>
					  <?php 
						//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
						while($res = mysqli_fetch_array($result)) { 		
						echo "<tr>";
						echo "<td>".$res['Umur']."</td>";
						echo "<td>".$res['PenyakitKanak']."</td>";
						echo "<td>".$res['Kecelakaan']."</td>";	
						echo "<td>".$res['Bedah']."</td>";
						echo "<td>".$res['DemamTinggi']."</td>";
						echo "<td>".$res['Merokok']."</td>";
						echo "<td>".$res['HasilDiagnosa']."</td>";
						// echo "<td><a href=\"edit.php?id=$res[ID]\">Edit</a> | <a href=\"delete.php?id=$res[ID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
						}
						?>
					</tr>
				  </tbody>
			</table>
		</div>

		<div class="col-4">	
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
			<h3>Input Nilai Data Uji</h3>
			<form action="proses.php" method="post" name="form1">
				<table width="50%" border="0">
				<tr> 
					<td>Umur</td>
					<td><input type="number" name="Umur"></td>
				</tr>
				<tr> 
					<td>Penyakit Masa Kanak</td>
					<td><input type="number" name="PenyakitKanak"></td>
				</tr>
				<tr> 
					<td>Kecelakaan</td>
					<td><input type="number" name="Kecelakaan"></td>
				</tr>
				<tr> 
					<td>Bedah</td>
					<td><input type="number" name="Bedah"></td>
				</tr>
				<tr> 
					<td>Demam Tinggi </td>
					<td><input type="number" name="DemamTinggi"></td>
				</tr>
				<tr> 
					<td>Merokok </td>
					<td><input type="number" name="Merokok"></td>
				</tr>
				<tr> 
				<tr></tr>
				<td></td>
				<td></td>
				<tr> 
					<td></td>
					<td><a href="proses.php"><input type="submit" class="btn btn-primary" name="Submit" value="Proses"></a><br/><br/></td>
				</tr>
				</table>
			</form>
		
			
		</div>
	</div>
</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</body>
</html>
