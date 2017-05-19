<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsersGroupsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsersGroupsTable Test Case
 */
class UsersGroupsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UsersGroupsTable
     */
    public $UsersGroups;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.users_groups',
        'app.users',
        'app.user_groups',
        'app.groups',
        'app.groups_user_groups',
        'app.user_groups_users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('UsersGroups') ? [] : ['className' => 'App\Model\Table\UsersGroupsTable'];
        $this->UsersGroups = TableRegistry::get('UsersGroups', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UsersGroups);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
