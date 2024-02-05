<?php

namespace IKadar\Repository\DataAccess;

use IKadar\HTTPClient\Client\Client;
use IKadar\HTTPClient\Request\RequestInterface;
use IKadar\Repository\Query\QueryInterface;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;

class HTTPAPIClient implements ClientInterface
{
    public function __construct(
        private readonly Client $httpClient
    )
    {
    }

    /**
     * @return Client
     */
    public function getHttpClient(): Client
    {
        return $this->httpClient;
    }

    /**
     * @throws TransportExceptionInterface
     * @throws ServerExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws ClientExceptionInterface
     */
    public function sendQuery(
        QueryInterface|RequestInterface $query
    ): ?array
    {
        return $this->getHttpClient()->sendRequest($query);
    }

}
