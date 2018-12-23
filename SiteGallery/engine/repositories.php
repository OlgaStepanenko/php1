<?php

function getGallery1($mysqliConnect, $orderDIR = 'ABC') {
	$sql = sprintf("SELECT * FROM gallery WHERE id <=9", $orderDIR);
	$stmt = mysqli_query($mysqliConnect, $sql);

	$galleryes = [];
	while ($row = mysqli_fetch_assoc($stmt)) {
        $galleryes[] = $row;
				}
	return $galleryes;
}

function getGallery2($mysqliConnect, $orderDIR = 'ABC') {
	$sql = sprintf("SELECT * FROM gallery WHERE id >=10", $orderDIR);
	$stmt = mysqli_query($mysqliConnect, $sql);

	$galleryes = [];
	while ($row = mysqli_fetch_assoc($stmt)) {
        $galleryes[] = $row;
				}
	return $galleryes;
}