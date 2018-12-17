<?php

namespace Kadimi\Crypto\Tests;

use PHPUnit\Framework\TestCase;
use Kadimi\Crypto\WalletServices\GenericWalletService;

class GenerictWalletServiceTest extends TestCase
{
    public function testCreateNewAddressReturnsAString()
    {

    /**
     * Mock RequestHandler.
     */
        $fakeRequestHandler = $this->getMockBuilder('\Kadimi\Crypto\Contracts\RequestHandler')->getMock();

        /**
         * Get.
         */
        $walletService = new GenericWalletService($fakeRequestHandler);

        /*
         * Test.
         */

        $this->assertInstanceOf('Kadimi\Crypto\WalletServices\GenericWalletService', $walletService);
    }
}
