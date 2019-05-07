<?php

	error_reporting(E_ERROR); ini_set('display_errors', 1);
	$orderId = $_GET['order_id'];

	list($itemId, $transactionId) = explode('-', $orderId);

	$proxy = require_once '../../session.php';

	require_once $sdk_dir . 'GetOrderTransactionsRequestType.php';

	$getordertransactionsrequest = new GetOrderTransactionsRequestType();

	$getordertransactionsrequest->setIncludeFinalValueFees("true");
	$itemtransactionidarray = new ItemTransactionIDArrayType();
	$getordertransactionsrequest->setItemTransactionIDArray($itemtransactionidarray);
	$itemtransactionid = new ItemTransactionIDType();
	$itemtransactionidarray->addItemTransactionID($itemtransactionid);
	$itemtransactionid->setItemID($itemId);
	$itemtransactionid->setTransactionID($transactionId);
	$orderidarray = new OrderIDArrayType();
	$getordertransactionsrequest->setOrderIDArray($orderidarray);
	$orderidarray->addOrderID($orderId);
	$getordertransactionsrequest->addDetailLevel("ReturnAll");
	$getordertransactionsrequest->setVersion("1101");

	$response = $proxy->GetOrderTransactions($getordertransactionsrequest);

	$order = $response->getOrderArray()[0];

	$buyer = $order->getTransactionArray()[0]->getBuyer();
	$buyerInfo = $order->getTransactionArray()[0]->getBuyer()->getBuyerInfo();

	try {
		$payment = $order->getTransactionArray()[0]->getPaidTime() . ' (<a href="https://www.paypal.com/myaccount/transactions/details/' . $order->getMonetaryDetails()->getPayments()->getPayment()[0]->getReferenceId()->value . '">' . $order->getCheckoutStatus()->PaymentMethod . '</a>)';
	} catch (\Exception $e) {
		$payment = 'N/A';
	}

	header('Content-Type: text/html');
	echo '
	
	<div class="col-md-6">
		<div class="panel panel-info">
			<div class="panel-heading">Purchase detail</div>
			<div class="panel-body">
				<div class="list-group-item">Buyer: ' . $buyerInfo->UserFirstName . '' . $buyerInfo->UserLastName . ' (' . $buyer->UserID . ')</div>
				<div class="list-group-item">Email: ' . $buyer->Email . '</div>
				<div class="list-group-item">Date paid: ' . $payment.'</div>
			</div>
		</div>
	</div>
	
	<div class="col-md-6">
		<div class="panel panel info">
			<div class="panel-heading">Shiping detail</div>
			<div class="panel-body">
				
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	';