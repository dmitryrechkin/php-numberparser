<?php

declare(strict_types=1);

namespace DmitryRechkin\Tests\Unit\NamingConverter;

use DmitryRechkin\NamingConverter\CamelCaseConverter;
use PHPUnit\Framework\TestCase;

class CamelCaseConverterTest extends TestCase
{
	/**
	 * @return void
	 */
	public function testConvertReturnsOriginalValueInCamelCaseFormat(): void
	{
		$input = 'test_test_1';
		$expectedValue = 'testTest1';

		$this->assertSame($expectedValue, (new CamelCaseConverter())->convert($input));
	}
}
