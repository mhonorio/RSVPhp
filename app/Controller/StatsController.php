<?php
class StatsController extends AppController {
	
	public function index()
	{

		$guests = $this->Guest->find('all', array(
			'order' => array('Guest.confirmed DESC', 'Guest.modified DESC', 'Guest.first_name ASC', 'Guest.last_name ASC'),
			'recursive' => -1
		));
		
		$event = $this->Event->find('first');
		
		$total_confirmed = 0;
		
		$total_guests_confirmed = $this->Guest->find('count', array(
			'conditions' => array('confirmed' => true),
			'recursive' => -1
		));
		
		$total_guests_companions = $this->Guest->find('all', array(
			'fields' => array('SUM(companions) AS total_companions'),
			'conditions' => array('confirmed' => true),
			'recursive' => -1
		));
		
		$total_confirmed = $total_guests_confirmed + $total_guests_companions[0][0]['total_companions'];
		
		$total_guests_unconfirmed = $this->Guest->find('count', array(
			'conditions' => array('confirmed' => false),
			'recursive' => -1
		));
		
		$total_guests_companions = $this->Guest->find('all', array(
			'fields' => array('SUM(companions) AS total_companions'),
			'conditions' => array('confirmed' => false),
			'recursive' => -1
		));
		
		$total_unconfirmed = $total_guests_unconfirmed + $total_guests_companions[0][0]['total_companions'];
		
		$this->set(compact('guests', 'event', 'total_confirmed', 'total_unconfirmed'));
	}
	
}