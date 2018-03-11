<?php
/**
 * Created by IntelliJ IDEA.
 * User: aleksey
 * Date: 2/9/18
 * Time: 18:03
 */

namespace InvestIdei\IIClient\Responses\Structures;

use InvestIdei\IIClient\DataStructure;

class Corporate extends DataStructure {
	public $name;
	public $logo;

	function seed(array $data) {
		$this->name = $data['name'];
		$this->logo = $data['logo'];
	}
}