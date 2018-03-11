<?php

namespace InvestIdei\InvestIdeiClient;

use InvestIdei\InvestIdeiClient\Responses\BrokersResponse;
use InvestIdei\InvestIdeiClient\Responses\DealsResponse;
use InvestIdei\InvestIdeiClient\Responses\IdeasResponse;
use InvestIdei\InvestIdeiClient\Responses\Structures\Deal;
use InvestIdei\InvestIdeiClient\Responses\Structures\InvestIdea;
use RestClient;

class InvestIdeiClient {
	protected $key;

	protected $version;

	protected $api;

	/**
	 * InvestIdeiClient constructor.
	 *
	 * @param        $key
	 * @param string $version
	 */
	public function __construct($key, $version = '1.1') {
		$this->key = $key;

		$this->api = new RestClient([
			'base_url'     => "https://invest-idei.ru/api/v$version",
			'curl_options' => [
				CURLOPT_SSL_VERIFYHOST => 0,
				CURLOPT_SSL_VERIFYPEER => 0,
			],

		]);
	}

	/**
	 * @param $type
	 * @param $route
	 * @param $params
	 *
	 * @return RestInvestIdeiClient
	 * @throws InvestIdeiClientException
	 */
	protected function fire($route, $type, $params = null) {
		$params = is_array($params) ? $params : [];
		$params['api_key'] = $this->key;

		$rawResponse = $this->api->{$type}($route, $params);
		$response = json_decode($rawResponse->response,true);

		if ($rawResponse->info->http_code != 200 && is_null($response)) {
			throw new InvestIdeiClientException($rawResponse->response);
		}

		if (!$response['success']) {

			if (isset($response['errors'])){
				$errors = implode('; ', $response['errors']);
			} else {
				$errors = $response['reason'];
			}

			throw new InvestIdeiClientException($errors);
		}

		return $response;
	}

	/**
	 * @param array|null $params
	 *
	 * @return IdeasResponse
	 * @throws InvestIdeiClientException
	 */
	function getIdeas($params = null) {
		$route = '/ideas';

		$decodedResponse = $this->fire($route, 'get', $params);

		return new IdeasResponse($decodedResponse);
	}

	/**
	 * @param $ideaId
	 *
	 * @return InvestIdea
	 * @throws InvestIdeiClientException
	 */
	function getIdeaById($ideaId) {
		$route = "/ideas/$ideaId";

		$decodedResponse = $this->fire($route, 'get');

		return new InvestIdea($decodedResponse['results']);
	}

	/**
	 * @param array|null $params
	 *
	 * @return BrokersResponse
	 * @throws InvestIdeiClientException
	 */
	function getBrokers($params = null) {
		$route = '/brokers';

		$rawResponse = $this->fire($route, 'get', $params);

		return new BrokersResponse($rawResponse);
	}

	/**
	 * @param $params
	 *
	 * @return boolean
	 * @throws InvestIdeiClientException
	 */
	function addIdeaRating($params) {
		$route = "/ideas/{$params['id']}/rating";

		$rawResponse = $this->fire($route, 'post', ['type' => $params['type']]);

		return $rawResponse['success'];
	}

	/**
	 * @param array|null $params
	 *
	 * @return mixed
	 * @throws InvestIdeiClientException
	 */
	function getDeals($params = null) {
		$route = '/insider-radar/deals';

		$rawResponse = $this->fire($route, 'get', $params);

		return new DealsResponse($rawResponse);
	}

	/**
	 * @param $dealId
	 *
	 * @return Deal
	 * @throws InvestIdeiClientException
	 */
	function getDealById($dealId) {
		$route = "/insider-radar/deals/$dealId";

		$rawResponse = $this->fire($route, 'get');

		return new Deal($rawResponse['results']);
	}
}