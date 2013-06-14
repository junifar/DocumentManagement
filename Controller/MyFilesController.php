<?php
App::uses('AppController', 'Controller');
/**
 * MyFiles Controller
 *
 * @property MyFile $MyFile
 */
class MyFilesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->MyFile->recursive = 0;
		$this->set('myFiles', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MyFile->exists($id)) {
			throw new NotFoundException(__('Invalid my file'));
		}
		$options = array('conditions' => array('MyFile.' . $this->MyFile->primaryKey => $id));
		$this->set('myFile', $this->MyFile->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
		
			$this->MyFile->create();
			
			if (!empty($this->request->data) && is_uploaded_file($this->request->data['MyFile']['data']['tmp_name'])) 
			{
				$fileData = fread(fopen($this->request->data['MyFile']['data']['tmp_name'], "r"),$this->request->data['MyFile']['data']['size']);
				$this->request->data['MyFile']['name'] = $this->request->data['MyFile']['data']['name'];
				$this->request->data['MyFile']['type'] = $this->request->data['MyFile']['data']['type'];
				$this->request->data['MyFile']['size'] = $this->request->data['MyFile']['data']['size'];
				$this->request->data['MyFile']['data'] = $fileData;
			}			
			
			if ($this->MyFile->save($this->request->data)) {
				$this->Session->setFlash(__('The my file has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The my file could not be saved. Please, try again.'));
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
		if (!$this->MyFile->exists($id)) {
			throw new NotFoundException(__('Invalid my file'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->MyFile->save($this->request->data)) {
				$this->Session->setFlash(__('The my file has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The my file could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MyFile.' . $this->MyFile->primaryKey => $id));
			$this->request->data = $this->MyFile->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->MyFile->id = $id;
		if (!$this->MyFile->exists()) {
			throw new NotFoundException(__('Invalid my file'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->MyFile->delete()) {
			$this->Session->setFlash(__('My file deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('My file was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
