<?
include "LiqPay.php";
	echo "Card MEN";
	$liqpay = new LiqPay("sandbox_i31452935893", "sandbox_nalhWbSUGWKifcM16yIxBV7a8PVbrXkYViYZmbwe");
	
	if($_GET["id_order"] && $_GET["summ"]){
		$summ = $_GET["summ"];
		$order = $_GET["id_order"];
		$res = $liqpay->api("request", array(
		'action'         => 'pay',
		'version'        => '3',
		'phone'          => '380506468467',
		'amount'         => $_GET["summ"],
		'currency'       => 'UAH',
		'description'    => 'description text',
		'order_id'       => $_GET["id_order"],
		'card'           => '5168757375296318',
		'card_exp_month' => '08',
		'card_exp_year'  => '22',
		'card_cvv'       => '872',
	));
	
		
	}
?>