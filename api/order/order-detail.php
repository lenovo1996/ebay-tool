<?php

$orderId = $_GET['order_id'];
$json = $_GET['json'];

$proxy = require_once '../../session.php';

require_once $sdk_dir . 'GetOrdersRequestType.php';

$getordersrequest = new GetOrdersRequestType();
$orderidarray = new OrderIDArrayType();
$getordersrequest->setOrderIDArray($orderidarray);
$orderidarray->addOrderID($orderId);
$getordersrequest->setVersion("1101");

$response = $proxy->GetOrders($getordersrequest);

$order = $response->getOrderArray()[0];

$transaction = $order->getTransactionArray()[0];
$buyer = $transaction->getBuyer();
$shippingAddr = $order->getShippingAddress();

$item = $transaction->getItem();
try {
    $payment = substr($order->getPaidTime(), 0, 10) . ' (' . $order->getCheckoutStatus()->PaymentMethod . ')';
    if ($transaction->getShippingDetails()->getShipmentTrackingDetails()) {
        $tracking = $transaction->getShippingDetails()->getShipmentTrackingDetails()[0]->getShipmentTrackingNumber();
    }
    $tracking = 'N/A';
} catch (\Exception $e) {
    $payment = 'N/A';
    $tracking = 'N/A';
}
if ($json == 1) {
    $Variations = '';
    if ($transaction->Variation) {
        foreach ($transaction->Variation->VariationSpecifics as $variations) {
            $Variations .= $variations->Name . ': ' . implode(',', $variations->Value) . ',';
        }
    }


    echo json_encode([
        'paidDate' => date("M j, Y", strtotime($order->getPaidTime())),
        'saleRecord' => $order->getShippingDetails()->getSellingManagerSalesRecordNumber(),
        'total' => $order->Total->value,
        'qty' => $transaction->getQuantityPurchased(),
        'Variations' => trim($Variations, ','),
        'link' => 'https://www.ebay.com/itm/' . $item->getItemId(),
        'shippingDetail' => $shippingAddr->Name . ',' . $shippingAddr->Street1 . ',' . $shippingAddr->CityName . ',' . $shippingAddr->StateOrProvince . ',' . $shippingAddr->CountryName . ',' . $shippingAddr->Phone,
        'buyerUserName' => $order->BuyerUserID,
        'BuyerEmail' => $buyer->Email,
        'seller' => $order->SellerUserID
    ]);
    exit;
}


header('Content-Type: text/html');
echo '
	
	<div class="col-md-6">
		<div class="panel panel-info">
			<div class="panel-heading">Purchase detail</div>
			<div class="panel-body">
				<div class="list-group-item">Buyer: ' . $buyer->UserFirstName . ' ' . $buyer->UserLastName . ' (' . $order->BuyerUserID . ')</div>
				<div class="list-group-item">Email: ' . $buyer->Email . '</div>
				<div class="list-group-item">Date paid: ' . $payment . '</div>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="panel panel-info">
			<div class="panel-heading">Shiping detail</div>
			<div class="panel-body">
				<div class="list-group-item">Shipping Method: ' . $order->getShippingDetails()->getShippingServiceOptions()[0]->getShippingService() . '</div>
				<div class="list-group-item">Tracking: ' . $tracking . '</div>
				<div class="list-group-item">Ship to: ' . $shippingAddr->Name . '</div>
				<div class="list-group-item">Street: ' . $shippingAddr->Street1 . '</div>
				<div class="list-group-item">City: ' . $shippingAddr->CityName . '</div>
				<div class="list-group-item">State/province: ' . $shippingAddr->StateOrProvince . '</div>
				<div class="list-group-item">Zip code: ' . $shippingAddr->PostalCode . '</div>
				<div class="list-group-item">Country/region: ' . $shippingAddr->CountryName . '</div>
			</div>
		</div>
	</div>
	<div class="col-md-12">
	    <div class="panel panel-info">
			<div class="panel-heading">Item detail</div>
			<div class="panel-body">
			    <div class="col-md-6">
                            <div style="float: left; width: 15%">
                                <a href="https://www.ebay.com/itm/292799546666">
                                    <img src="https://thumbs4.ebaystatic.com/pict/' . $item->getItemId() . '8080_1.jpg"
                                         style="width: 90%">
                                </a>
                            </div>
                            <div style="float: left; width: 80%">
                                <p>
                                    <a href="https://www.ebay.com/itm/' . $item->getItemId() . '">' . $item->getTitle() . '</a> (' . $item->getItemId() . ')</span>
                                </p>
                                <p>Tracking: <span class="text-warning">' . $tracking . '</span></p>
                            </div>
                        </div>
                        <div class="col-md-1">
                            Qty: ' . $transaction->getQuantityPurchased() . '
                        </div>
                        <div class="col-md-2">
                            Total: ' . $order->Total->value . '
                        </div>

                        <div class="col-md-3">
                            Date Paid: ' . substr($order->getPaidTime(), 0, 10) . '
                        </div>
			</div>
			</div>
		</div>
    </div>
	<div class="clearfix"></div>
	';