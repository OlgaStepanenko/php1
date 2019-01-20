<?php

require '../engine/init.php';


$pageH1 = 'Корзина';
var_dump($_SESSION);

//$cart = $_SESSION['cart'] ?? [];

if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
} else {
     $cart = []; 
}


$cartTableData = [];
$cartTotalSum = 0;
foreach ($cart as $productId => $cartItem) {
	$product = getProduct($mysqliConnect, $cartItem['product_id']);
	$product['quantity'] = $cartItem['quantity'];
	$product['subtotal'] = $cartItem['quantity'] * $product['price']; 
	$cartTableData[] = $product;
	$cartTotalSum += $product['subtotal'];

}


//require '../public/cart.php';
?>

