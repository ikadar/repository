<?php

namespace IKadar\Repository\Query;

use IKadar\HTTPClient\Request\Request;
use IKadar\HTTPClient\Request\RequestInterface;
use IKadar\HTTPClient\Request\Route;

class HTTPAPIQuery implements QueryInterface, RequestInterface
{
    public function __construct(
        protected RequestInterface $request
    )
    {
    }

    /**
     * @return Request
     */
    public function getRequest(): RequestInterface
    {
        return $this->request;
    }

    public function getEndPointRoute(): Route
    {
        return $this->getRequest()->getEndPointRoute();
    }

    public function getParameters(): array
    {
        return $this->getRequest()->getParameters();
    }

    public function getOptions(): array
    {
        return $this->getRequest()->getOptions();
    }

    public function getEndPointUrl(): string
    {
        return $this->getRequest()->getEndPointUrl();
    }

    public function fetch(): array
    {
        return $this->getRequest()->fetch();
    }
}
