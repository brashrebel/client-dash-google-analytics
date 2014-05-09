<?php
/*
Plugin Name: Client Dash Google Analytics Add-on
Description: Integrates Google Analytics reporting with Client Dash
Version: 0.1
Author: Kyle Maurer
Author URI: http://realbigmarketing.com/staff/kyle
*/
function cdga_test() {
$url = 'https://www.googleapis.com/analytics/v3/data/ga?ids=ga%3A77904511&start-date=yesterday&end-date=today&metrics=ga%3Asessions&output=dataTable&samplingLevel=DEFAULT&key=AIzaSyBIjCeKlZIrTjKDyr16wVwFJY-27qmeWoE';

	$response = wp_remote_get($url);
	print '<pre>';
	print_r($response);
	print '</pre>';
}

add_shortcode('cdga', 'cdga_test');
?>