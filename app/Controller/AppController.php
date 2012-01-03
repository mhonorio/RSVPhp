<?php
class AppController extends Controller
{
    public $uses = array('Event', 'Guest');

    public function beforeFilter() {
        $event = $this->Event->find('first');
        
        $this->set(compact('event'));

        parent::beforeFilter();
    }
}