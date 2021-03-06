<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Groups
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TestsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('test_123');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');
		
		 $validator
            ->add('name', 'notBlank', [
                'rule' => 'notBlank',
                'message' => 'You need to provide a name',
            ]);
		
        //$validator
            //->requirePresence('name', 'create')
            //->notEmpty('name', 'You need to provide a name')            
            //;

        //$validator
            //->email('email')
            //->requirePresence('email', 'create')
            //->notEmpty('email');
            
        $validator->add('email', 'valid', [
			'rule' => 'email',
			'message' => 'Invalid email'
		]);

        //$validator
            //->requirePresence('age', 'create')
            //->notEmpty('age');
		
		 $validator
            ->add('age', 'notBlank', [
                'rule' => 'notBlank',
                'message' => 'You need to provide some age',
            ]);

		 $validator
            ->add('age', 'length', [
                'rule' => ['range', 0, 110],
                'message' => 'Age Should be between 0 and 110',
            ]);
		
        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        //$rules->add($rules->isUnique(['username']));
        //$rules->add($rules->isUnique(['email']));
        //$rules->add($rules->existsIn(['group_id'], 'Groups'));

        return $rules;
    }
    
    public function validationHardened(Validator $validator)
	{
		$validator = $this->validationDefault($validator);

		//$validator->add('age', 'length', ['rule' => ['lengthBetween', 1, 3]]);
		return $validator;
	}
        
}
