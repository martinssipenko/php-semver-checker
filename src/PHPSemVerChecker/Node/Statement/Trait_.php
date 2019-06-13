<?php

namespace PHPSemVerChecker\Node\Statement;

use PhpParser\Node\Stmt\Trait_ as BaseTrait;

class Trait_
{
	/**
	 * @param \PhpParser\Node\Stmt\Trait_ $trait
	 * @return null|string
	 */
	public static function getFullyQualifiedName(BaseTrait $trait)
	{
		if (isset($trait->namespacedName)) {
			return $trait->namespacedName->toString();
		}
		return $trait->name->toString();
	}
}
