<?php

# See https://www.mediawiki.org/wiki/Best_practices_for_extensions ;)

namespace MediaWiki\Extension\Manolito;

class TextAccounting {

  public static function numberOfWords($str) {
    $words = explode(" ", $str);
    $output = "<i>$str</i> contains ".count($words)." words.";
    return $output;
  }

}