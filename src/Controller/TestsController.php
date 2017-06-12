<?php
namespace App\Controller;

use App\Controller\AppController;

use Cake\ORM\TableRegistry;

//use Cake\Auth\DefaultPasswordHasher;


/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class TestsController extends AppController
{
	public function initialize()
    {
        parent::initialize();
        
        // Allow only the view and index actions.
		$this->Auth->allow(['index']);
        
        $this->set('title', 'Test Controller');
		$this->set('sub_title', 'Test Controller');
		
		$this->set('breadcrumb', 'Test Controller');
	}
	
	public function index()
	{
		$req = $this->request->getParam('pass');
		
		$this->paginate = [
			'limit' => 1,
		];
				
        $tests = $this->paginate($this->Tests);
		
		//dump($users); die;
		
        $this->set(compact('tests'));
        $this->set('_serialize', ['tests']);
	}
	
}
