<?php
/**
 * Copyright (c) 2013 by Bluz PHP Team
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

/**
 * @namespace
 */
namespace Bluz\Tests\Db;

use Bluz;
use Bluz\Db;
use Bluz\Tests;
use Bluz\Tests\Db\Fixtures;

/**
 * Test class for Row.
 * Generated by PHPUnit on 2011-07-27 at 13:52:01.
 */
class RowTest extends Bluz\Tests\TestCase
{

    /**
     * @var Bluz\Db\Row
     */
    protected $row;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        parent::setUp();
        $this->row = new Bluz\Tests\Db\Fixtures\ConcreteRow();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }

    /**
     * @covers Bluz\Db\Row::__get
     */
    public function test__get()
    {
        $this->assertNull($this->row->someValue);
    }

    /**
     * @covers Bluz\Db\Row::__set
     */
    public function test__set()
    {
        $this->row->someValue = 'foo';
        $this->assertEquals('foo', $this->row->someValue);
    }

    /**
     * @todo Implement test__isset().
     */
    public function test__isset() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @todo Implement testSave().
     */
    public function testSave()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @todo Implement testDelete().
     */
    public function testDelete()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @todo Implement testRefresh().
     */
    public function testRefresh()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Bluz\Db\Row::getTable
     */
    public function testGetTable()
    {
        $table = $this->row->getTable();
        $this->assertTrue($table instanceof Bluz\Db\Table);
    }

    /**
     * @covers Bluz\Db\Row::getTable
     * @expectedException Bluz\Db\TableNotFoundException
     */
    public function testGetTableException()
    {
        $this->row = new Bluz\Tests\Db\Fixtures\ConcreteRowWithInvalidTable();
        $this->row->getTable();
    }
    
    /**
     * @todo Implement testGetRelation().
     */
    public function testGetRelation()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }
    
    /**
     * @expectedException Bluz\Db\RelationNotFoundException
     */
    public function testGetRelationException()
    {
        $this->row->getRelation('wrongRelation');
    }

    /**
     * @todo Implement testSetRelation().
     */
    public function testSetRelation()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @todo Implement testToArray().
     */
    public function testToArray()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @todo Implement testSetFromArray().
     */
    public function testSetFromArray()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

}

