<?php
class EventsController extends AppController
{
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('index','search');
	}
	
	public function index() {}
	
	public function search()
	{
		$data = $this->request->data;

		$firstname = str_replace(' ', '%', $data['Event']['first_name']);
		$lastname = str_replace(' ', '%', $data['Event']['last_name']);

		$guest = $this->Guest->find('first', array(
			'conditions' => array(
				'Guest.first_name LIKE' => "%{$firstname}%",
				'Guest.last_name LIKE' => "%{$lastname}%",
			)
		));

		if(!$guest) {
			$event = $this->Event->find('first');
			$this->set(compact('event'));
		}
		
		$this->set(compact('guest'));
	}
}