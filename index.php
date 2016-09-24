<?php

error_reporting(E_ALL);

$pattern = isset($_REQUEST['pattern']) ? $_REQUEST['pattern'] : '';
$male = (isset($_REQUEST['genders']) && in_array('male', $_REQUEST['genders'])) || !isset($_REQUEST['genders']);
$female = (isset($_REQUEST['genders']) && in_array('female', $_REQUEST['genders'])) || !isset($_REQUEST['genders']);

$results = array();
if ($pattern != '') {
	$names = $male && $female ? array_merge(file('male.txt'), file('female.txt')) : ($male ? file('male.txt') : ($female ? file('female.txt') : array()));
	sort($names);
	foreach ($names as $name) {
		$name = trim($name);
		if (preg_match(sprintf('/%s/', $pattern), $name)) $results[] = $name;
	}
}

include 'examples.php';

foreach ($examples as $n => $example) {
	$examples[$n]['query'] = sprintf('pattern=%s%s',
										urlencode($example['pattern']),
										in_array('male', $example['options']) ? '&amp;genders[]=male' : (in_array('female', $example['options']) ? '&amp;genders[]=female' : '')
									);
}

$numberNames = count(array_merge(file('male.txt'), file('female.txt')));

include 'layout.php';