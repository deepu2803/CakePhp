<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserListsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserListsTable Test Case
 */
class UserListsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UserListsTable
     */
    protected $UserLists;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.UserLists',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('UserLists') ? [] : ['className' => UserListsTable::class];
        $this->UserLists = $this->getTableLocator()->get('UserLists', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->UserLists);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\UserListsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
