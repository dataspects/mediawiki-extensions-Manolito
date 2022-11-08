<?php

class SpecialManolito extends SpecialPage {
	function __construct() {
		parent::__construct( 'Manolito' );
	}

	function execute( $par ) {
		$request = $this->getRequest();
		$output = $this->getOutput();
		$this->setHeaders();
		$output->addHTML( '<span id="myName"></span>' );
		$output->addJsConfigVars(array(
			'wgServer' => $GLOBALS['wgServer'],
			'user' => $this->getUser()->getName()
		));
		$output->addModules( 'ext.manolito' );
	}

}