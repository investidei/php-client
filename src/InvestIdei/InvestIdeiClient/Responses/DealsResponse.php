<?php
/**
 * Created by IntelliJ IDEA.
 * User: aleksey
 * Date: 2/11/18
 * Time: 23:56
 */

namespace InvestIdei\InvestIdeiClient\Responses;

use InvestIdei\InvestIdeiClient\DataStructure;
use InvestIdei\InvestIdeiClient\Responses\Structures\Deal;
use InvestIdei\InvestIdeiClient\Responses\Structures\Meta;

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