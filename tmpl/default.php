<?php
/**
*	@package Joomla Site
*	@subpackage mod_loccalls
*	@copyright Copyright (C) 2016. All rigth reserved
*	@license Payment
*/

define('_JEXEC') or die;
?>

<div class="loccalls">
	<?php 
	foreach($list as $key => &$item) {
		$slug = $item->id.'-'.$item->alias;
		$link = JRoute::_(LoccalsHelperRoute::getLoccallsRoute($slug, $item->catid);
	}
	?>

</div>
