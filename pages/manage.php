<?php

global $database;
$addons = new Addons();

if (isset($_POST['username'])) {
	if ($database->update('twit_feed', $_POST)) {
		$parameters['message'] = 'Widget settings updated successfully';
	}
}

$widget = getTwitFeed();
$parameters['widget'] = $widget;
$parameters['_title'] = 'TwitFeed Manage Widget';
$parameters['mainSection'] = 'twit_feed';
$addons->display(TWITFEED_CORE_NAME, 'pages/manage.html', $parameters);