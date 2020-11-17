<?php

try {
	$db = new PDO ("mysql:host=localhost;dbname=nlp;charset=UTF8","root","12345678");
	//echo "Veritabanı bağlanma işlemi başarılı";
}
catch (PDOExpception $e) {
	echo $e->getMessage();
}

?>