<?php

/**
 * Instagram PHP API
 * Example for using the getUserMedia() method
 * 
 * @link https://github.com/cosenary/Instagram-PHP-API
 * @author Christian Metz
 * @since 31.01.2012
 */

require 'Instagram-PHP-API-master\src\Instagram.php';
use MetzWeb\Instagram\Instagram;

// Initialize class
$instagram = new Instagram(array(
  'appId'      => '4275119835920404',
  'appSecret'   => '615662ee031ff6f7e1334e04dceb83b3',
  'redirectUri' => 'https://kelsey-d.github.io/'
));

  // Store user access token
  $instagram->setAccessToken('IGQWRPbWg3c245VnZAkNjFtSFAzYThiZAkFRei1qcFFaek95SG1GalpkODFuTmFjdE9aQ0xJT3JSSDRuZAFFxY1J1RmlnMU5kZAldVRFI4WVhmNTJfdGU3dHp5RzBabmVqQURxNVFrUmhlcnU1QUo1VEwxaVF3UDlvb0kZD');

  // Get the most recent media published by a user
  $media = $instagram->getUserMedia();
 ?>
