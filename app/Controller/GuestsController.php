<?php
class GuestsController extends AppController {
	
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('confirm');
	}
	
	public function confirm($hash)
	{
		$this->Guest->updateAll(
			array(
				'Guest.confirmed' => true,
				'Guest.modified' => 'NOW()'
			),
			array(
				'Guest.hash' => $hash
			)
		);
		
		$event = $this->Event->find('first');
		
		$this->set(compact('event'));
	}
	
}