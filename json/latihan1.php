<?php 

	
// 	$mahasiswa =[
// 		[

// 			"nama" => "nurul",
// 			"nrp" => "173040092",
// 			"email" => "nurul@mail"
// 		],
// 		[

// 			"nama" => "Fauziah",
// 			"nrp" => "17304992",
// 			"email" => "fauziah@mail"
// 		],

// ];

	$dbh = new PDO('mysql:host=localhost;dbname=phpmvc', 'root', '');
	$db = $dbh->prepare('SELECT * FROM mahasiswa');
	$db->execute();
	$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

	$data = json_encode($mahasiswa);
	echo $data;

