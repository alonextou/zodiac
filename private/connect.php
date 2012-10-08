<?php

try {
	$file_db = new PDO('sqlite:../data/table.sqlite3');
	$file_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
	echo $e->getMessage();
}