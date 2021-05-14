<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  Fields.JSFiddle
 *
 * @copyright   Copyright (C) 2021 SergioIglesiasNET
 * @license     GNU General Public License v2.0
 * @author 		Sergio Iglesias (@sergiois)
 */

defined('_JEXEC') or die;

if (!$field->value || $field->value == '-1')
{
	return;
}

$value = $field->value;
$url = $value.'/embedded/';
?>
<iframe style="<?php echo $field->fieldparams->get('jsfiddlestyles', 'width:100%; height: 300px;'); ?>" src="<?php echo $url; ?>" allowfullscreen="allowfullscreen" allowpaymentrequest frameborder="0"></iframe>