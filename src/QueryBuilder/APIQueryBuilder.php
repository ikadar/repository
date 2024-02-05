<?php

namespace IKadar\Repository\QueryBuilder;

use Exception;
use IKadar\HTTPClient\Request\RequestInterface;
use IKadar\HTTPClient\Request\RequestFactory;

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
    public function buildQuery($queryName, ...$args): RequestInterface
    {
        return $this->requestFactory->createRequest($queryName, ...$args);
    }

}
