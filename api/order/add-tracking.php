<?php


	$orderId = $_POST['orderId'];
	$trackingNumber = $_POST['trackingNumber'];
	$shippingCarrierUsed = $_POST['ShippingCarrierUsed'];

	$proxy = require_once '../../session.php';

	require_once $sdk_dir . 'CompleteSaleRequestType.php';
	$completesalerequest = new CompleteSaleRequestType();
	$completesalerequest->setOrderID($orderId);
	$shipment = new ShipmentType();
	$completesalerequest->setShipment($shipment);
	$shipmenttrackingdetails = new ShipmentTrackingDetailsType();
	$shipment->addShipmentTrackingDetails($shipmenttrackingdetails);
	$shipmenttrackingdetails->setShipmentTrackingNumber($trackingNumber);
	$shipmenttrackingdetails->setShippingCarrierUsed($shippingCarrierUsed);
	$completesalerequest->setVersion("1101");

	$response = $proxy->CompleteSale($completesalerequest);

	echo json_encode($response);