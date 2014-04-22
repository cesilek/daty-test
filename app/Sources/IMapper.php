<?php

namespace Daty\Sources;

use Daty\Graph\Edge;
use Daty\Graph\Node;

/**
 * IMapper
 *
 * @author Kryštof Česal
 */
interface IMapper {


	public function __construct(ISource $source);



	/**
	 * @return Node[]
	 */
	public function getNodes();



	/**
	 * @return Edge[]
	 */
	public function getEdges();

}