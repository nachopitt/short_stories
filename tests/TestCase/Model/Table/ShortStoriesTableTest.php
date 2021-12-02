<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ShortStoriesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ShortStoriesTable Test Case
 */
class ShortStoriesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ShortStoriesTable
     */
    protected $ShortStories;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ShortStories',
        'app.Keywords',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ShortStories') ? [] : ['className' => ShortStoriesTable::class];
        $this->ShortStories = $this->getTableLocator()->get('ShortStories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ShortStories);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ShortStoriesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
