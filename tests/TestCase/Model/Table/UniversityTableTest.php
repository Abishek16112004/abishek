<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UniversityTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UniversityTable Test Case
 */
class UniversityTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UniversityTable
     */
    protected $University;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.University',
        'app.Course',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('University') ? [] : ['className' => UniversityTable::class];
        $this->University = $this->getTableLocator()->get('University', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->University);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\UniversityTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\UniversityTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
