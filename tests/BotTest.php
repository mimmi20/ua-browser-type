<?php
/**
 * This file is part of the ua-browser-type package.
 *
 * Copyright (c) 2015-2019, Thomas Mueller <mimmi20@live.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);
namespace UaBrowserTypeTest;

use PHPUnit\Framework\TestCase;
use UaBrowserType\Bot;

final class BotTest extends TestCase
{
    /**
     * tests the constructor and the getter
     *
     * @throws \PHPUnit\Framework\ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @return void
     */
    public function testSetterGetter(): void
    {
        $type = 'bot';
        $name = 'Bot/Crawler';

        $result = new Bot();

        self::assertSame($type, $result->getType());
        self::assertSame($name, $result->getName());
        self::assertTrue($result->isBot());
        self::assertFalse($result->isSyndicationReader());
        self::assertFalse($result->isTranscoder());
    }
}
