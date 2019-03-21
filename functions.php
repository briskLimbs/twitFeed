<?php

function twitFeedScript() {
	echo '<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>';
}

function getTwitFeed() {
	global $database;
	return $database->getOne('twit_feed');
}

function twitFeed() {
	$widget = getTwitFeed();
	$username = $widget['username'];
	$limit = $widget['maximum'] > 0 ? $widget['maximum'] : false;
	$width = $widget['width'];
	$height = $widget['height'];

	echo "<a class='twitter-timeline' href='https://twitter.com/{$username}' data-width='{$width}' data-height='{$height}' data-tweet-limit='$limit'>Tweets by @{$username}</a>";
}