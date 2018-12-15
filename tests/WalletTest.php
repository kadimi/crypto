<?php 

namespace Kadimi\Crypto\Tests;

use Kadimi\Crypto\Wallet;
use PHPUnit\Framework\TestCase;

class WalletTest extends TestCase
{
  public function testCreateNewAddressReturnsAString() {

    /**
     * Mock RequestHandler
     */
    $fakeRequestHandler = $this->getMockBuilder('\Kadimi\Crypto\Contracts\RequestHandler')->getMock();

    /**
     * Mock WalletService
     */
    $fakeWalletService = $this->getMockBuilder('\Kadimi\Crypto\Contracts\WalletService')->getMock();
    $fakeWalletService->requestHandler = $fakeRequestHandler;
    $fakeWalletService
      ->expects($this->once())
      ->method('requestNewAddress')
      ->will($this->returnValue('Wallet Address'))
    ;

    /**
     * Create address.
     */
    $wallet = new Wallet($fakeWalletService);
    $address = $wallet->createNewAddress();

    /**
     * Assert.
     */
    $this->assertEquals($address, 'Wallet Address');
  }
}
