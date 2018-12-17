<?php

namespace Kadimi\Crypto\Contracts;

interface Wallet
{
    public function __construct(WalletService $waletService);

    public function createNewAddress() : string;

    public function getBalance() : float;
}
