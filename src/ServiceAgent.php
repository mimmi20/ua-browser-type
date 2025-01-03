<?php

/**
 * This file is part of the ua-browser-type package.
 *
 * Copyright (c) 2015-2025, Thomas Mueller <mimmi20@live.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace UaBrowserType;

final class ServiceAgent implements TypeInterface
{
    use BrowserTypeTrait;

    public const string TYPE = 'service-agent';

    /**
     * the name of the browser
     */
    private const string NAME = 'Service Agent';

    /**
     * the Browser is a Bot
     */
    private const bool BOT = true;

    /**
     * the Browser is a Syndication Reader
     */
    private const bool READER = false;

    /**
     * the Browser uses a transcoding webservice
     */
    private const bool TRANSCODER = false;
}
