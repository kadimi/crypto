<?php

namespace Kadimi\Crypto\Contracts;

interface RequestHandler{
  public function setCredentials(array $credentials);
  public function makeRequest($path, array $parameters = [], array $args = [], $private);
  public function makePrivateRequest($path, array $parameters = [], array $args = []);
}
