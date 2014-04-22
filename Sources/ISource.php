<?php

namespace Sources;

interface ISource {

	/**
	 * @param array $params
	 */
	public function setParams($params);



	/**
	 * @return string|bool
	 */
	public function query();

}