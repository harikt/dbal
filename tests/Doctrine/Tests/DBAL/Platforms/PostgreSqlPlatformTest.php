<?php

namespace Doctrine\Tests\DBAL\Platforms;

use Doctrine\DBAL\Platforms\PostgreSqlPlatform;

class PostgreSqlPlatformTest extends AbstractPostgreSqlPlatformTestCase
{
    public function createPlatform()
    {
        return new PostgreSqlPlatform;
    }

    public function testSupportsPartialIndexes()
    {
        self::assertTrue($this->_platform->supportsPartialIndexes());
    }
}
