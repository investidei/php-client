<?php
/**
 * Created by IntelliJ IDEA.
 * User: aleksey
 * Date: 2/9/18
 * Time: 18:05
 */

namespace InvestIdei\IIClient\Responses\Structures;

use InvestIdei\IIClient\DataStructure;

class Investor extends DataStructure {
	public $name;
	public $relation;

	function seed(array $data) {
		$this->name = $data['name'];
		$this->relation = $data['relation'];
	}
}