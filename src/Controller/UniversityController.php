<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * University Controller
 *
 * @property \App\Model\Table\UniversityTable $University
 * @method \App\Model\Entity\University[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UniversityController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
       
        $this->loadModel("University");
        $this->loadModel("Course");
        $this->loadModel("Stream");
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $university = $this->paginate($this->University);

        $this->set(compact('university'));
    }

    /**
     * View method
     *
     * @param string|null $id University id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $university = $this->University->get($id, [
            'contain' => ['Course'],
        ]);

        $this->set(compact('university'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $university = $this->University->newEmptyEntity();
        if ($this->request->is('post')) {
            $university = $this->University->patchEntity($university, $this->request->getData());
            if ($this->University->save($university)) {
                $this->Flash->success(__('The university has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The university could not be saved. Please, try again.'));
        }
        $this->set(compact('university'));
    }

    /**
     * Edit method
     *
     * @param string|null $id University id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $university = $this->University->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $university = $this->University->patchEntity($university, $this->request->getData());
            if ($this->University->save($university)) {
                $this->Flash->success(__('The university has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The university could not be saved. Please, try again.'));
        }
        $this->set(compact('university'));
    }

    /**
     * Delete method
     *
     * @param string|null $id University id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $university = $this->University->get($id);
        if ($this->University->delete($university)) {
            $this->Flash->success(__('The university has been deleted.'));
        } else {
            $this->Flash->error(__('The university could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
