<?php

namespace App\service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class ServiceFormula1
{
  private $client;
  public function __construct(HttpClientInterface $client)
  {
    $this->client = $client;
  }

  public function findRaces2023(): array
  {
    $response = $this->client->request(
      'GET',
      'https://ergast.com/api/f1/2023.json'
    );
    return $response->toArray();
  }
} 