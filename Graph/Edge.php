<?php

namespace Daty\Graph;


/**
 * Edge
 *
 * @author Kryštof Česal
 */
class Edge {

	/** @var string */
	protected $type;

	/** @var Node */
	protected $nodeA;

	/** @var Node */
	protected $nodeB;

	/** @var AttributeCollection */
	protected $attributes;



	function __construct($nodeA, $nodeB, $type) {
		$this->nodeA = $nodeA;
		$this->nodeB = $nodeB;
		$this->type = $type;
		$this->attributes = new AttributeCollection();
	}



	/**
	 * @param Attribute $attribute
	 */
	public function addAttribute(Attribute $attribute) {
		$this->attributes->addAttribute($attribute);
	}



	/**
	 * @return AttributeCollection
	 */
	public function getAttributes() {
		return $this->getAttributes();
	}
}