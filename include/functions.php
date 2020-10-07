<?php

function json_File_To_Array(string $filename){
	$string=file_get_contents($filename);
	return json_decode($string,true);
}


function affichage(array $values, ?string $title=null):void{
	if($title!=null){
		echo "\nNom du fichier : $title\n\n";
	}
	foreach ($values as $elements) {
		foreach ($elements as $name => $value) {
			echo "$name : $value\t";
		}
		echo "\n";
	}
}

function loadanddump(string $filename):array{
	$values=json_File_To_Array($filename);
	affichage($values, basename($filename));
	return $values;
}

function employer_par_service(array $employees, string $service):array{
	$results=[];
	foreach ($employees as $emp) {
		if($emp['service']==$service){
			$results[]=$emp;
		}
	}
	return $results;
}

function soft_use_employer(array $service, string $soft):array{
	$results=[];
	foreach ($service as $emp) {
		if($emp['compta']==$soft){
			$results[]=$emp;
		}
	}
	return $results;
}