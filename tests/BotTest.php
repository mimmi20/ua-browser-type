<?php
/**
 * This file is part of the ua-browser-type package.
 *
 * Copyright (c) 2015-2021, Thomas Mueller <mimmi20@live.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace UaBrowserTypeTest;

use PHPUnit\Framework\ExpectationFailedException;
use PHPUnit\Framework\TestCase;
use SebastianBergmann\RecursionContext\InvalidArgumentException;
use UaBrowserType\Bot;

final class BotTest extends TestCase
{
    private const TYPE = 'bot';
    private const NAME = 'Bot/Crawler';

    /**
     * tests the constructor and the getter
     *
     * @throws ExpectationFailedException
     * @throws InvalidArgumentException
     */
    public function testSetterGetter(): void
    {
        $result = new Bot();

        self::assertSame(self::TYPE, $result->getType());
        self::assertSame(self::NAME, $result->getName());
        self::assertTrue($result->isBot());
        self::assertFalse($result->isSyndicationReader());
        self::assertFalse($result->isTranscoder());
    }
}
