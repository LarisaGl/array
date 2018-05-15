<?php

$continents= array(
	"Europe" => array ("Canis lupus", "Martes"),
	"Asia" => array ("Ursus arctos", "Ailuropoda melanoleuca"),
	"Africa" => array ("Panthera leo", "Rhinocerotidae"),
	"Australia" => array ("Macropus", "Phascolarctos cinereus"),
	"NorthAmerica" => array ("Canis latrans", "Hyaenidae"),
	"South America" => array ("Cingulata", "Myrmecophagidae"),
	"Antarctica" => array ("Ursus maritimus", "Spheniscidae"),
	);

	$count=[];
	$full_array=[];

	foreach ($continents as $key => $value) {
		$cont=$key;
		foreach ($value as $animal) {
			$count=str_word_count($animal);
			if ($count==2) {
				$full_array[]=$animal;
			}
		}
	}

	echo "<pre>";
	print_r($full_array);
	echo "</pre>";

	$first=[];
	$second=[];
	$exp=[];

	foreach ($full_array as $key => $value) {
		$exp=explode(" ", $value);
		$first[]=$exp[0];
		$second[]=$exp[1];
	}

	shuffle($first);
	shuffle($second);

	echo "<pre>";
	print_r($first);
	echo "</pre>";	

	echo "<pre>";
	print_r($second);
	echo "</pre>";

	$finish=[];

	foreach ($first as $key => $value) {
		$finish[$key]=$value." ".$second[$key];
	}

	echo "<pre>";
	print_r($finish);
	echo "</pre>";

?>