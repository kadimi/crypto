<?php

namespace Kadimi\Crypto\Contracts;

use Kadimi\Crypto\Contracts\WalletService;

interface Wallet
{

  public function __construct(WalletService $waletService, array $credentials = []);

  public function createNewAddress() : string;
}
