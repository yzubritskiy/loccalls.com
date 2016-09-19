<?php
/**
*	@package Joomla Site
*	@subpackage mod_loccalls
*	@copyright Copyright (C) 2016. All rigth reserved
*	@license Payment
*/

define('_JEXEC') or die;

require_once __DIR__.'/helper.php';

$list = ModLoccallsHelper::getList($params);

require JModuleHelper::getLayoutPath('mod_loccalls', $params->get('layout', 'default'));

?>