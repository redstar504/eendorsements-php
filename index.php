<?php

require_once "eEndorsementsAPIExchange.php";

$keys = array(
	'apiKey' => 'b52e9b69b56e4ea1c260b2848ed2bf2e',
	'apiSecretKey' => '030eafa393d2b1ab7df04cad70e5d2b4'
);

$api = new eEndorsementsAPIExchange($keys);

// pass "me" to the users/view method to get currently logged in user

$user = $api->makeRequest('http://brayden.eendorsements.com/api/users/view/me');

$user = json_decode($user, true);

echo 'Full name: ' . $user['first_name'] . ' ' . $user['last_name'];
