<?php

namespace Kadimi\Crypto\Wallets;

use Kadimi\Crypto\Contracts\Wallet as WalletContract;
use Kadimi\Crypto\Contracts\WalletService as WalletServiceContract;

class GenericWallet implements WalletContract
{
    public $walletService;

    public function __construct(WalletServiceContract $walletService)
    {
        $this->walletService = $walletService;
    }

    public function createNewAddress() : string
    {
        return $this->walletService->requestNewAddress();
    }

    public function getBalance() : float
    {
        return $this->walletService->requestBalance();
    }
}
