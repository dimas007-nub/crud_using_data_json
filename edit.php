<?php
	//get the index from URL
	$index = $_GET['index'];

	//get json data
	$data = file_get_contents('data.json');
	$data_array = json_decode($data);

	//assign the data to selected index
	$row = $data_array[$index];

?>
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
		<input type="text" id="No" name="No" value="<?php echo $row->No; ?>">
	</p>
	<p>
		<label for="Keyword">Keyword</label>
		<input type="text" id="Keyword" name="Keyword" value="<?php echo $row->Keyword; ?>">
	</p>
	<p>
		<label for="NamaJurnal">NamaJurnal</label>
		<input type="text" id="NamaJurnal" name="NamaJurnal" value="<?php echo $row->NamaJurnal; ?>">
	</p>
	<p>
		<label for="Instansi">Instansi</label>
		<input type="text" id="Instansi" name="Instansi" value="<?php echo $row->Instansi; ?>">
	</p>
	<p>
		<label for="Website">Website</label>
		<input type="text" id="Website" name="Website" value="<?php echo $row->Website; ?>">
	</p>
	<p>
		<label for="WaktuTerbit">WaktuTerbit</label>
		<input type="text" id="WaktuTerbit" name="WaktuTerbit" value="<?php echo $row->WaktuTerbit; ?>">
	</p>
	<p>
		<label for="Biaya">Biaya</label>
		<input type="text" id="Biaya" name="Biaya" value="<?php echo $row->Biaya; ?>">
	</p>
	<p>
		<label for="SkorSinta">SkorSinta</label>
		<input type="text" id="SkorSinta" name="SkorSinta" value="<?php echo $row->SkorSinta; ?>">
	</p>
	<p>
		<label for="TahunData">TahunData</label>
		<input type="text" id="TahunData" name="TahunData" value="<?php echo $row->TahunData; ?>">
	</p>
	<input type="submit" name="save" value="Save">
</form>

<?php
	if(isset($_POST['save'])){
		//set the updated values
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

		//update the selected index
		$data_array[$index] = $input;

		//encode back to json
		$data = json_encode($data_array, JSON_PRETTY_PRINT);
		file_put_contents('data.json', $data);

		header('location: index.php');
	}
?>
</body>
</html>