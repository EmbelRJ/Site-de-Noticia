<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NewsTypeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NewsTypeTable Test Case
 */
class NewsTypeTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\NewsTypeTable
     */
    protected $NewsType;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.NewsType',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('NewsType') ? [] : ['className' => NewsTypeTable::class];
        $this->NewsType = TableRegistry::getTableLocator()->get('NewsType', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->NewsType);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
