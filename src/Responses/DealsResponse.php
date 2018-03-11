<?php
/**
 * Created by IntelliJ IDEA.
 * User: aleksey
 * Date: 2/11/18
 * Time: 23:56
 */

namespace InvestIdei\Client\Responses;

use InvestIdei\Client\DataStructure;
use InvestIdei\Client\Responses\Structures\Deal;
use InvestIdei\Client\Responses\Structures\Meta;

class DealsResponse extends DataStructure {
	/** @var Meta */
	public $meta;

	/** @var Deal[] */
	public $deals = [];

	function seed(array $data) {
		foreach ($data['results'] as $result){
			$this->deals[] = new Deal($result);
		}

		$this->meta = new Meta($data['meta']);
	}
}