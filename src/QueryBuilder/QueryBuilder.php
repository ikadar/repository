<?php

namespace IKadar\Repository\QueryBuilder;

use Exception;
use IKadar\HTTPClient\Request;

abstract class QueryBuilder implements QueryBuilderInterface
{
    /**
     * @throws Exception
     */
    abstract public function buildQuery($queryName, ...$args): Request\RequestInterface;

}
