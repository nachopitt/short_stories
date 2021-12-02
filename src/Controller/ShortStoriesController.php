<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ShortStories Controller
 *
 * @property \App\Model\Table\ShortStoriesTable $ShortStories
 * @method \App\Model\Entity\ShortStory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ShortStoriesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $shortStories = $this->paginate($this->ShortStories);

        $this->set(compact('shortStories'));
    }

    /**
     * View method
     *
     * @param string|null $id Short Story id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $shortStory = $this->ShortStories->get($id, [
            'contain' => ['Keywords'],
        ]);

        $this->set(compact('shortStory'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $shortStory = $this->ShortStories->newEmptyEntity();
        if ($this->request->is('post')) {
            $shortStory = $this->ShortStories->patchEntity($shortStory, $this->request->getData());
            if ($this->ShortStories->save($shortStory)) {
                $this->Flash->success(__('The short story has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The short story could not be saved. Please, try again.'));
        }
        $keywords = $this->ShortStories->Keywords->find('list', ['limit' => 200])->all();
        $this->set(compact('shortStory', 'keywords'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Short Story id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $shortStory = $this->ShortStories->get($id, [
            'contain' => ['Keywords'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $shortStory = $this->ShortStories->patchEntity($shortStory, $this->request->getData());
            if ($this->ShortStories->save($shortStory)) {
                $this->Flash->success(__('The short story has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The short story could not be saved. Please, try again.'));
        }
        $keywords = $this->ShortStories->Keywords->find('list', ['limit' => 200])->all();
        $this->set(compact('shortStory', 'keywords'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Short Story id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $shortStory = $this->ShortStories->get($id);
        if ($this->ShortStories->delete($shortStory)) {
            $this->Flash->success(__('The short story has been deleted.'));
        } else {
            $this->Flash->error(__('The short story could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
