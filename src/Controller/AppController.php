<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Core\Configure;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();
		
		// Set the default layout.        
        $this->viewBuilder()->layout('mydesign');
		
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');        
        //$this->loadHelper('Session');
                
        $this->loadComponent('Auth', [
			'loginAction' => [
				'controller' => 'Logins',
				'action' => 'index'
			],
			'authError' => 'Did you really think you are allowed to see that?',
			'authenticate' => [
				'Form' => [
					'finder' => 'auth'
				]
			],
			'loginRedirect' => [
				'controller' => 'Users',
				'action' => 'index'
			],
			'authorize' => 'Controller',
			//'storage' => 'Session'
		]);
		
		//$this->Auth->allow(['controller' => 'pages', 'action' => 'display']);
		
		$this->set('title', 'Default title comming from AppController.php');
		$this->set('sub_title', 'Default sub title comming from AppController.php');
		
		$this->set('breadcrumb', 'Default breadcrumb comming from AppController.php');
		
		/*
		 * Manage Logged in User
		 *
		 */	
		
		$this->manageLoggedInUser();
				
        /*
         * Enable the following components for recommended CakePHP security settings.
         * see http://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
        //$this->loadComponent('Csrf');
    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return \Cake\Network\Response|null|void
     */
    public function beforeRender(Event $event)
    {
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
    }
    
    public function isAuthorized($user = null)
    {
        // Any registered user can access public functions
        if (!$this->request->getParam('prefix')) {
            return true;
        }

        // Only admins can access admin functions
        if ($this->request->getParam('prefix') === 'admin') {
            return (bool)($user['group']['group_name'] === 'Admin');
        }

        // Only employees can access admin functions
        if ($this->request->getParam('prefix') === 'employees') {           
            return (bool)($user['group']['group_name'] === 'Employees');
        }

        // Default deny
        return false;
    }
    
    public function manageLoggedInUser()
    {
		$user = $this->Auth->user();
		$userId = $this->Auth->user('id');
		Configure::write('userId', $userId);
		$logged_in_user = $user ? $this->Auth->user('fname') . ' ' . $this->Auth->user('lname') : null;
		$this->set('logged_in_user', $logged_in_user);		
		$this->set('user_group', $user['group']['group_name']);
		
		//$groups = TableRegistry::get('Groups');
		//$groups = $groups->find()->all()->toArray();
		//$this->set('groups', $groups);
	}
}
