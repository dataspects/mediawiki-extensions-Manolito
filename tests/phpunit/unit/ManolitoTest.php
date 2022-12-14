<?php

# https://www.mediawiki.org/wiki/Manual:PHP_unit_testing/Writing_unit_tests_for_extensions

namespace MediaWiki\Extension\Manolito;

class ManolitoTest extends \MediaWikiUnitTestCase {

	protected function setUp(): void {
		parent::setUp();
	}

	protected function tearDown(): void {
		parent::tearDown();
	}

	/**
	 * @covers MediaWiki\Extension\Manolito\TextAccounting
	 */
	public function testRenderNumberOfWords() {
		$str = "We are learning how to code.";
		$output = TextAccounting::numberOfWords($str);
		// echo "\nEcho info like this...\n";
		$this->assertEquals( $output, "<i>$str</i> contains 6 words." );
	}
}