<?php
namespace App\Controller\Employees;

use App\Controller\AppController;

use Cake\ORM\TableRegistry;

//use Cake\Auth\DefaultPasswordHasher;


/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{
	public function initialize()
    {
        parent::initialize();
        
        $this->set('title', 'User Controller Default Title');
		$this->set('sub_title', 'User Controller Default Sub Title');
		
		$this->set('breadcrumb', 'User Controller Default Breadcrumb');
	}

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
		$this->set('title', 'Users');
		$this->set('sub_title', 'All Active Users');
		$this->set('breadcrumb', 'Users');
		
		$this->paginate = [
            'contain' => ['Groups']
        ];
				
        $users = $this->paginate($this->Users);
		
		//dump($users); die;
		
        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {		
        $user = $this->Users->get($id, [
            'contain' => ['Groups']
        ]);
        
        //pr($user); die;
        
		$this->set('title', 'View User');
		$this->set('sub_title', $user->fname . " " . $user->lname);
		$this->set('breadcrumb', $user->username);
		
        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
		$this->set('title', 'Add User');
		$this->set('sub_title', 'Add New Users');
		$this->set('breadcrumb', 'Add User');		
		
		//$this->loadModel("Groups");
		
		$groups = TableRegistry::get('Groups');
		
		$groups = $groups->find('list', [
									'keyField' => 'id',
									'valueField' => 'group_name'
								])
							->toArray()
								;
		
		
		$this->set('groups', $groups);
		
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {			
			
			//$password = $this->request->data['password'];
			
			
			//$hasher = new DefaultPasswordHasher();
			//$hash = $hasher->hash($password);
			
			//$this->request->data['password'] = $hash;
			
            $user = $this->Users->patchEntity($user, $this->request->data);
            
            // 	pr($user); die;
            
            if ($this->Users->save($user)) {
                
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            //'contain' => ['Groups']
        ]);
        
        
        $this->set('title', 'Edit User');
		$this->set('sub_title', $user->fname . " " . $user->lname);
		$this->set('breadcrumb', $user->username);
		
		$groups = TableRegistry::get('Groups');
		
		$groups = $groups->find('list', [
									'keyField' => 'id',
									'valueField' => 'group_name'
								])
							->toArray()
								;
		
		
		$this->set('groups', $groups);
        
        if ($this->request->is(['patch', 'post', 'put'])) {
			
			$data = $this->request->data;
						
            $user = $this->Users->patchEntity($user, $data);
            
			$user->status = !isset($data['status']) ? 0 : 1;
            
            //pr($user); die;
                    
            if ($this->Users->save($user)) 
            {				
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
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
    
    public function Dashboard($first=null, $second=null)
    {
		$user = $this->Auth->user();				
		$this->set('title', 'Dashboard');
		$this->set('sub_title', $user['fname'] . " " . $user['lname']);
		$this->set('breadcrumb', 'Dashboard');
	}
        
}
