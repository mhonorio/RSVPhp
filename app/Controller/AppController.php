<?php
class AppController extends Controller
{
	public $uses = array('Event', 'Guest');

	public function beforeFilter() {
		$event = $this->Event->find('first');

		$this->set(compact('event'));

		parent::beforeFilter();
    }

	public function index() {}
	
	public $components = array(
		'Session',
		'Auth' => array(
			'loginRedirect' => array('controller' => 'stats', 'action' => 'index'),
			'logoutRedirect' => array('controller' => 'users', 'action' => 'login')
		)
	);
}