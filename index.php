<?php

date_default_timezone_set('Europe/Prague');

// autoinclude
$recIterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator(__DIR__));
$regex = new RegexIterator($recIterator, '/\.php$/i');

foreach ($regex as $item) {
	include $item->getPathname();
}

$presenter = new \CrawlerModule\StatistickeUdajePresenter();
if(!empty($_GET['ico'])) {
	$presenter->actionRun($_GET['ico']);
} else {
	throw new InvalidArgumentException('set ico');
}
