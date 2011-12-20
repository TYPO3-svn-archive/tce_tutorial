<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2011 Steffen Ritter <steffen.ritter@typo3.org>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/


/**
 * Testcase for t3lib_TcaRelationService
 *
 * @author Steffen Ritter <steffen.ritter@typo3.org>
 * @package TYPO3
 * @subpackage tests/t3lib
 */
class Tx_tcetutorial_TcaRelationserviceTest extends tx_phpunit_testcase {

	/**
	 * @var array
	 */
	protected $containerRecords = array();


	/**
	 * @var array
	 */
	protected $elementRecords = array();

	public function setUp() {
		$this->containerRecords[1] = $GLOBALS['TYPO3_DB']->exec_SELECTgetSingleRow('*', 'tx_tcetutorial_container', 'uid=1');
		$this->containerRecords[2] = $GLOBALS['TYPO3_DB']->exec_SELECTgetSingleRow('*', 'tx_tcetutorial_container', 'uid=2');

		$this->elementRecords [1] = $GLOBALS['TYPO3_DB']->exec_SELECTgetSingleRow('*', 'tx_tcetutorial_element', 'uid=1');
		$this->elementRecords [2] = $GLOBALS['TYPO3_DB']->exec_SELECTgetSingleRow('*', 'tx_tcetutorial_element', 'uid=2');
		$this->elementRecords [3] = $GLOBALS['TYPO3_DB']->exec_SELECTgetSingleRow('*', 'tx_tcetutorial_element', 'uid=3');
	}


	public function tearDown() {
	}

	/**
	 * @test
	 */
	public function inline_CSV_Storage() {
		$tcaRelationService = t3lib_div::makeInstance('t3lib_TcaRelationService', 'tx_tcetutorial_container', 'elements_csv');
		$resultArray = $tcaRelationService->getRecordUidsWithRelationFromCurrentRecord($this->containerRecords[1]);
		$this->assertEquals($resultArray , array(1,2));
		$resultArray2 = $tcaRelationService->getRecordUidsWithRelationFromCurrentRecord($this->containerRecords[2]);
		$this->assertEquals($resultArray2 , array());
	}

	/**
	 * @test
	 */
	public function inline_ForeignField_Storage() {
		$tcaRelationService = t3lib_div::makeInstance('t3lib_TcaRelationService', 'tx_tcetutorial_container', 'elements_foreignfield');
		$resultArray = $tcaRelationService->getRecordUidsWithRelationFromCurrentRecord($this->containerRecords[1]);
		$this->assertEquals($resultArray , array(1,2));
		$resultArray2 = $tcaRelationService->getRecordUidsWithRelationFromCurrentRecord($this->containerRecords[2]);
		$this->assertEquals($resultArray2 , array());
	}
	
	/**
	 * @test
	 */
	public function inline_MM_Storage() {
		$tcaRelationService = t3lib_div::makeInstance('t3lib_TcaRelationService', 'tx_tcetutorial_container', 'elements_mm');
		$resultArray = $tcaRelationService->getRecordUidsWithRelationFromCurrentRecord($this->containerRecords[1]);
		$this->assertEquals($resultArray , array(1,2));
		$resultArray2 = $tcaRelationService->getRecordUidsWithRelationFromCurrentRecord($this->containerRecords[2]);
		$this->assertEquals($resultArray2 , array());
	}
	
	/**
	 * @test
	 */
	public function select_CSV_Storage() {
		$tcaRelationService = t3lib_div::makeInstance('t3lib_TcaRelationService', 'tx_tcetutorial_element', 'categories_csv');
		$resultArray = $tcaRelationService->getRecordUidsWithRelationFromCurrentRecord($this->elementRecords[1]);
		$this->assertEquals($resultArray , array(1,2));
		$resultArray2 = $tcaRelationService->getRecordUidsWithRelationFromCurrentRecord($this->elementRecords[2]);
		$this->assertEquals($resultArray2 , array(4));
		$resultArray3 = $tcaRelationService->getRecordUidsWithRelationFromCurrentRecord($this->elementRecords[3]);
		$this->assertEquals($resultArray3 , array());
	}

	
	/**
	 * @test
	 */
	public function select_MM_Storage() {
		$tcaRelationService = t3lib_div::makeInstance('t3lib_TcaRelationService', 'tx_tcetutorial_element', 'categories_mm');
		$resultArray = $tcaRelationService->getRecordUidsWithRelationFromCurrentRecord($this->elementRecords[1]);
		$this->assertEquals($resultArray , array(1,2));
		$resultArray2 = $tcaRelationService->getRecordUidsWithRelationFromCurrentRecord($this->elementRecords[2]);
		$this->assertEquals($resultArray2 , array(4));
		$resultArray3 = $tcaRelationService->getRecordUidsWithRelationFromCurrentRecord($this->elementRecords[3]);
		$this->assertEquals($resultArray3 , array());
	}

	/**
	 * @test
	 */
	public function group_CSV_Storage() {
		$tcaRelationService = t3lib_div::makeInstance('t3lib_TcaRelationService', 'tx_tcetutorial_container', 'categories_csv');
		$resultArray = $tcaRelationService->getRecordUidsWithRelationFromCurrentRecord($this->containerRecords[1]);
		$this->assertEquals($resultArray , array(1,2,4));
		$resultArray2 = $tcaRelationService->getRecordUidsWithRelationFromCurrentRecord($this->containerRecords[2]);
		$this->assertEquals($resultArray2 , array());
	}

	/**
	 * @test
	 */
	public function group_MM_Storage() {
		$tcaRelationService = t3lib_div::makeInstance('t3lib_TcaRelationService', 'tx_tcetutorial_container', 'categories_mm');
		$resultArray = $tcaRelationService->getRecordUidsWithRelationFromCurrentRecord($this->containerRecords[1]);
		$this->assertEquals($resultArray , array(1,2,4));
		$resultArray2 = $tcaRelationService->getRecordUidsWithRelationFromCurrentRecord($this->containerRecords[2]);
		$this->assertEquals($resultArray2 , array());
	}
}
?>