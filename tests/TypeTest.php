<?php
/**
 * This file is part of the ua-browser-type package.
 *
 * Copyright (c) 2015-2017, Thomas Mueller <mimmi20@live.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);
namespace UaBrowserTypeTest;

use UaBrowserType\Type;

class TypeTest extends \PHPUnit\Framework\TestCase
{
    /**
     * tests the constructor and the getter
     */
    public function testSetterGetter()
    {
        $type       = 'testType';
        $name       = 'test1';
        $bot        = true;
        $reader     = false;
        $transcoder = false;

        $result = new Type($type, $name, $bot, $reader, $transcoder);

        self::assertSame($type, $result->getType());
        self::assertSame($name, $result->getName());
        self::assertTrue($result->isBot());
        self::assertFalse($result->isSyndicationReader());
        self::assertFalse($result->isTranscoder());
    }
}
