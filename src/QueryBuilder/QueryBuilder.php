<?php

namespace IKadar\Repository\QueryBuilder;

use Exception;
use IKadar\Repository\Query\QueryInterface;

abstract class QueryBuilder implements QueryBuilderInterface
{
    /**
     * @throws Exception
     */
    abstract public function buildQuery($queryName, ...$args): QueryInterface;

}
