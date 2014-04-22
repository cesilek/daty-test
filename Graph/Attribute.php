<?php

namespace Daty\Graph;

use DateTime;

/**
 * Attribute
 *
 * @author Kryštof Česal
 */
class Attribute {

	/** @var string */
	protected $type;

	/** @var string|int|bool */
	protected $value;

	/** @var DateTime */
	protected $from;

	/** @var DateTime */
	protected $to;



	function __construct($type, $value, $from = NULL, $to = NULL) {
		$this->type = $type;
		$this->value = $value;
		$this->from = $from;
		$this->to = $to;
	}



	/**
	 * @return \DateTime
	 */
	public function getFrom() {
		return $this->from;
	}



	/**
	 * @return \DateTime
	 */
	public function getTo() {
		return $this->to;
	}



	/**
	 * @return string
	 */
	public function getType() {
		return $this->type;
	}



	/**
	 * @return bool|int|string
	 */
	public function getValue() {
		return $this->value;
	}



	function __toString() {
		return $this->getType() . ": " . $this->getValue() . " (" . ($this->getFrom() ? $this->getFrom()->format('m.d.y') : "null") . ", " . ($this->getFrom() ? $this->getFrom()->format('m.d.y') : "null") . ")";
	}

}