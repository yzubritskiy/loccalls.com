<?php
/**
*	@package Joomla Site
*	@subpackage mod_loccalls
*	@copyright Copyright (C) 2016. All rigth reserved
*	@license Payment
*/

define('_JEXEC') or die;

class ModLoccallsHelper {
	public function getList($params){
		$db = JFactory::getDbo();
		$query = $db -> getQuery(true);
		$query->select($db->quoteName(array('id', 'title', 'file_img', 'alias', 'catid')));
		$query->from($db->quoteName('#__clips'));
		$query->where('state = 1');
		$query->order('ordering DESC');
		$query->setLimit($params->get('count'));
		
		$db->setQuery($query);
		$result = $db->loadObjectList();
		
		return $result;
	}
}
?>