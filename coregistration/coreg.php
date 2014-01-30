<?php

require_once "../eEndorsementsAPIExchange.php";

$settings = array(
	'apiKey' => 'b52e9b69b56e4ea1c260b2848ed2bf2e',
	'apiSecretKey' => '030eafa393d2b1ab7df04cad70e5d2b4'
);

// plan 5 is the annual business plan

$user = array(
	'firstName' => $_GET['firstName'],
	'lastName' => $_GET['lastName'],
	'email' => $_GET['email'],
	'password' => $_GET['password'],
	'companyName' => $_GET['companyName'],
	'userSubscription' => array('plan' => 5)
);

$postFields = array('rest_registration' => $user);

$ee = new eEndorsementsAPIExchange($settings);
$ee->setPostFields($postFields);

$result = $ee->makeRequest('http://brayden.eendorsements.com/api/users/create');

echo $result;
