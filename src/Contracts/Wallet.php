<?php

namespace Kadimi\Crypto\Contracts;

use Kadimi\Crypto\Contracts\WalletService;

interface Wallet
{
  public function __construct(WalletService $waletService);
  public function createNewAddress() : string;
  public function getBalance() : float;
}
