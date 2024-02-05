<?php

namespace IKadar\Repository\DataAccess;

use IKadar\Repository\Query\QueryInterface;

abstract class Client implements ClientInterface
{
    abstract public function sendQuery(
        QueryInterface $query
    ): ?array;
}
