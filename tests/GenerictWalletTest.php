<?php 

namespace Kadimi\Crypto\Tests;

use Kadimi\Crypto\Wallets\GenericWallet;
use PHPUnit\Framework\TestCase;

class GenericWalletTest extends TestCase
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
      ->method('requestBalance')
      ->will($this->returnValue(0.99))
    ;
    $fakeWalletService
      ->method('requestNewAddress')
      ->will($this->returnValue('SomeAddress'))
    ;

    /**
     * Get.
     */
    $wallet = new GenericWallet($fakeWalletService);
    $balance = $wallet->getBalance();
    $address = $wallet->createNewAddress();

    /**
     * Test.
     */
    $this->assertEquals($balance, 0.99);
    $this->assertEquals($address, 'SomeAddress');
  }
}
