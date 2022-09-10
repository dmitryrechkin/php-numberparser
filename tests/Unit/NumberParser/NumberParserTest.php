<?php

declare(strict_types=1);

namespace DmitryRechkin\Tests\Unit\NumberParser;

use DmitryRechkin\NumberParser\NumberParser;
use PHPUnit\Framework\TestCase;

class NumberParserTest extends TestCase
{
	/**
	 * @return void
	 */
	public function testParseFloatReturnsExpectedValueWhenStringContainsNonNumericCharacters(): void
	{
		$this->assertSame(0.1, (new NumberParser())->parseFloat('aaa0.1   '));
	}

	/**
	 * @return void
	 */
	public function testParseFloatReturnsExpectedValueFromFloatValue(): void
	{
		$this->assertSame(0.1, (new NumberParser())->parseFloat(0.1));
	}

	/**
	 * @return void
	 */
	public function testParseFloatReturnsExpectedValueFromIntValueInString(): void
	{
		$this->assertSame(999.0, (new NumberParser())->parseFloat('999'));
	}

	/**
	 * @return void
	 */
	public function testParseIntReturnsExpectedValueFromIntValueInString(): void
	{
		$this->assertSame(100, (new NumberParser())->parseInt('100'));
	}

	/**
	 * @return void
	 */
	public function testParseIntReturnsExpectedValueFromIntValue(): void
	{
		$this->assertSame(100, (new NumberParser())->parseInt(100));
	}
}
