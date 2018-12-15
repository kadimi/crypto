<?php

namespace Kadimi\Crypto;

use Kadimi\Crypto\Contracts\Wallet as WalletContract;
use Kadimi\Crypto\Contracts\WalletService as WalletServiceContract;

class Wallet implements WalletContract
{

  protected $credentials;
  protected $walletService;

  public function __construct(WalletServiceContract $walletService, array $credentials = [])
  {
    $this->walletService = $walletService;
    $this->credentials = $credentials;
  }

  public function createNewAddress() : string
  {
    return $this->walletService->requestNewAddress($this->credentials);
  }
}
