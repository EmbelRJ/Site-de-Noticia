<?php
declare(strict_types=1);

namespace App\Controller;

class NewsTypeController extends AppController
{
    public function index()
    {
        $newsType = $this->paginate($this->NewsType);

        $this->set(compact('newsType'));
    }

    public function add()
    {
        $newsType = $this->NewsType->newEmptyEntity();
        if ($this->request->is('post')) {
            $newsType = $this->NewsType->patchEntity($newsType, $this->request->getData());
            if ($this->NewsType->save($newsType)) {
                $this->Flash->success(__('The news type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The news type could not be saved. Please, try again.'));
        }
        $this->set(compact('newsType'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $newsType = $this->NewsType->get($id);
        if ($this->NewsType->delete($newsType)) {
            $this->Flash->success(__('The news type has been deleted.'));
        } else {
            $this->Flash->error(__('The news type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
