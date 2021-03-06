<?php
/**
 * @package	HikaShop for Joomla!
 * @version	3.2.0
 * @author	hikashop.com
 * @copyright	(C) 2010-2017 HIKARI SOFTWARE. All rights reserved.
 * @license	GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
defined('_JEXEC') or die('Restricted access');
?><?php
if(empty($this->html)) {
	echo JText::_('THANK_YOU_FOR_PURCHASE');
	$user = JFactory::getUser();
	if(!$user->guest) {
		$url = hikashop_completeLink('order&task=show&cid='.$this->order->order_id);
	} else {
		$url = hikashop_completeLink('order&task=show&cid='.$this->order->order_id.'&order_token='.$this->order->order_token);
	}
	echo '<br/>'.JText::sprintf('YOU_CAN_NOW_ACCESS_YOUR_ORDER_HERE', $url);
} else {
	echo $this->html;
}
$this->nextButton = false;
