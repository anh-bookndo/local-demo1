$this->Session->write('User.email', $this->request->data['User']['email']);
return $this->redirect(array('action' => 'thank_you'));

//----------------------------------------------------------------------
USER CONTROLLER PHP

//----------------------------------------------------------------------
<?php

// app/Controller/UsersController.php
class UsersController extends AppController {
    /* public function beforeFilter() {
      parent::beforeFilter();
      $this->Auth->allow('add');
      } */

    public function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
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
            $conditions = array(
                    'User.email' => $this->request->data['User']['email'],
            );
            
            if ($this->User->hasAny($conditions)) {
                //do something
                $this->Session->setFlash('ERROR: Your email address alrealy existed. Please use another email.','default',array('class' => 'alert alert-error'), 'error_email');
            }
            else if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                return $this->redirect(array('action' => 'thank_you'));
            }
            else
            {
                $this->Session->setFlash(
                    __('The user could not be saved. Please, try again.')
            );
            }           
        }
    }
    
    public function thank_you() {
                $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }

    public function edit($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(
                    __('The user could not be saved. Please, try again.')
            );
        } else {
            $this->request->data = $this->User->read(null, $id);
            unset($this->request->data['User']['password']);
        }
    }

    public function delete($id = null) {
        $this->request->onlyAllow('post');

        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->User->delete()) {
            $this->Session->setFlash(__('User deleted'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not deleted'));
        return $this->redirect(array('action' => 'index'));
    }

    // Add register new users, save username, password
// app/Controller/UsersController.php

    public function beforeFilter() {
        parent::beforeFilter();
        // Allow users to register and logout.
        $this->Auth->allow('add', 'logout');
    }

    public function login() {
        //Set layout = null    
        $this->layout = null;
        //Do normal staffs 
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirect());
            }
            $this->Session->setFlash(__('Invalid username or password, try again'));
        }
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }

}
