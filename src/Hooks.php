<?php

namespace MediaWiki\Extension\Manolito;

class Hooks {

	public static function onParserFirstCallInit( \Parser $parser ) {
		$parser->setFunctionHook( 'numberOfWords', [ self::class, 'renderNumberOfWords' ] );
	}

	public static function renderNumberOfWords( \Parser $parser, $param0 = '' ) {
		$words = explode(" ", $param0);
		$output = "<i>$param0</i> contains ".count($words)." words.";
		return $output;
	}

}