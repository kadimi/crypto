<?php

namespace Kadimi\Crypto\Contracts;

interface RequestHandler{

	public function __construct(string $uri = '', array $credentials = []);

	public function request(array $parameters = []);
}
