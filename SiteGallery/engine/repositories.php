<?php

function getGallery($mysqliConnect, $orderDIR = 'ABC') {
	$sql = sprintf("SELECT * FROM gallery WHERE id >0", $orderDIR);
	$stmt = mysql_query($mysqliConnect, $sql);

	$galleryes = [];
	while ($row = mysql_fetch_assoc($stmt)) {
		$gallery[] = $row;
				}
	return $galleryes;
}