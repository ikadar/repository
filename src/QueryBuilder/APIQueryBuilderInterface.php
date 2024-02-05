<?php

namespace IKadar\Repository\QueryBuilder;

use Exception;
use IKadar\HTTPClient\Request;

interface APIQueryBuilderInterface extends QueryBuilderInterface
{
    /**
     * @throws Exception
     */
    public function buildQuery($queryName, ...$args): Request\RequestInterface;

}
