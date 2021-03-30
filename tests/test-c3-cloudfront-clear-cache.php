<?php
require_once( 'c3-cloudfront-clear-cache.php' );
class CloudFront_Clear_Cache_Test extends WP_UnitTestCase
{
	function test_should_defined_c3_plugin_path() {
		$result = defined('C3_PLUGIN_PATH');
		$this->assertTrue( $result );
	}
	function test_should_defined_c3_plugin_url() {
		$result = defined('C3_PLUGIN_URL');
		$this->assertTrue( $result );
	}
	function test_should_defined_c3_plugin_root() {
		$result = defined('C3_PLUGIN_ROOT');
		$this->assertTrue( $result );
	}
}
