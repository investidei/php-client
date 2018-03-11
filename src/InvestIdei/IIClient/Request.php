<?php
/**
 * Created by IntelliJ IDEA.
 * User: aleksey
 * Date: 2/9/18
 * Time: 18:24
 */

namespace InvestIdei\IIClient;

abstract class Request {
	protected $route;

	protected $type = 'get';

	protected $params;

	public function __construct($params = null) {
		$this->params = $params;
	}

	/**
	 * @return string
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * @return null
	 */
	public function getParams() {
		return $this->params;
	}

	/**
	 * @return mixed
	 */
	public function getRoute() {
		return $this->route;
	}
}