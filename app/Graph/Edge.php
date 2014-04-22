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



	function __toString() {
		$string = "edge $this->type\n";
		foreach ($this->attributes->getAttributes() as $attribute) {
			$string .= "	" . $attribute."\n";
		}
		$nodeA = (string)
		$string .= "\n	" . str_replace("	", "		", str_replace('node', "node A:", $this->nodeA));
		$string .= "	" . str_replace("	", "		", str_replace('node', "node B:", $this->nodeB));
		return $string."\n";
	}

}