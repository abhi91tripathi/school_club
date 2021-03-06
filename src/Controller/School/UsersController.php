<?php
namespace App\Controller\School;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{
	
	  public function beforeFilter(Event $event){
        parent::beforeFilter($event);
        $this->Auth->allow(['logout']);
    }
    /*
     * Purpose:School admin login
     * Author:Abhishek Tripathi
     * created on:4/08/15
     * */
    public function login(){
        $this->layout = "school_login";
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
	}
	
	/*
     * Purpose:School admin dashboard
     * Author:Abhishek Tripathi
     * created on:4/08/15
     * */
	public function dashboard(){
		
    }
    
    

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->layout='ajax';
        $this->paginate = [
            'contain' => ['Groups']
        ];
        $this->set('users', $this->paginate($this->Users));
        $this->set('_serialize', ['users']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Groups', 'Schools', 'Students']
        ]);
        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->layout='ajax';
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $this->request->data['owner_id'] = $this->Auth->user('id');
            $this->request->data['password'] = date('Ym').'@'.  rand(5, 5);
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $groupTable = \Cake\ORM\TableRegistry::get('Groups');
        $groupOption = $groupTable->find('list')
                ->select([
                    'id','name'
                ])->where([
                'NOT' => array(
                    'id' => 1
                )
        ])->toArray();
        $this->set(compact('user', 'groupOption'));
        $this->set('_serialize', ['user','groupOption']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id=null)
    {
        
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
        
        
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
