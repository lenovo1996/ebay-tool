<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'BaseActivityOptionType.php';

/**
  *   Type defining the <b>provideSellerInfo</b> activity option. If the <b>provideSellerInfo</b> 
  * activity option is returned in the <b>getActivityOptions</b> response, the
  * seller can use the <b>provideSellerInfo</b> call to provide an RMA (Return
  * Merchandise Authorization) number to the buyer. The <b>buyerPreference</b>
  * child field will indicate whether an RMA number is the buyer's preference. 
  *   
 **/

class ProvideSellerInfoOptionType extends BaseActivityOptionType
{

	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ProvideSellerInfoOptionType', 'http://www.ebay.com/marketplace/returns/v1/services');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

}
?>
