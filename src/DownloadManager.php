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

final class DownloadManager implements TypeInterface
{
    use BrowserTypeTrait;

    public const TYPE = 'download-managers';

    /**
     * the name of the browser
     */
    private const NAME = 'Download Manager';

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
