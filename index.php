<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CRUD Operation on JSON File using PHP</title>
</head>
<body>
<a href="add.php">Add</a>
<table border="1">
	<thead>
		<th>No</th>
		<th>Keyword</th>
		<th>NamaJurnal</th>
		<th>Instansi</th>
		<th>Website</th>
		<th>WaktuTerbit</th>
		<th>Biaya</th>
		<th>SkorSinta</th>
		<th>TahunData</th>
	</thead>
	<tbody>
		<?php
			//fetch data from json
			$data = file_get_contents('data.json');
			//decode into php array
			$data = json_decode($data);

			$index = 0;
			foreach($data as $row){
				echo "
					<tr>
						<td>".$row->No."</td>
						<td>".$row->Keyword."</td>
						<td>".$row->NamaJurnal."</td>
						<td>".$row->Instansi."</td>
						<td>".$row->Website."</td>
						<td>".$row->WaktuTerbit."</td>
						<td>".$row->Biaya."</td>
						<td>".$row->SkorSinta."</td>
						<td>".$row->TahunData."</td>
						<td>
							<a href='edit.php?index=".$index."'>Edit</a>
							<a href='delete.php?index=".$index."'>Delete</a>
						</td>
					</tr>
				";

				$index++;
			}
		?>
	</tbody>
</table>
</body>
</html>