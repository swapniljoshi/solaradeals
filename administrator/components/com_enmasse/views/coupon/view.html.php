<?php
/*------------------------------------------------------------------------
# En Masse - Social Buying Extension 2010
# ------------------------------------------------------------------------
# By Matamko.com
# Copyright (C) 2010 Matamko.com. All Rights Reserved.
# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Websites: http://www.matamko.com
# Technical Support:  Visit our forum at www.matamko.com
-------------------------------------------------------------------------*/


defined( '_JEXEC' ) or die( 'Restricted access' );
jimport( 'joomla.application.component.view');
require_once( JPATH_ADMINISTRATOR . DS ."components". DS ."com_enmasse". DS ."toolbar.enmasse.html.php");

class EnmasseViewCoupon extends JView
{
	function display($tpl = null)
	{
	 $task = JRequest::getWord('task');
        if($task == 'editElement'|| $task == 'addElement' )
        {
        	$id = JRequest::getVar('elementId');
            TOOLBAR_enmasse::_COUPONELEMENTNEW();

            $element = JModel::getInstance('couponElement','enmasseModel')->getById($id);
	        $this->assignRef( 'element', $element);	
        }
        else
        {
			TOOLBAR_enmasse::_SMENU();
			TOOLBAR_enmasse::_COUPON();
			
			$couponBgUrl = JModel::getInstance('coupon','enmasseModel')->getCouponBgUrl();
			$couponElementList = JModel::getInstance('couponElement','enmasseModel')->listAll();
			
			$this->assignRef( 'couponBgUrl', $couponBgUrl );
			$this->assignRef( 'couponElementList', $couponElementList );
        }
			
		parent::display($tpl);
	}

}
?>