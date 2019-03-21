<?php

/**
* Views Randomizer is an addon for BriskLimbs that allows you to
* set random views for any given video. 
* @version: 1.0
* @BriskLimbs: 1.0^
* @since: 21st March, 2019
* @author: Saqib Razzaq
* @website: https://github.com/saqirzzq
*/

require 'functions.php';
$addons = new Addons();

define('TWITFEED_CORE_PATH', __DIR__);
define('TWITFEED_CORE_NAME', basename(TWITFEED_CORE_PATH));
$pages = TWITFEED_CORE_NAME . '|pages';
$menu = array(
  'twit_feed' => array(
    'display_name' => 'TwitFeed',
    'sub' => array(
      'Manage' => $pages . '|manage.php'
    )
  )
);

$addons->addMenu($menu);
$addons->addTrigger('twitFeedScript', 'footer_end');
$addons->addTrigger('twitFeed', getTwitFeed()['placement']);