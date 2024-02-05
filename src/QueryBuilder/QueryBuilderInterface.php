<?php

namespace IKadar\Repository\QueryBuilder;

use Exception;
use IKadar\Repository\Query\QueryInterface;

interface QueryBuilderInterface
{
    /**
     * @throws Exception
     */
    public function buildQuery($queryName, ...$args): QueryInterface;

}
