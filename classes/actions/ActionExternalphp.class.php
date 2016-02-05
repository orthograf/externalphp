<?php

class PluginExternalphp_ActionExternalphp extends ActionPlugin { 

	protected $sMenuItemSelect = 'externalphp';

	public function Init() {
        $this->SetDefaultEvent('index');	
	}

	protected function RegisterEvent() {		
	    $this->AddEvent('index','EventIndex');
	}	

	protected function EventIndex() {
	    $this->SetTemplateAction('index');
	}
}
?>
