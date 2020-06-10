<?php
declare(strict_types=1);

namespace App\Controller;

class NewsController extends AppController
{
    public function index()
    {
        $this->paginate = [
            'contain' => ['NewsType'],
        ];
        $news = $this->paginate($this->News);

        $this->set(compact('news'));
    }

    public function admin()
    {
        $this->paginate = [
            'contain' => ['NewsType'],
        ];
        $news = $this->paginate($this->News);

        $this->set(compact('news'));
    }

    public function ciencia(){
        $news = $this->paginate(
            $this->News
                ->find()
                ->contain('NewsType')
                ->where(['type_id' => 1])
                ->order('News.created DESC')
        );

        $this->set(compact('news'));
    }
    public function economia(){
        $news = $this->paginate(
            $this->News
                ->find()
                ->contain('NewsType')
                ->where(['type_id' => 4])
                ->order('News.created DESC')
        );

        $this->set(compact('news'));
    }
    public function educacao(){
        $news = $this->paginate(
            $this->News
                ->find()
                ->contain('NewsType')
                ->where(['type_id' => 5])
                ->order('News.created DESC')
        );

        $this->set(compact('news'));
    }
    public function esportes(){
        $news = $this->paginate(
            $this->News
                ->find()
                ->contain('NewsType')
                ->where(['type_id' => 2])
                ->order('News.created DESC')
        );

        $this->set(compact('news'));
    }
    public function natureza(){
        $news = $this->paginate(
            $this->News
                ->find()
                ->contain('NewsType')
                ->where(['type_id' => 6])
                ->order('News.created DESC')
        );

        $this->set(compact('news'));
    }
    public function saude(){
        $news = $this->paginate(
            $this->News
                ->find()
                ->contain('NewsType')
                ->where(['type_id' => 3])
                ->order('News.created DESC')
        );

        $this->set(compact('news'));
    }

    public function view($id = null)
    {
        $news = $this->News->get($id, [
            'contain' => ['NewsType'],
        ]);

        $this->set(compact('news'));
    }

    public function add()
    {
        $news = $this->News->newEmptyEntity();
        if ($this->request->is('post')) {
            $news = $this->News->patchEntity($news, $this->request->getData());
            if ($this->News->save($news)) {
                $this->Flash->success(__('The news has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The news could not be saved. Please, try again.'));
        }
        $newsType = $this->News->NewsType->find('list', ['limit' => 200]);
        $this->set(compact('news', 'newsType'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $news = $this->News->get($id);
        if ($this->News->delete($news)) {
            $this->Flash->success(__('The news has been deleted.'));
        } else {
            $this->Flash->error(__('The news could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
