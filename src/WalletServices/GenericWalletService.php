<?php

namespace Kadimi\Crypto\WalletServices;


use Kadimi\Crypto\Contracts\RequestHandler as RequestHandlerContract;
use Kadimi\Crypto\Contracts\WalletService as WalletServiceContract;

class GenericWalletService implements WalletServiceContract
{
	public $requestHandler;

	public function __construct(RequestHandlerContract $requestHandler) {
		$this->requestHandler = $requestHandler;
	}

	public function request($path, array $query = []) {
		return $this->requestHandler->makePrivateRequest($path, $query);
	}

	public function requestNewAddress() {
		return $this->request('new_address');
	}

	public function requestBalance() {
		return $this->request('balance');
	}
}
