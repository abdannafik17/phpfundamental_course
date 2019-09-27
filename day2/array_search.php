<?php
	$bank = array(
				array(
					'bank_key' => 'BK0001', 
					'bank_name' => 'BRI'
				),
				array(
					'bank_key' => 'BK0002', 
					'bank_name' => 'BNI'
				),
				array(
					'bank_key' => 'BK0003', 
					'bank_name' => 'Mandiri'
				),
				array(
					'bank_key' => 'BK0004', 
					'bank_name' => 'Bukopin'
				),
			);
	$peg = 	array(
				array(
					'nip' => '123456',
					'nama' => 'Fulan',
					'nominal' => '12.000.000',
					'bank_key' => 'BK0001'
				),
				array(
					'nip' => '123457',
					'nama' => 'Putri',
					'nominal' => '10.000.000',
					'bank_key' => 'BK0001'
				),
				array(
					'nip' => '654321',
					'nama' => 'Huda',
					'nominal' => '18.000.000',
					'bank_key' => 'BK0002'
				),
				array(
					'nip' => '753126',
					'nama' => 'Fitri',
					'nominal' => '8.000.000',
					'bank_key' => 'BK0003'
				),
				array(
					'nip' => '758941',
					'nama' => 'Huda',
					'nominal' => '7.000.000',
					'bank_key' => 'BK0004'
				),
			);
	$b=array()
	$foreach ($bank as $x) {
		
	}
	
	$dataPeg = array();
	foreach ($peg as $value) {
		$dataPeg[$value['nip']]['bank_key'] = $value['bank_key'];
	}

	foreach ($dataPeg as $key => $v) {
		foreach ($v as $k => $rs) {
			echo $key.'-'.$rs.'<br/>';
		}
		
	}
	// var_dump($dataPeg);
	
?>