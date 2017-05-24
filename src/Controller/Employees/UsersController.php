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
    
    public function Dashboard($first=null, $second=null)
    {
		$user = $this->Auth->user();				
		$this->set('title', 'Dashboard');
		$this->set('sub_title', $user['fname'] . " " . $user['lname']);
		$this->set('breadcrumb', 'Dashboard');
	}
    
    public function profile()
    {
		$user = $this->Auth->user();
		//dump($user); die;
		$this->set('title', 'My Profile');
		$this->set('sub_title', $user['fname'] . " " . $user['lname']);
		$this->set('breadcrumb', 'My Profile');
		$this->set(compact('user'));
	}
       
}
