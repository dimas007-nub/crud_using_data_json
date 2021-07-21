<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CRUD Operation on JSON File using PHP</title>
</head>
<body>
<form method="POST">
	<a href="index.php">Back</a>
		<p>
		<label for="No">No</label>
		<input type="text" id="No" name="No">
	</p>
	<p>
		<label for="Keyword">Keyword</label>
		<input type="text" id="Keyword" name="Keyword">
	</p>
	<p>
		<label for="NamaJurnal">NamaJurnal</label>
		<input type="text" id="NamaJurnal" name="NamaJurnal">
	</p>
	<p>
		<label for="Instansi">Instansi</label>
		<input type="text" id="Instansi" name="Instansi">
	</p>
	<p>
		<label for="Website">Website</label>
		<input type="text" id="Website" name="Website">
	</p>
	<p>
		<label for="WaktuTerbit">WaktuTerbit</label>
		<input type="text" id="WaktuTerbit" name="WaktuTerbit">
	</p>
	<p>
		<label for="Biaya">Biaya</label>
		<input type="text" id="Biaya" name="Biaya">
	</p>
	<p>
		<label for="SkorSinta">SkorSinta</label>
		<input type="text" id="SkorSinta" name="SkorSinta">
	</p>
	<p>
		<label for="TahunData">TahunData</label>
		<input type="text" id="TahunData" name="TahunData">
	</p>
	<input type="submit" name="save" value="Save">
</form>

<?php
	if(isset($_POST['save'])){
		//open the json file
		$data = file_get_contents('data.json');
		$data = json_decode($data);

		//data in out POST
		$input = array(
			'No' => $_POST['No'],
			'Keyword' => $_POST['Keyword'],
			'NamaJurnal' => $_POST['NamaJurnal'],
			'Instansi' => $_POST['Instansi'],
			'Website' => $_POST['Website'],
			'WaktuTerbit' => $_POST['WaktuTerbit'],
			'Biaya' => $_POST['Biaya'],
			'SkorSinta' => $_POST['SkorSinta'],
			'TahunData' => $_POST['TahunData']
		);

		//append the input to our array
		$data[] = $input;
		//encode back to json
		$data = json_encode($data, JSON_PRETTY_PRINT);
		file_put_contents('data.json', $data);

		header('location: index.php');
	}
?>
</body>
</html>