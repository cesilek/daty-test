<?php

namespace Daty\Graph;

/**
 * AttributeCollection
 *
 * @author Kryštof Česal
 */
class AttributeCollection {

	/** @var Attribute[] */
	protected $attributes = array();



	/**
	 * @return Attribute
	 */
	public function getAttribute() {
		return reset($this->attributes);
	}



	/**
	 * @return Attribute[]
	 */
	public function getAttributes() {
		return $this->attributes;
	}



	/**
	 * @param Attribute $attribute
	 */
	public function addAttribute(Attribute $attribute) {
		$this->attributes[] = $attribute;
	}



	/**
	 * @param string $type
	 * @return AttributeCollection
	 */
	public function getAttributesByType($type) {
		$attributeCollection = new AttributeCollection();
		foreach ($this->attributes as $attribute) {
			if ($attribute->getType() == $type) {
				$attributeCollection->addAttribute($attribute);
			}
		}
		return $attributeCollection;
	}

}