<?php

namespace Kadimi\Crypto\RequestHandlers;

use Kadimi\Crypto\Traits\MakesRequest;

class BlockIORequestHandler extends HTTPRequestHandler
{

  use MakesRequest;

  protected $URI = 'https://block.io/api/v2/';

  protected $paths = [
    'new_address' => 'get_new_address',
    'balance' => 'get_balance',
  ];

  public function filterResponse(array $response) {
    switch ($response['request']['path']) {
      case 'balance':
        return $response['response']['data']->available_balance;
      default:
        return false;
    }
  }
}
