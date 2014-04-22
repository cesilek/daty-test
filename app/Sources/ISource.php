<?php

namespace Daty\Sources;

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