<?php

namespace IKadar\Repository\QueryBuilder;

use Exception;
use IKadar\HTTPClient\Request;

interface QueryBuilderInterface
{
    /**
     * @throws Exception
     */
    public function buildQuery($queryName, ...$args): Request\RequestInterface;

}
