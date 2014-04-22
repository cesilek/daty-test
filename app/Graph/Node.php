<?php

namespace Daty\Graph;

/**
 * Node
 *
 * @author Kryštof Česal
 */
class Node {

	/** @var string */
	protected $type;

	/** @var AttributeCollection */
	protected $attributes;



	function __construct($type) {
		$this->type = $type;
		$this->attributes = new AttributeCollection;
	}



	/**
	 * @param Attribute $attribute
	 */
	public function addAttribute(Attribute $attribute) {
		$this->attributes->addAttribute($attribute);
	}



	function __toString() {
		$string = "node $this->type\n";
		foreach ($this->attributes->getAttributes() as $attribute) {
			$string .= "	" . $attribute."\n";
		}
		return $string."\n";
	}

}