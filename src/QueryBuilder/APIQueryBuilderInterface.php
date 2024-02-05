<?php

namespace IKadar\Repository\QueryBuilder;

use Exception;
use IKadar\Repository\Query\QueryInterface;

interface APIQueryBuilderInterface extends QueryBuilderInterface
{
    /**
     * @throws Exception
     */
    public function buildQuery($queryName, ...$args): QueryInterface;

}
