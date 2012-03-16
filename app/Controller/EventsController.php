<?php
class EventsController extends AppController
{
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('index','search');
	}
	
	public function index()
	{
		
	}
	
	public function search()
	{
		$data = $this->request->data;
		
		$guest = $this->Guest->find('first', array(
			'conditions' => array(
				'first_name' => $data['Event']['first_name'],
				'last_name' => $data['Event']['last_name'],
			)
		));
		
		if(!$guest) {
			$event = $this->Event->find('first');
			$this->set(compact('event'));
		}
		
		$this->set(compact('guest'));
	}
}