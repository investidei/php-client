<?php

namespace InvestIdei\Client\Responses\Structures;

use InvestIdei\Client\DataStructure;

class Tags extends DataStructure {
	/** @var string */
	public $jurisdiction;

	/** @var string */
	public $currency;

	function seed(array $data) {
		$this->jurisdiction = empty($data['jurisdiction']) ? null : $data['jurisdiction'];
		$this->currency = empty($data['currency']) ? null : $data['currency'];
	}
}