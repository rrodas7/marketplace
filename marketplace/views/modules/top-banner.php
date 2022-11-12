<?php 

$randomId = rand(1, $totalProducts);

$url = CurlController::api()."relations?rel=products,categories&type=product,category&linkTo=id_product&equalTo=".$randomId."&select=url_category,top_banner_product,url_product";
$method = "GET";
$fields = array();
$header = array();

$randomProduct = CurlController::request($url, $method, $fields, $header)->results[0];
$topBanner = json_decode($randomProduct->top_banner_product, true);

?>

