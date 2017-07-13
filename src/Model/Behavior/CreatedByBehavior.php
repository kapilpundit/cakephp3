<?php

namespace App\Model\Behavior;

use Cake\Datasource\EntityInterface;
use Cake\Event\Event;
use Cake\ORM\Behavior;
use Cake\ORM\Entity;
use Cake\ORM\Query;
use Cake\Utility\Text;
use ArrayObject;
use Cake\Core\Configure;

class CreatedByBehavior extends Behavior
{
	public function initialize(array $config)
	{
		// Some initialization code here
	}
	
	// 
	public function beforeMarshal(Event $event, ArrayObject $data, ArrayObject $options)
	{
		if (isset($data['username'])) {
			$data['username'] = mb_strtolower($data['username']);
			
		}
		$userId = Configure::read('userId');
		dd($userId);
		$data['created_by'] = '1';
	}
}
