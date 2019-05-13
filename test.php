<?php

	$revisefixedpriceitemrequest = new ReviseFixedPriceItemRequestType();
	$fixedPriceItem = new ItemType();
	$revisefixedpriceitemrequest->setItem($fixedPriceItem);
	$fixedPriceItem->setItemID($item->getItemId());
	$fixedPriceVariations = new VariationsType();
	$fixedPriceItem->setVariations($fixedPriceVariations);
	$fixedPriceVariation = new VariationType();
	$fixedPriceVariations->addVariation($fixedPriceVariation);
	$fixedPriceVariation->setDelete("false");
	$fixedPriceVariation->setSKU($generateSku);

	$namevaluelistarray = new NameValueListArrayType();
	$fixedPriceVariation->setVariationSpecifics($namevaluelistarray);


	$namevaluelist = new NameValueListType();
	$namevaluelistarray->addNameValueList($namevaluelist);
	$namevaluelist->setName("Select");
	$namevaluelist->addValue("1 pack");
	$namevaluelist = new NameValueListType();
	$namevaluelistarray->addNameValueList($namevaluelist);
	$namevaluelist->setName("Select2");
	$namevaluelist->addValue("2 pack");


	$revisefixedpriceitemrequest->setVersion("1101");
	$response = $proxy->ReviseFixedPriceItem($revisefixedpriceitemrequest);