<?php
class AllTest extends CakeTestSuite {

/**
 * All test suite
 *
 * @author Jun Nishikawa <topaz2@m0n0m0n0.com>
 */
	public static function suite() {
		$suite = new CakeTestSuite('All tests');
		$suite->addTestDirectoryRecursive(TESTS . 'Case');
		return $suite;
	}
}
