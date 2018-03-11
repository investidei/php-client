<?php
/**
 * Created by IntelliJ IDEA.
 * User: aleksey
 * Date: 2/11/18
 * Time: 23:54
 */

namespace InvestIdei\Client\Responses;

use InvestIdei\Client\DataStructure;
use InvestIdei\Client\Responses\Structures\Broker;

class BrokersResponse extends DataStructure {
    /** @var Broker[] */
    public $brokers;

    function seed(array $data) {
        $this->brokers = [];

        foreach ($data['results'] as $broker) {
            $this->brokers[] = new Broker($broker);
        }
    }
}