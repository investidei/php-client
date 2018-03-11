<?php
/**
 * Created by IntelliJ IDEA.
 * User: aleksey
 * Date: 2/9/18
 * Time: 19:40
 */

namespace InvestIdei\Client\Responses\Structures;

class IdeasMeta extends Meta {
	public $status;

	public $currency;

	public $jurisdiction;

	public $ticker;

	function __construct(array $data = null) {
		parent::__construct($data);

		$this->status = $data['status'];
		$this->currency = $data['currency'];
		$this->ticker = $data['ticker'];
	}
}