<?php

namespace InvestIdei\IIClient\Responses;

use InvestIdei\IIClient\DataStructure;
use InvestIdei\IIClient\Responses\Structures\IdeasMeta;
use InvestIdei\IIClient\Responses\Structures\InvestIdea;

/**
 * Created by IntelliJ IDEA.
 * User: aleksey
 * Date: 2/11/18
 * Time: 23:51
 */

class IdeasResponse extends DataStructure {

	/** @var IdeasMeta */
	public $meta;

	/** @var InvestIdea[] */
	public $ideas = [];

	function seed(array $data) {

		$this->meta = new IdeasMeta($data['meta']);

		foreach ($data['results'] as $idea) {
			$this->ideas[] = new InvestIdea($idea);
		}
	}
}