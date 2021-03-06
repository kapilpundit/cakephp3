<?php
namespace App\Controller;

use App\Controller\AppController;

use Cake\ORM\TableRegistry;

//use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;


/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class LoginsController extends AppController
{	
	public function initialize()
    {
        parent::initialize();
        
        $this->set('title', '');
		$this->set('sub_title', '');
		
		$this->set('breadcrumb', '');
		
		// Set the login layout.        
        $this->viewBuilder()->layout('login');
	}
	
	 /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
		$this->set('title', 'Login');
		$this->set('sub_title', 'Provide your login credentials');
		$this->set('breadcrumb', 'Login');
		
		
		$users = TableRegistry::get('Users');
		
		$user = $users->newEntity();
		$this->set('user', $user);
		
		
		if ($this->request->is('post')) {
			
			// Login
			if(isset($this->request->data['login-submit']))
			{
				$user_identified = $this->Auth->identify();				
				
				//pr($user_identified['group']['group_name']); die;
				
				if ($user_identified) {
					//dump($user); die;
					
					if(!$user_identified['status'])
					{
						$this->Flash->error(__('Your account has been disabled'));
						return $this->redirect(['action' => 'logout']);
					}
					
					$user = $users->get($user_identified['id']);					
					
					$user->logged_in = 1;
					//dump($user_identified); die;
					
					if ($users->save($user)) 
					{
						$this->Auth->setUser($user_identified);
						
						$myurl = Router::url([
									'controller' => 'users',
									'action' => 'dashboard',
									'prefix' => $user_identified['group']['prefix'],
								], true);
						
						return $this->redirect($myurl);
					}
					
					
				} else {
					$this->Flash->error(__('Username or password is incorrect'));
				}
			}
			
			
			
			// Register
			if(isset($this->request->data['register-submit']))
			{
				$user = $users->patchEntity($user, $this->request->data);
				
				$user->status = 0;
				$user->group_id = 2;
				
				//dump($user); die;
				
				if ($users->save($user)) {
                
					$this->Flash->success(__('The user has been saved.'));

					return $this->redirect(['action' => 'index']);
				}
			}
			
		}	
				
		if($this->Auth->user())
		{
			$this->Flash->error(__('You have been logged out'));
			return $this->redirect($this->Auth->logout());
		}
			
    }
        
    public function logout()
    {
		$logged_in_user = $this->Auth->user("id");
		
		$users = TableRegistry::get('Users');
		
		$user = $users->get($logged_in_user); // Return Logged in user's id
				
		$user->logged_in = 0;
		
		//$user = $users->patchEntity($user, ["logged_in" => 0]);
		
		//pr($user); die;
		
		if ($users->save($user)) 
		{				
			$this->Flash->success(__('You have been logged out successfully.'));

			return $this->redirect($this->Auth->logout());
		}
		
		$this->Flash->error(__('You could not be logged out due to some error.'));	
		
	}
	
}
