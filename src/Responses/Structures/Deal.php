<?php
/**
 * Created by IntelliJ IDEA.
 * User: aleksey
 * Date: 2/9/18
 * Time: 18:03
 */

namespace InvestIdei\Client\Responses\Structures;

use InvestIdei\Client\DataStructure;

class Deal extends DataStructure {
	/** @var int */
	public $id;

	/** @var Corporate */
	public $corporate;

	/** @var Investor */
	public $investor;

	/** @var string */
	public $type;

	/** @var float */
	public $value;

	/** @var string */
	public $currency;

	/** @var string */
	public $date;

	/** @var string */
	public $disclosure_date;

	/** @var Shares */
	public $shares;

	/** @var float */
	public $price;

	/** @var PriceChange */
	public $price_change;

	/** @var float */
	public $price_online;

	/** @var string */
	public $source_link;

	/** @var string */
	public $link;

	function seed(array $data) {
		$this->id = (int)$data['id'];
		$this->corporate = new Corporate($data['corporate']);
		$this->investor = new Investor($data['investor']);
		$this->type = $data['type'];
		$this->value = (float)$data['value'];
		$this->currency = $data['currency'];
		$this->date = $data['date'];
		$this->disclosure_date = $data['disclosure_date'];
		$this->shares = new Shares($data['shares']);
		$this->price = (float)$data['price'];
		$this->price_change = new PriceChange($data['price_change']);
		$this->price_online = (float)$data['price_online'];
		$this->source_link = $data['source_link'];
		$this->link = $data['link'];
	}
}