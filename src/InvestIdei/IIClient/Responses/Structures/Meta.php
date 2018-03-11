<?php
/**
 * Created by IntelliJ IDEA.
 * User: aleksey
 * Date: 2/9/18
 * Time: 18:18
 */

namespace InvestIdei\IIClient\Responses\Structures;

use InvestIdei\IIClient\DataStructure;

class Meta extends DataStructure {
	/** @var int */
	public $offset;

	/** @var int */
	public $limit;

	/** @var int */
	public $count;

	/** @var int */
	public $total_count;

	/** @var string */
	public $prev_page;

	/** @var string */
	public $next_page;

	function seed(array $data) {
		$this->offset = (int)$data['offset'];
		$this->limit = (int)$data['limit'];
		$this->count = (int)$data['count'];
		$this->total_count = (int)$data['total_count'];
		$this->prev_page = $data['prev_page'];
		$this->next_page = $data['next_page'];
	}
}