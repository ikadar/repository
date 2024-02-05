<?php

namespace IKadar\Repository\Repository;

use IKadar\Repository\DataAccess\ClientInterface as DataAccessClientInterface;
use IKadar\Repository\QueryBuilder\QueryBuilderInterface;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Exception;

class Repository implements RepositoryInterface
{
    public function __construct(
        private readonly DataAccessClientInterface $client,
        private readonly QueryBuilderInterface     $queryBuilder,
    )
    {
    }

    /**
     * @return DataAccessClientInterface
     */
    public function getDataAccessClient(): DataAccessClientInterface
    {
        return $this->client;
    }

    /**
     * @throws ServerExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws ClientExceptionInterface
     * @throws Exception
     */
    protected function executeQuery($queryName, ...$args): ?array
    {
        $query = $this->queryBuilder->buildQuery($queryName, ...$args);
        return $this->getDataAccessClient()->sendQuery($query);
    }


}
