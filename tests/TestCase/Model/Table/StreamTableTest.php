<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StreamTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StreamTable Test Case
 */
class StreamTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\StreamTable
     */
    protected $Stream;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Stream',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Stream') ? [] : ['className' => StreamTable::class];
        $this->Stream = $this->getTableLocator()->get('Stream', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Stream);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\StreamTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
