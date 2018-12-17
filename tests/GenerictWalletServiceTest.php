<?php 

namespace Kadimi\Crypto\Tests;

use Kadimi\Crypto\WalletServices\GenericWalletService;
use PHPUnit\Framework\TestCase;

class GenericWalletServiceTest extends TestCase
{
  public function testCreateNewAddressReturnsAString() {

    /**
     * Mock RequestHandler
     */
    $fakeRequestHandler = $this->getMockBuilder('\Kadimi\Crypto\Contracts\RequestHandler')->getMock();

    /**
     * Get.
     */
    $walletService = new GenericWalletService($fakeRequestHandler);

    /**
     * Test.
     */
    
    $this->assertInstanceOf('Kadimi\Crypto\WalletServices\GenericWalletService', $walletService);
  }
}
