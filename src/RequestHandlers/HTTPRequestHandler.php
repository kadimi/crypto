<?php

namespace Kadimi\Crypto\RequestHandlers;

use Kadimi\Crypto\Traits\MakesRequest;
use Kadimi\Crypto\Contracts\RequestHandler as RequestHandlerContract;

class HTTPRequestHandler implements RequestHandlerContract
{
    use MakesRequest;

    protected $credentials;

    public function setCredentials(array $credentials = [])
    {
        $this->credentials = $credentials;
    }
}
