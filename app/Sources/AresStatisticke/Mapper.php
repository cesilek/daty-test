<?php

namespace Sources\AresStatisticke;

use Daty\Graph\Edge;
use Daty\Graph\Node;
use Daty\Sources\IMapper;
use Daty\Sources\ISource;


/**
 * Mapper
 *
 * @author Kryštof Česal
 */
class Mapper implements IMapper {


	/** @var ISource */
	protected $source;



	public function __construct(ISource $source) {
		$this->source = $source;
	}



	/**
	 * @return Node[]
	 */
	public function getNodes() {
		return array();
		// TODO: Implement getNodes() method.
	}



	/**
	 * @return Edge[]
	 */
	public function getEdges() {
		return array();
		// TODO: Implement getEdges() method.
	}

}