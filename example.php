<?php
use InvestIdei\InvestIdeiClient\InvestIdeiClient;

$loader = require_once __DIR__ . '/vendor/autoload.php';
$client =  new InvestIdeiClient("YOU_KEY", '1.1');


$ideas = $client->getIdeas();
