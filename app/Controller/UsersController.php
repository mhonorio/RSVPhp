<?php
class UsersController extends AppController {
	public $components = array(
	        'Session',
	        'Auth' => array(
	            'loginRedirect' => array('controller' => 'stats', 'action' => 'index'),
	            'logoutRedirect' => array('controller' => 'users', 'action' => 'login')
	        )
	    );

    public function beforeFilter() {
        $this->Auth->allow('add','logout');
    }

    public function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }

	//public function beforeFilter() {
	//    parent::beforeFilter();
	//    $this->Auth->allow('add'); // Letting users register themselves
	//}

	public function login() {
	    if ($this->Auth->login()) {
	        //$this->redirect($this->Auth->redirect());
			$this->redirect(array('controller' => 'stats', 'action' => 'index'));
	    } else {
	        $this->Session->setFlash(__('Invalid username or password, try again'));
	    }
	}

	public function logout() {
	    $this->redirect($this->Auth->logout());
	}

    public function view($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->set('user', $this->User->read(null, $id));
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        }
    }
}