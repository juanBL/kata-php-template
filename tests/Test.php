<?php

declare(strict_types=1);

namespace Kata\Tests;

use PHPUnit\Framework\TestCase;

final class Test extends TestCase
{
    public function setup(): void
    {
        parent::setUp();
    }

    public function testFoo(): void
    {
        $this->assertTrue(true);
    }
}