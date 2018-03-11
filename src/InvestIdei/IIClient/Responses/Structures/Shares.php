<?php
/**
 * Created by IntelliJ IDEA.
 * User: aleksey
 * Date: 2/9/18
 * Time: 18:08
 */

namespace InvestIdei\IIClient\Responses\Structures;

use InvestIdei\IIClient\DataStructure;

class Shares extends DataStructure {
	/** @var string */
	public $type;

	/** @var float */
	public $percentage;

	/** @var int */
	public $count;

	/** @var float */
	public $value_before_deal;

	/** @var float */
	public $value_after_deal;

	/** @var float */
	public $percentage_before_deal;

	/** @var float */
	public $percentage_after_deal;

	function seed(array $data) {
		$this->type = $data['type'];
		$this->percentage = (float)$data['percentage'];
		$this->count = (int)$data['count'];
		$this->value_before_deal = (float)$data['value_before_deal'];
		$this->value_after_deal = (float)$data['value_after_deal'];
		$this->percentage_before_deal = (float)$data['percentage_before_deal'];
		$this->percentage_after_deal = (float)$data['percentage_after_deal'];
	}
}