<?php

require_once '../engine/init.php';

$messege = 'ok';
if ($_POST && isset($_POST['product_id'])) {
	$id = (int)$_POST['product_id'];
	if (deleteProduct ($mysqliConnect, $id)) {
		$messege = 'Продукт с id='.$id.' удален';
	}
}
header('Location: catalog_admin.php?messege='.$messege);

?>