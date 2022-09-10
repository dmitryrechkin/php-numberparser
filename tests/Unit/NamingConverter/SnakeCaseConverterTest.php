<?php

declare(strict_types=1);

namespace DmitryRechkin\Tests\Unit\NamingConverter;

use DmitryRechkin\NamingConverter\SnakeCaseConverter;
use PHPUnit\Framework\TestCase;

class SnakeCaseConverterTest extends TestCase
{
	/**
	 * @return void
	 */
	public function testConvertReturnsOriginalValueInSnakeCaseFormat(): void
	{
		$input = 'testTest1234Test_Test';
		$expectedValue = 'test_test_1234_test_test';

		$this->assertSame($expectedValue, (new SnakeCaseConverter())->convert($input));
	}
}
