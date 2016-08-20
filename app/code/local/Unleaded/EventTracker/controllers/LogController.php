<?php

class Unleaded_EventTracker_LogController extends Mage_Core_Controller_Front_Action
{
	public function indexAction()
	{
		$request = $this->getRequest();

		Mage::log($request->getParam(), null, 'eventtracker.log');
	}
}