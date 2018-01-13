<?php
namespace App\Test\TestCase\Controller;

use App\Controller\RealestatesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\RealestatesController Test Case
 */
class RealestatesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.realestates',
        'app.users',
        'app.phones',
        'app.phones_realestates',
        'app.phones_users',
        'app.types',
        'app.categories',
        'app.convenience_grades',
        'app.heating_types',
        'app.condition_of_properties',
        'app.parkings',
        'app.images'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
