<?php
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework;

class WithTestSuite extends DataProvidedTestSuite
{
    protected function yieldData(): iterable
    {
        return \PHPUnit\Util\Test::getDataFromTestWithAnnotation(
            $this->theClass->getMethod($this->method)->getDocComment()
        )[0]??[];
    }
}
