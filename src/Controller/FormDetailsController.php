<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FormDetails Controller
 *
 * @property \App\Model\Table\FormDetailsTable $FormDetails
 */
class FormDetailsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $formDetails = $this->paginate($this->FormDetails);

        $this->set(compact('formDetails'));
        $this->set('_serialize', ['formDetails']);
    }

    /**
     * View method
     *
     * @param string|null $id Form Detail id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $formDetail = $this->FormDetails->get($id, [
            'contain' => []
        ]);

        $this->set('formDetail', $formDetail);
        $this->set('_serialize', ['formDetail']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $formDetail = $this->FormDetails->newEntity();
        if ($this->request->is('post')) {
            $formDetail = $this->FormDetails->patchEntity($formDetail, $this->request->data);
            if ($this->FormDetails->save($formDetail)) {
                $this->Flash->success(__('The {0} has been saved.', 'Form Detail'));
                return $this->redirect(['action' => 'add']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Form Detail'));
            }
        }
        $this->set(compact('formDetail'));
        $this->set('_serialize', ['formDetail']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Form Detail id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $formDetail = $this->FormDetails->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $formDetail = $this->FormDetails->patchEntity($formDetail, $this->request->data);
            if ($this->FormDetails->save($formDetail)) {
                $this->Flash->success(__('The {0} has been saved.', 'Form Detail'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Form Detail'));
            }
        }
        $this->set(compact('formDetail'));
        $this->set('_serialize', ['formDetail']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Form Detail id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $formDetail = $this->FormDetails->get($id);
        if ($this->FormDetails->delete($formDetail)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Form Detail'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Form Detail'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['add']);
    }
}
