<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/ww.incs/basics.php';
$dir= dirname(__FILE__);
$user_id = (int)$_POST['userid'];
$product_id= (int)$_POST['productid'];
$rating= (int)$_POST['rating'];
$text= addslashes($_POST['text']);
$errors= array();
if (empty($text)||$text=='Put your comments about the product here') {
	$errors[]= 'You need to type a comment';
}
if (($rating<1)||($rating>5)) {
	$errors[]= 'Rating must be between 1 and 5';
}
if (!empty($errors)) {
	echo '<script>';
	echo 'alert("There are errors in your form");';
	echo 'history.go(-1);';
	echo '</script>';
}
else {
	dbQuery(
		"insert into products_reviews
		(user_id, product_id, rating, body, cdate)
		values ('$user_id', '$product_id', '$rating', '$text', now())"
	);
	echo '<script>';
	echo 'alert("Thank you for leaving a review for this product");';
	echo 'history.go(-1)';
	echo '</script>';
}