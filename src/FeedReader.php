<?php

/**
 * This file is part of the ua-browser-type package.
 *
 * Copyright (c) 2015-2024, Thomas Mueller <mimmi20@live.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace UaBrowserType;

final class FeedReader implements TypeInterface
{
    use BrowserTypeTrait;

    public const string TYPE = 'feed-reader';

    /**
     * the name of the browser
     */
    private const string NAME = 'Feed Reader';

    /**
     * the Browser is a Bot
     */
    private const bool BOT = false;

    /**
     * the Browser is a Syndication Reader
     */
    private const bool READER = true;

    /**
     * the Browser uses a transcoding webservice
     */
    private const bool TRANSCODER = false;
}
