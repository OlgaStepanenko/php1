<?php

function getGallery($mysqliConnect, $orderDIR = 'ABC') {
	$sql = sprintf("SELECT * FROM gallery WHERE id >0", $orderDIR);
	$stmt = mysqli_query($mysqliConnect, $sql);

	$galleryes = [];
	while ($row = mysqli_fetch_assoc($stmt)) {
        $galleryes[] = $row;
				}
	return $galleryes;
}