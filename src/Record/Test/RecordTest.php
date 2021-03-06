<?php
/**
 * Part of Windwalker project Test files.
 *
 * @copyright  Copyright (C) 2014 - 2015 LYRASOFT Taiwan, Inc. All rights reserved.
 * @license    GNU Lesser General Public License version 3 or later.
 */

namespace Windwalker\Record\Test;

use Windwalker\Database\Test\Mysql\AbstractMysqlTest;
use Windwalker\Record\Record;

/**
 * Test class of Record
 *
 * @since 2.0
 */
class RecordTest extends AbstractMysqlTest
{
	/**
	 * Test instance.
	 *
	 * @var Record
	 */
	protected $instance;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 *
	 * @return void
	 */
	protected function setUp()
	{
		// $this->instance = new Record;
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 *
	 * @return void
	 */
	protected function tearDown()
	{
	}

	/**
	 * Method to test __set().
	 *
	 * @return void
	 *
	 * @covers Windwalker\Record\Record::__set
	 * @TODO   Implement test__set().
	 */
	public function test__set()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * Method to test __get().
	 *
	 * @return void
	 *
	 * @covers Windwalker\Record\Record::__get
	 * @TODO   Implement test__get().
	 */
	public function test__get()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * Method to test save().
	 *
	 * @return void
	 *
	 * @covers Windwalker\Record\Record::save
	 * @TODO   Implement testSave().
	 */
	public function testSave()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * Method to test bind().
	 *
	 * @return void
	 *
	 * @covers Windwalker\Record\Record::bind
	 * @TODO   Implement testBind().
	 */
	public function testBind()
	{
		$record = new Record('ww_flower');

		$record->bind(
			array(
				'title' => 'sakura',
				'fake' => 'cat'
			)
		);

		$this->assertEquals('sakura', $record->title);
		$this->assertEquals(null, $record->fake);
	}

	/**
	 * Method to test load().
	 *
	 * @return void
	 *
	 * @covers Windwalker\Record\Record::load
	 * @TODO   Implement testLoad().
	 */
	public function testLoad()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * Method to test delete().
	 *
	 * @return void
	 *
	 * @covers Windwalker\Record\Record::delete
	 * @TODO   Implement testDelete().
	 */
	public function testDelete()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * Method to test reset().
	 *
	 * @return void
	 *
	 * @covers Windwalker\Record\Record::reset
	 * @TODO   Implement testReset().
	 */
	public function testReset()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * Method to test check().
	 *
	 * @return void
	 *
	 * @covers Windwalker\Record\Record::check
	 * @TODO   Implement testCheck().
	 */
	public function testCheck()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * Method to test store().
	 *
	 * @return void
	 *
	 * @covers Windwalker\Record\Record::store
	 * @TODO   Implement testStore().
	 */
	public function testStore()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * Method to test hasPrimaryKey().
	 *
	 * @return void
	 *
	 * @covers Windwalker\Record\Record::hasPrimaryKey
	 * @TODO   Implement testHasPrimaryKey().
	 */
	public function testHasPrimaryKey()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * Method to test appendPrimaryKeys().
	 *
	 * @return void
	 *
	 * @covers Windwalker\Record\Record::appendPrimaryKeys
	 * @TODO   Implement testAppendPrimaryKeys().
	 */
	public function testAppendPrimaryKeys()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * Method to test getKeyName().
	 *
	 * @return void
	 *
	 * @covers Windwalker\Record\Record::getKeyName
	 * @TODO   Implement testGetKeyName().
	 */
	public function testGetKeyName()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * Method to test getFields().
	 *
	 * @return void
	 *
	 * @covers Windwalker\Record\Record::getFields
	 * @TODO   Implement testGetFields().
	 */
	public function testGetFields()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	public function testHasField()
	{
		$record = new Record('ww_flower');

		$this->assertTrue($record->hasField('title'));
		$this->assertFalse($record->hasField('chicken'));
	}

	/**
	 * Method to test getTableName().
	 *
	 * @return void
	 *
	 * @covers Windwalker\Record\Record::getTableName
	 * @TODO   Implement testGetTableName().
	 */
	public function testGetTableName()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * Method to test getIterator().
	 *
	 * @return void
	 *
	 * @covers Windwalker\Record\Record::getIterator
	 * @TODO   Implement testGetIterator().
	 */
	public function testGetIterator()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * Method to test __clone().
	 *
	 * @return void
	 *
	 * @covers Windwalker\Record\Record::__clone
	 */
	public function test__clone()
	{
		$record = new Record('#__flower');

		$record->title = 'sakura';

		$new = clone $record;

		$new->title = 'sunflower';

		$this->assertEquals('sakura', $record->title);
	}
}
