<?php

namespace InvestIdei\InvestIdeiClient\Requests;

use InvalidArgumentException;

/**
 * Created by IntelliJ IDEA.
 * User: aleksey
 * Date: 2/9/18
 * Time: 18:41
 */
class IdeaRatingRequest extends IdeasRequest {
	/**
	 * @throws InvalidArgumentException
	 * @param null $params
	 */
	public function __construct($params = null) {

		if (!is_array($params) && !$params['id']) {
			throw new InvalidArgumentException('Idea ID is required');
		}

		if (!is_array($params) && !$params['type']) {
			throw new InvalidArgumentException('Type is required');
		}

		$this->route .= "/{$params['id']}";

		parent::__construct(['type' => $params['type']]);
	}
}