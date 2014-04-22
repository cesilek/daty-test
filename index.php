<?php

date_default_timezone_set('Europe/Prague');
error_reporting(-1);

// autoinclude
$recIterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator(__DIR__ . "/app"));
foreach (new RegexIterator($recIterator, '/\.php$/i') as $item) {
	include $item->getPathname();
}

$presenter = new \CrawlerModule\StatistickeUdajePresenter();
if (!empty($_GET['ico'])) {
	$presenter->actionRun($_GET['ico']);
} else {
	throw new InvalidArgumentException('set ico');
}
