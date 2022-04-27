<?php

namespace Hello;

use PHPUnit\Framework\TestCase;

/**
 * HelloWorldTest
 * @test
 * @covers \phpunit config
 */
class HelloWorldTest extends TestCase
{
    /** @test */
    public function test_phpunit_works()
    {
      // Expected
      $expected = 'Hello';
      
      // Actual
      $results = 'Hello';
      $actual = $results;

      // Asseert
      $this->assertSame($expected, $actual);
    }

}
