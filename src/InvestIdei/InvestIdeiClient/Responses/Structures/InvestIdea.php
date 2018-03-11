<?php

namespace InvestIdei\InvestIdeiClient\Responses\Structures;

use InvestIdei\InvestIdeiClient\DataStructure;

class InvestIdea extends DataStructure {
	/** @var int */
	public $id;

	/** @var string */
	public $broker;

	/** @var int */
	public $broker_id;

	/** @var int */
	public $broker_rating;

	/** @var boolean */
	public $is_open;

	/** @var int */
	public $horizon;

	/** @var string */
	public $date_start;

	/** @var float */
	public $price_start;

    /** @var float */
    public $target_price;

	/** @var string */
	public $date_end;

	/** @var float */
	public $price;

	/** @var float */
	public $yield;

	/** @var float */
    public $asset;

	/** @var float */
	public $target_yield;

	/** @var string */
	public $strategy;

	/** @var string */
	public $title;

	/** @var string */
	public $description;

	/** @var string */
	public $ticker;

	/** @var Tags */
	public $tags;

	/** @var string */
	public $image;

	/** @var boolean */
	public $visibility;

	/** @var int */
	public $believe;

	/** @var int */
	public $not_believe;

	/** @var string */
	public $expected_date_end;

	function seed(array $data) {
		$this->id = (int) $data['id'];
		$this->broker = $data['broker'];
		$this->broker_id = (int) $data['broker_id'];
		$this->broker_rating = (int) $data['broker_rating'];
		$this->is_open = (bool) $data['is_open'];
		$this->horizon = (int) $data['horizon'];
		$this->date_start = $data['date_start'];
		$this->price_start = (float) $data['price_start'];
		$this->date_end = empty($data['date_end']) ? null : $data['date_end'];
		$this->price = (float) $data['price'];
        $this->target_price = (float) ($data['target_price'] ?? 0);
		$this->yield = (float) $data['yield'];
        $this->asset = $data['asset'];
		$this->target_yield = (float) $data['target_yield'];
		$this->strategy = $data['strategy'];
		$this->title = $data['title'];
		$this->description = $data['description'];
		$this->ticker = $data['ticker'];
		$this->tags = new Tags($data['tags']);
		$this->image = $data['image'];
		$this->visibility = (bool) $data['visibility'];
		$this->believe = (int) $data['believe'];
		$this->not_believe = (int) $data['not_believe'];
		$this->expected_date_end = $data['expected_date_end'];
	}
}