<?php

global $database;
$table = 'twit_feed';
$columns = array(
    'id' => array('type' => 'int(1)', 'special' => 'primary'),
    'username' => array('type' => 'varchar(45)', 'special' => 'NOT NULL'),
    'maximum' => array('type' => 'int(1)', 'special' => 'NOT NULL'),
    'width' => array('type' => 'int(4)', 'special' => 'NOT NULL'),
    'height' => array('type' => 'int(4)', 'special' => 'NOT NULL'),
    'placement' => array('type' => 'varchar(45)', 'special' => 'NOT NULL')
  );

$values = array(
  array(
  	'username' => 'WalkingDead_AMC',
  	'maximum' => '10', 
  	'width' => '300', 
  	'height' => '300', 
  	'placement' => 'watch_sidebar_top'
  )
);

$database->createTable($table, $columns);
$database->insertMulti($table, $values);