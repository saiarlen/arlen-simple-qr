<?php
/*
   Plugin Name: Simple QR
   Plugin URI: https://www.arlencode.com
   description: Now you can generate QR codes for any text, mobile, email and many more with ease.
   Version: 1.0.0
   Author: Saiarlen
   Author URI: http://www.saiarlen.com
   License: GPL v2 or later
   License URI:       https://www.gnu.org/licenses/gpl-2.0.html
   Text Domain:       arlen-simple-qr
   */
   /*
   Simple QR is free software: you can redistribute it and/or modify
   it under the terms of the GNU General Public License as published by
   the Free Software Foundation, either version 2 of the License, or
   any later version.

   Simple QR is distributed in the hope that it will be useful,
   but WITHOUT ANY WARRANTY; without even the implied warranty of
   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
   GNU General Public License for more details.

   You should have received a copy of the GNU General Public License
   along with Simple QR. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
   */

defined('ABSPATH') || exit;

/**
 * Main class
 */
class AlmsAsqSetup
{
	public function __construct()
	{
		require_once plugin_dir_path( __FILE__ ) . 'inc/asq-init.php';
      require_once plugin_dir_path( __FILE__ ) . 'inc/asq-admin-css.php';
	}
	
}

if(class_exists('AlmsAsqSetup'))
{
	$alms_class = new AlmsAsqSetup();
}

if(class_exists('AlmsAwpBootup')){
	 new AlmsAsqBootup();
}

