<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Keywords Controller
 *
 * @property \App\Model\Table\KeywordsTable $Keywords
 * @method \App\Model\Entity\Keyword[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class KeywordsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $keywords = $this->paginate($this->Keywords);

        $this->set(compact('keywords'));
    }

    /**
     * View method
     *
     * @param string|null $id Keyword id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $keyword = $this->Keywords->get($id, [
            'contain' => ['ShortStories'],
        ]);

        $this->set(compact('keyword'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $keyword = $this->Keywords->newEmptyEntity();
        if ($this->request->is('post')) {
            $keyword = $this->Keywords->patchEntity($keyword, $this->request->getData());
            if ($this->Keywords->save($keyword)) {
                $this->Flash->success(__('The keyword has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The keyword could not be saved. Please, try again.'));
        }
        $shortStories = $this->Keywords->ShortStories->find('list', ['limit' => 200])->all();
        $this->set(compact('keyword', 'shortStories'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Keyword id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $keyword = $this->Keywords->get($id, [
            'contain' => ['ShortStories'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $keyword = $this->Keywords->patchEntity($keyword, $this->request->getData());
            if ($this->Keywords->save($keyword)) {
                $this->Flash->success(__('The keyword has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The keyword could not be saved. Please, try again.'));
        }
        $shortStories = $this->Keywords->ShortStories->find('list', ['limit' => 200])->all();
        $this->set(compact('keyword', 'shortStories'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Keyword id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $keyword = $this->Keywords->get($id);
        if ($this->Keywords->delete($keyword)) {
            $this->Flash->success(__('The keyword has been deleted.'));
        } else {
            $this->Flash->error(__('The keyword could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
