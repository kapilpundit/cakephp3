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
		$this->Auth->allow(['index', 'view', 'edit', 'editAllTests']);
        
        $this->set('title', 'Test Controller');
		$this->set('sub_title', 'Test Controller');
		
		$this->set('breadcrumb', 'Test Controller');
	}
	
	public function index()
	{
		$this->paginate = [
			'limit' => 5,
		];
				
        $tests = $this->paginate($this->Tests);
		
		//dump($users); die;
		
        $this->set(compact('tests'));
        $this->set('_serialize', ['tests']);
	}
	
	public function view()
	{
		$params = $this->request->getParam('pass');
		
		// We should receive only one param
		if(count($params) == 1){
			$id = $params[0];
			
			$test = $this->Tests->find()
								->where(["id" => $id])
								->first()
								;
			
			if(is_null($test)){
				
				$this->Flash->error(__('Test Not Found.'));				
				
			}
		}
		else{
			$test = null;
			$this->Flash->error(__('Params list not proper.'));
		}
		
		$this->set(compact('test'));
		
		
	}
	
	public function edit($id = null)
	{
		$test = $this->Tests->find()
							->where(["id" => $id])
							->first()
								;
				
		if(is_null($test)){
			$this->Flash->error(__('Test Not Found.'));				
			
		}		
		
		if ($this->request->is(['patch', 'post', 'put'])) {
			$data = $this->request->data;
					
            $test = $this->Tests->patchEntity($test, $data);
            
            //dump($test); die;
            
            if ($this->Tests->save($test)) 
            {				
                $this->Flash->success(__('The test has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            
            $this->Flash->error(__('Test could not be saved. Please, try again.'));
		}
		
		$this->set(compact('test'));
		
		//die;
	}
	
	public function editAllTests()
	{
		//$tests = $this->Tests->find()
								//->all()
								//;
		
		$this->paginate = [
			'limit' => 5,
		];
				
        $tests = $this->paginate($this->Tests);
		
		if ($this->request->is(['patch', 'post', 'put'])) {
			$data = $this->request->getData();
			
			$formattedData = []; 
			
			$i= 0;
			
			for($i=0; $i<count($data['id']); $i++){
				
				$formattedData[$i]['id'] = $data['id'][$i];
				$formattedData[$i]['name'] = $data['name'][$i];
				$formattedData[$i]['email'] = $data['email'][$i];
				$formattedData[$i]['age'] = $data['age'][$i];
				
			}
			
			$tests = $this->Tests->patchEntities($tests, $formattedData);
			
			//dump($tests); die;
			
			if ($this->Tests->saveMany($tests)) 
            {
				$this->Flash->success(__('The tests have been saved.'));

                return $this->redirect(['action' => 'index']);
			}
			
		}
								
		$this->set(compact('tests'));
	}
	
}
