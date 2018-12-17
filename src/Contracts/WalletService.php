<?php

namespace Kadimi\Crypto\Contracts;

use Kadimi\Crypto\Contracts\RequestHandler;

interface WalletService
{
  public function __construct(RequestHandler $requestHandler);
  public function request($path, array $query = []);
  public function requestNewAddress();
  public function requestBalance();
}
