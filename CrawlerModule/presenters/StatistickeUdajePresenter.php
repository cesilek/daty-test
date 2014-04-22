<?php

namespace CrawlerModule;
use Daty\Sync\Synchronizator;
use Sources\AresStatisticke\Mapper;
use Sources\AresStatisticke\Source;


/**
 * StatistickeUdajePresenter
 *
 * @author Kryštof Česal
 */ 
class StatistickeUdajePresenter {

	public function actionRun($ico) {
		$source = new Source();
		$source->setParams(array('ico' => $ico));
		$synchronizator = new Synchronizator;
		$synchronizator->addMapperToSync(new Mapper($source));
		$synchronizator->sync();
	}

}