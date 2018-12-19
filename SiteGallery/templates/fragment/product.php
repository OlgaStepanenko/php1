<?php

function newProduct($mysqlConnect, $name, $miniSpecification, $specification, $price, $image) {
	$sql = sprintf(
		"INSERT INTO products (name, miniSpecification, specification, price, image) VALUES ('%s', '%s', '%s', '%s', '%s')",
		mysqli_real_escape_string($mysqlConnect, (string)htmlspecialchars(strip_tags($name))),
        mysqli_real_escape_string($mysqlConnect, (string)htmlspecialchars(strip_tags($miniSpecification))),
        mysqli_real_escape_string($mysqlConnect, (string)htmlspecialchars(strip_tags($specification))),
        $price,
        $image
	);

	mysqli_query($mysqlConnect, $sql);
    if (mysqli_error($mysqlConnect)) {
        die(mysqli_error($mysqlConnect));
     }

     return mysql_insert_id($mysqlConnect);
}

function renewProduct ($mysqlConnect, $id, $name, $miniSpecification, $specification, $price, $image) {
	$sql = sprintf(
        'UPDATE products SET name="%s", miniSpecification="%s", specification="%s", price="%s", image="%s" WHERE id=%d',
        mysqli_real_escape_string($mysqlConnect, (string)htmlspecialchars(strip_tags($name))),
        mysqli_real_escape_string($mysqlConnect, (string)htmlspecialchars(strip_tags($miniSpecification))),
        mysqli_real_escape_string($mysqlConnect, (string)htmlspecialchars(strip_tags($specification))),
        $price,
         $image,
         $id
     );
     mysqli_query($mysqlConnect, $sql);
     
     if (mysqli_error($mysqlConnect)) {
         die(mysqli_error($mysqlConnect));
     }
 }
}