<?php

namespace IKadar\Repository\QueryBuilder;

use Exception;
use IKadar\HTTPClient\Request\RequestFactory;
use IKadar\Repository\Query\HTTPAPIQuery;
use IKadar\Repository\Query\QueryInterface;

abstract class APIQueryBuilder implements QueryBuilderInterface
{
    public function __construct(
        private readonly RequestFactory $requestFactory,
    )
    {
    }

    /**
     * @throws Exception
     */
    public function buildQuery($queryName, ...$args): QueryInterface
    {
        return new HTTPAPIQuery($this->requestFactory->createRequest($queryName, ...$args));
    }

}
