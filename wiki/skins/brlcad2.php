<?php

if( !defined( 'MEDIAWIKI' ) ) {
	die( -1 );
}

class SkinBrlCad2 extends SkinTemplate {
	/** Using monobook. */
	function initPage(OutputPage $out ) {
		parent::initPage( $out );
		$this->skinname  = 'brlcad2';
		$this->stylename = 'brlcad2';
		$this->template  = 'BrlCad2Template';
	}
}

class BrlCad2Template extends QuickTemplate {
	function execute() {
		global $wgUser;
		$skin = $wgUser->getSkin();
		wfSuppressWarnings();
		require_once( '/usr/web/brlcad.org/skin2/page.tpl.php' );
		wfRestoreWarnings();
	}
}
