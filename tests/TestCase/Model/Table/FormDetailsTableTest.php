<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FormDetailsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FormDetailsTable Test Case
 */
class FormDetailsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FormDetailsTable
     */
    public $FormDetails;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.form_details'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('FormDetails') ? [] : ['className' => 'App\Model\Table\FormDetailsTable'];
        $this->FormDetails = TableRegistry::get('FormDetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FormDetails);

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
