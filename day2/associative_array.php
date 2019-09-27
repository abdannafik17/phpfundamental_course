<!DOCTYPE html>
<html>
<head>
	<title>Associative Array</title>
</head>
<body>
	<?php
		$peg = array(
				'91161194ZY' => 'Abdan Nafik',
				'92161194ZY' => 'Anni Putri',
				'80161295ZY' => 'Budi Kris'
			);

		foreach ($peg as $key => $value) {
			echo 'Pegawai dengan NIP '.$key.' : '.$value.'<br/>';
		}
	?>
</body>
</html>