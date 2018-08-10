<?php

$user = "USERNAME";
$pass = "PASSWORD";
$baseUrl = "https://emmausbible.ccbchurch.com/api.php?srv=";

$curl = curl_init();
$endpoint = $_GET['endpoint'];

curl_setopt($curl, CURLOPT_USERPWD, $user . ":" . $pass);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);


switch ($endpoint) {
  // Get a list of groups
  case 'group_list':
    curl_setopt($curl, CURLOPT_URL, $baseUrl . 'group_search');
    break;
  // Get a group's detail information
  case 'group':
    $id = $_GET['id'];
    // Get group details
    // curl_setopt($curl, CURLOPT_URL, $baseUrl . 'group_search');
    break;
  // Add a user to a group
  case 'signup':
    $person = $_POST['person'];
    $group_id = $_POST['group_id'];
    break;
}


$result = curl_exec($curl);
curl_close($curl);


$result = str_replace(array("\n", "\r", "\t"), '', $result);
$result = trim(str_replace('"', "'", $result));

echo json_encode(simplexml_load_string($result));
