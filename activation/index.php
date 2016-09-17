<?php
require 'vendor/autoload.php';
use Parse\ParseClient;

ParseClient::initialize('ZBCokLE4J4xJVXsfSc6wRoppKFzPEsjniv3iQfxo', 'eF720l840RYIGYtLfYCb0qUcPA0bt2ypCSOkoYRq', 'izrDisqkNUIFhUm4g9cU9A771YFeEugoNVICzgUv');

use Parse\ParseObject;
use Parse\ParseCloud;
$result = ParseCloud::run('RequestActiviationCode_Wechat', []);

echo $result;

?>
