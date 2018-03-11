<?php
/**
 * Created by IntelliJ IDEA.
 * User: aleksey
 * Date: 2/9/18
 * Time: 17:53
 */

namespace InvestIdei\IIClient\Responses\Structures;

use InvestIdei\IIClient\DataStructure;

class Specialization extends DataStructure {
	/** @var string */
	public $asset;

	/** @var string */
	public $currency;

	/** @var string */
	public $txt;

	function seed(array $data) {
		$this->asset = $data['asset'];
		$this->currency = $data['currency'];
		$this->txt = $data['txt'];
	}
}