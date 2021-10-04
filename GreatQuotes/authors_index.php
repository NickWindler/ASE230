<?php
require('csv_util.php');

$authors = csvToArray('authors.csv');

print("Author List:");
for ($i = 0; $i < count($authors); $i++) {
	$author = $authors[$i][0] . " " . $authors[$i][1];
	print($i + 1 . "." . " " . $author . " ");
}
?>

