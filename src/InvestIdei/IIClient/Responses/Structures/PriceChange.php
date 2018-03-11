<?php
/**
 * Created by IntelliJ IDEA.
 * User: aleksey
 * Date: 2/9/18
 * Time: 18:11
 */

namespace InvestIdei\IIClient\Responses\Structures;

use InvestIdei\IIClient\DataStructure;

class PriceChange extends DataStructure {
	/** @var float */
	public $value;

	/** @var float */
	public $percentage;

	/** @var string */
	public $direction;

	function seed(array $data) {
		$this->value = (float)$data['value'];
		$this->percentage = (float)$data['percentage'];
		$this->direction = $data['direction'];
	}
}