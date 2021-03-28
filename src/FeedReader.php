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

namespace UaBrowserType;

final class FeedReader implements TypeInterface
{
    use BrowserType;

    public const TYPE = 'feed-reader';

    /**
     * the name of the browser
     */
    private const NAME = 'Feed Reader';

    /**
     * the Browser is a Bot
     */
    private const BOT = false;

    /**
     * the Browser is a Syndication Reader
     */
    private const READER = true;

    /**
     * the Browser uses a transcoding webservice
     */
    private const TRANSCODER = false;
}
