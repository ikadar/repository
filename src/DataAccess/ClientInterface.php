<?php

namespace IKadar\Repository\DataAccess;

use IKadar\Repository\Query\QueryInterface;

interface ClientInterface
{
    public function sendQuery(
        QueryInterface $query
    ): ?array;
}
