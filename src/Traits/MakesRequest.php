<?php

namespace Kadimi\Crypto\Traits;

use GuzzleHttp\Client;

trait MakesRequest
{

  public function buildQuery($parameters, $private = false) {

    /**
     * Add Credentials.
     */
    if ($private) {
      $parameters = $this->credentials + $parameters;
    }

    /**
     * Build Query.
     */
    $query = ['query' => http_build_query($parameters)];

    /**
     * Return.
     */
    return $query;
  }

  public function getRealPath($path) {

    return $this->paths[$path] ?? $path;
  }

  public function makeRequest($path, array $parameters = [], array $args = [], $private = false) {

    $response = (new Client(['base_uri' => $this->URI]))->request(
      $args['method'] ?? 'GET',
      $this->getRealPath($path),
      $this->buildQuery($parameters, $private)
    );
    return $this->filterResponse([
      'request' => compact('path', 'parameters', 'args'),
      'response' => [
        'status' => json_decode( $response->getBody())->status,
        'data' => json_decode( $response->getBody())->data,
      ],
    ]);
  }

  public function makePrivateRequest($path, array $parameters = [], array $args = []) {

    return $this->makeRequest($path, $parameters, $args, true);
  }

  public function filterResponse(array $response) {

    return $response;
  }
}
