<?php

namespace PHPSemVerChecker\Test;

use Mockery as m;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

class TestCase extends PHPUnitTestCase
{
	public function tearDown()
	{
		m::close();

		parent::tearDown();
	}
}
