<?php

namespace IKadar\Repository\QueryBuilder\Tests;

use PHPUnit\Framework\TestCase;
use IKadar\HTTPClient\Request\RequestFactory;
use IKadar\HTTPClient\Request\RequestInterface;
use IKadar\Repository\QueryBuilder\APIQueryBuilder;

class APIQueryBuilderTest extends TestCase
{
    private $requestFactoryMock;
    private $apiQueryBuilder;

    protected function setUp(): void
    {
        // Create a mock of the RequestFactory
        $this->requestFactoryMock = $this->createMock(RequestFactory::class);

        // Instantiate APIQueryBuilder with the mocked RequestFactory
        $this->apiQueryBuilder = $this->getMockForAbstractClass(
            APIQueryBuilder::class,
            [$this->requestFactoryMock]
        );
    }

    public function testBuildQuery()
    {
        $queryName = 'testQuery';
        $args = ['param1' => 'value1'];

        // Mock the RequestInterface that should be returned by the RequestFactory
        $requestMock = $this->createMock(RequestInterface::class);

        // Configure the mock RequestFactory to return the mock RequestInterface
        $this->requestFactoryMock->expects($this->once())
            ->method('createRequest')
            ->with($this->equalTo($queryName), $this->equalTo($args))
            ->willReturn($requestMock);

        // Call buildQuery and assert it returns the mocked RequestInterface
        $result = $this->apiQueryBuilder->buildQuery($queryName, $args);
        $this->assertSame($requestMock, $result);
    }
}
