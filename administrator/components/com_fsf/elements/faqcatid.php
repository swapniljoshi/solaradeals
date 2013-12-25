<?php
/**
* @Copyright Freestyle Joomla (C) 2010
* @license GNU/GPL http://www.gnu.org/copyleft/gpl.html
*     
* This file is part of Freestyle Support Portal
* This program is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
* 
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
* 
* You should have received a copy of the GNU General Public License
* along with this program.  If not, see <http://www.gnu.org/licenses/>.
**/
?>
<?php defined('_JEXEC') or die('Restricted access'); ?>
<?php

//SENC

class JElementFaqcatid extends JElement
{
	var   $_name = 'Faqcatid';

	function fetchElement($name, $value, &$node, $control_name)
	{
		$query = 'SELECT id, title FROM #__fsf_faq_cat ORDER BY ordering';

		$db    = & JFactory::getDBO();
		$categories[] = JHTML::_('select.option', '', JText::_('Show Category List'), 'id', 'title');
		$db->setQuery($query);
		$categories = array_merge($categories, $db->loadObjectList());

		return JHTML::_('select.genericlist',  $categories, ''.$control_name.'['.$name.']', 'class="inputbox" size="1"', 'id', 'title', $value);
	}
}
//EENC

?>