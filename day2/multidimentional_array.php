<!DOCTYPE html>
<html>
<head>
	<title>Multidimentional Array</title>
</head>
<body>
	<?php 
		$peg = array(
				'91161194ZY' => array(
									'nama' => 'Abdan Nafik',
									'umur' => '28 Tahun',
									'Unit' => 'Kantor Pusat',
									'gender' => 'Laki - Laki',
								),
				'92161194ZY' => array(
									'nama' => 'Anni Putri',
									'umur' => '27 Tahun',
									'Unit' => 'UID Jatim',
									'gender' => 'Perempuan',
								),
				'80161295ZY' => array(
									'nama' => 'Budi Kris',
									'umur' => '39 Tahun',
									'Unit' => 'UID Jabar',
									'gender' => 'Laki - Laki',
								)
			);
		foreach ($peg as $key => $value) {
			foreach ($value as $k => $rs) {
				echo 'NIP : '.$key.', '.$k.' : '.$rs.'<br/>';
			}
		}
	?>
</body>
</html>