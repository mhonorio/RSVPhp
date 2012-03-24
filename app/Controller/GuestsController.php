<?php
class GuestsController extends AppController {
	
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('confirm');
	}
	
	public function confirm($hash)
	{
		$guest = $this->Guest->find('first', array(
			'conditions' => array('hash' => $hash),
			'recursive' => -1
		));

		$to = 'marcelohonorio@gmail.com';
		$subject = "[RSVPHP] Confirmação {$guest['Guest']['first_name']} {$guest['Guest']['last_name']}";
		$body = "Confirmação de presença de {$guest['Guest']['first_name']} {$guest['Guest']['last_name']}. Companhias: {$guest['Guest']['companions']}";

		mail($to, $subject, $body);

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