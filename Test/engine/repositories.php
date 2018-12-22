<?php

function getEmployees($mysqliConnect, $orderDIR = 'ABC') {
	$sql = sprintf("SELECT * FROM employee WHERE id >0",$orderDIR);
	$stmt = mysql_query($mysqliConnect, $sql);

	$employees = [];
	while ($row = mysql_fetch_assoc($stmt)) {
		$employee[] = $row;
				}
	return $employees;
}