<?php

/**
 * This file is part of the Jumph package.
 *
 * (c) Peter Nijssen
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Jumph\Bundle\TimeTrackerBundle\Tests\Controller;

use Jumph\Bundle\AppBundle\Tests\BaseWebTestCase;

/**
 * Functional time category controller tests
 */
class TimeCategoryControllerTest extends BaseWebTestCase
{
    /**
     * Test the overview method
     */
    public function testOverview()
    {
        $this->client->request('GET', '/config/timetracker/category');
        $this->assertTrue($this->client->getResponse()->isSuccessful());
    }

    /**
     * Test the view method
     */
    public function testView()
    {
        $this->client->request('GET', '/config/timetracker/category/1/view');
        $this->assertTrue($this->client->getResponse()->isSuccessful());
    }

    /**
     * Test the add method
     */
    public function testAdd()
    {
        $this->client->request('GET', '/config/timetracker/category/add');
        $this->assertTrue($this->client->getResponse()->isSuccessful());

        $this->client->request('POST', '/config/timetracker/category/add');
        $this->assertTrue($this->client->getResponse()->isSuccessful());
    }

    /**
     * Test the edit method
     */
    public function testEdit()
    {
        $this->client->request('GET', '/config/timetracker/category/1/edit');
        $this->assertTrue($this->client->getResponse()->isSuccessful());

        $this->client->request('POST', '/config/timetracker/category/1/edit');
        $this->assertTrue($this->client->getResponse()->isSuccessful());
    }

    /**
     * Test the delete method
     */
    public function testDelete()
    {
        $this->client->request('DELETE', '/config/timetracker/category/1/delete');
        $this->client->followRedirect();
        $this->assertTrue($this->client->getResponse()->isSuccessful());
    }
}
