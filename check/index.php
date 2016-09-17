<?php
require 'vendor/autoload.php';
use Parse\ParseClient;

ParseClient::initialize('ZBCokLE4J4xJVXsfSc6wRoppKFzPEsjniv3iQfxo', 'eF720l840RYIGYtLfYCb0qUcPA0bt2ypCSOkoYRq', 'izrDisqkNUIFhUm4g9cU9A771YFeEugoNVICzgUv');

$number = htmlspecialchars($_GET["number"]);
use Parse\ParseObject;
use Parse\ParseCloud;

$pattern = "/^\d{10}$/";

if (preg_match_all($pattern, $number, $matches_out)) {
  $result = ParseCloud::run('check_status', ["number" => $number]);
  echo $result;
}else{
  echo "您输入的号码有误，请重新输入";
}


?>
