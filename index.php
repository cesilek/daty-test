<?php

date_default_timezone_set('Europe/Prague');
error_reporting(-1);

// autoinclude
spl_autoload_register(function ($class) {
    $recIterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator(__DIR__ . "/app"));
    $class = call_user_func('end', explode('\\', $class));
    foreach (new RegexIterator($recIterator, "/$class\.php$/i") as $item) {
        include_once $item->getPathname();
    }
});

$presenter = new \CrawlerModule\StatistickeUdajePresenter();
if (!empty($_GET['ico'])) {
	$presenter->actionRun($_GET['ico']);
} else {
	throw new InvalidArgumentException('set ico');
}
