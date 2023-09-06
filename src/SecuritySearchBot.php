<?php
/**
 * This file is part of the ua-browser-type package.
 *
 * Copyright (c) 2015-2023, Thomas Mueller <mimmi20@live.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace UaBrowserType;

final class SecuritySearchBot implements TypeInterface
{
    use BrowserType;

    public const TYPE = 'security-search-bot';

    /**
     * the name of the browser
     */
    private const NAME = 'Security Search Bot';

    /**
     * the Browser is a Bot
     */
    private const BOT = true;

    /**
     * the Browser is a Syndication Reader
     */
    private const READER = false;

    /**
     * the Browser uses a transcoding webservice
     */
    private const TRANSCODER = false;
}