<?php
App::uses('AppController', 'Controller');
/**
 * Members Controller
 *
 * @property Member $Member
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class MembersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

 	public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add', 'thankyou'); 
    }
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Member->recursive = 0;
		$this->set('members', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view() {

	    $activeMembers = $this->Member->find('available', array(
	        'order' => array('dateCreated' => 'desc')
	    ));

        $this->set('Members', $activeMembers);
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			if ($this->Member->save($this->request->data)) {
				$this->Session->setFlash(__('The member has been saved.'));
				return $this->redirect('thankyou');
			} else {
				$this->Session->setFlash(__('The member could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Member->exists($id)) {
			throw new NotFoundException(__('Invalid member'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Member->save($this->request->data)) {
				$this->Session->setFlash(__('The member has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The member could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Member.' . $this->Member->primaryKey => $id));
			$this->request->data = $this->Member->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$id) {
            $this->Session->setFlash('Please provide a member id');
            $this->redirect(array('action'=>'index'));
        }
        $Member = $this->Member->findById($id);
        if(!$Member){
            $this->Session->setFlash('Invalid Member id provided');
            $this->redirect(array('action'=>'index'));
        }
		$this->Member->id = $id;
		if ($this->Member->delete()) {
			$this->Session->setFlash(__('The member has been deleted.'));
		} else {
			$this->Session->setFlash(__('The member could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * thankyou method
 *
 * @return void
 */
	public function thankyou() {
		
	}

}
