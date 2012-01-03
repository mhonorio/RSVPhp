<?php
class GuestsController extends AppController {
	
	public function confirm($guest_id)
	{
		$this->Guest->updateAll(
			array(
				'Guest.confirmed' => true,
				'Guest.modified' => 'NOW()'
			),
			array(
				'Guest.id' => $guest_id
			)
		);
		
		$event = $this->Event->find('first');
		
		$this->set(compact('event'));
	}
	
}