<?php

namespace Kadimi\Crypto\RequestHandlers;

use Kadimi\Crypto\Contracts\RequestHandler as RequestHandlerContract;
use Kadimi\Crypto\Traits\MakesRequest;

class HTTPRequestHandler implements RequestHandlerContract
{

  use MakesRequest;

  protected $credentials;

  public function setCredentials(array $credentials = [])
  {
    $this->credentials = $credentials;
  }
}