<?php 

	$name=trim(@$_GET['name']);

	if($name){
		$text="my name is {$name}";
	}else{
		$text="please set your name";
	}
	echo $text;


?>

