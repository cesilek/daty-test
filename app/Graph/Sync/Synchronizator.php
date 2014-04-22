<?php

namespace Daty\Sync;

use Daty\Graph\Edge;
use Daty\Graph\Node;
use Daty\Sources\IMapper;

/**
 * Synchronizator
 *
 * @author Kryštof Česal
 */
class Synchronizator {


	/** @var Node[] */
	protected $nodes;

	/** @var Edge[] */
	protected $edges;



	public function addMapperToSync(IMapper $mapper) {
		$this->nodes = $mapper->getNodes();
		$this->edges = $mapper->getEdges();
	}



	public function sync() {
		// Tady by normálně proběhl zápis do db..
		echo "<pre>";
		echo "---- nodes ----\n";
		echo "---------------\n\n";
		foreach ($this->nodes as $node) {
			echo $node;
		}
		echo "---- edges ----\n";
		echo "---------------\n\n";
		foreach ($this->edges as $edge) {
			echo $edge;
		}
		echo "</pre>";
	}

}