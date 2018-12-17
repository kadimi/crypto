<?php

namespace Kadimi\Crypto;

use Kadimi\Crypto\Wallets\GenericWallet;
use Kadimi\Crypto\WalletServices\GenericWalletService;
use Kadimi\Crypto\RequestHandlers\BlockIORequestHandler;

include 'vendor/autoload.php';

/**
 * Get credentials.
 */
$credentials = [
  'api_key' => 'fa31-d3b2-8802-7867',
];

/**
 * Load wallet.
 */
$handler = new BlockIORequestHandler();
$handler->setCredentials($credentials);
$walletService = new GenericWalletService($handler);
$Wallet = new GenericWallet($walletService);

/*
 * Get balance.
 */
echo $Wallet->getBalance();
