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
namespace UaBrowserType;

final class EmailClient implements TypeInterface
{
    use BrowserType;

    public const TYPE = 'email-client';

    /**
     * the name of the browser
     *
     * @var string|null
     */
    private const NAME = 'Email Client';

    /**
     * the Browser is a Bot
     *
     * @var bool
     */
    private const BOT = false;

    /**
     * the Browser is a Syndication Reader
     *
     * @var bool
     */
    private const READER = false;

    /**
     * the Browser uses a transcoding webservice
     *
     * @var bool
     */
    private const TRANSCODER = false;
}
