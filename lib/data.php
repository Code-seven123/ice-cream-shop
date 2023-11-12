<?php 
$file = glob("../*");
$json = file_get_contents($file[2]);

$data = json_decode($json, true);

/*$data2 = [
	$data["cone"],
	$data["stick"],
	$data["sundae"],
	$data["gelato"],
];*/
echo "<pre>";
//print_r($d);
var_dump($data);
?>