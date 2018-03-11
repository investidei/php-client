<?php

namespace InvestIdei\InvestIdeiClient\Responses\Structures;

use InvestIdei\InvestIdeiClient\DataStructure;

class Broker extends DataStructure {
	/** @var int */
	public $id;

	/** @var string */
	public $name;

	/** @var int */
	public $rating;

	/** @var int */
	public $ideas_count;

	/** @var int */
	public $ideas_positive;

	/** @var string */
	public $description;

	/** @var float */
	public $accuracy;

	/** @var float */
	public $profitable_ideas_avg_yield;

	/** @var int */
	public $total_profitable_ideas;

	/** @var float */
	public $unprofitable_ideas_avg_yield;

	/** @var int */
	public $total_unprofitable_ideas;

	/** @var int */
	public $best_idea_id;

	/** @var Specialization */
	public $specialization_resume;

	/** @var int */
	public $new_ideas_per_month;

	/** @var int */
	public $idea_avg_days_long;

	function seed(array $data) {
		$this->id = (int)$data['id'];
		$this->name = $data['name'];
		$this->rating = (int)$data['rating'];
		$this->ideas_count = (int)$data['ideas_count'];
		$this->ideas_positive = (int)$data['ideas_positive'];
		$this->description = $data['description'];
		$this->accuracy = (float)$data['accuracy'];
		$this->profitable_ideas_avg_yield = (float)$data['profitable_ideas_avg_yield'];
		$this->total_profitable_ideas = (int)$data['total_profitable_ideas'];
		$this->unprofitable_ideas_avg_yield = (float)$data['unprofitable_ideas_avg_yield'];
		$this->total_unprofitable_ideas = (int)$data['total_unprofitable_ideas'];
		$this->best_idea_id = (int)$data['best_idea_id'];
		$this->specialization_resume = new Specialization($data['specialization_resume']);
		$this->new_ideas_per_month = (int)$data['new_ideas_per_month'];
		$this->idea_avg_days_long = (int)$data['idea_avg_days_long'];
	}
}