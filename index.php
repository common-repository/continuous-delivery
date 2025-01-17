<?php
/**
 * Plugin Name: Continuous Delivery for Digital Goods and Downloads
 * Plugin URI: https://github.com/dreitier/continuous-delivery-for-digital-goods-and-downloads
 * Description: Continuous Delivery for Downloads expands your download portal to a fully-fledged Continuous Delivery pipeline.
 * Version: 1.0.4
 * Author: dreitier GmbH
 * Author URI: https://dreitier.com
 * License: The MIT License (MIT)
 * License URI: https://opensource.org/licenses/MIT
 */

use Dreitier\WordPress\ContinuousDelivery\Ui\AdminPage;

require_once __DIR__ . '/autoload.php';

add_action("plugins_loaded", function () {
	(new \Dreitier\WordPress\ContinuousDelivery\PlugIn())->init();
});

add_action('after_setup_theme', function () {
	if (is_admin()) {
		$ui = new AdminPage();
	}
});