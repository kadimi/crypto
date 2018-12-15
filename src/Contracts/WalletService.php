<?php

namespace Kadimi\Crypto\Contracts;

use Kadimi\Crypto\Contracts\RequestHandler;

interface WalletService
{

	public function __construct(RequestHandler $requestHandler, string $uri = '', array $credentials = []);

	public function request(array $parameters = []);

	public function requestNewAddress() : string;
}
