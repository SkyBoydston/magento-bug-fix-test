<?php

class Unleaded_EventTracker_Block_Script extends Mage_Core_Block_Abstract
{
	protected $event = 'click';

	public function printTrackingScript()
	{
		?>
			jQuery(document).ready(function() {
				console.log(<?php echo $this->event; ?>);
			});
		<?php
	}

	public function _prepareLayout()
	{
	    echo $this->_toHtml();
	}

	public function _toHtml()
	{

	}
}