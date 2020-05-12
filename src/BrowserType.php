<?php
/**
 * This file is part of the ua-browser-type package.
 *
 * Copyright (c) 2015-2020, Thomas Mueller <mimmi20@live.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);
namespace UaBrowserType;

trait BrowserType
{
    /**
     * Returns the type name of the browser
     *
     * @return string
     */
    public function getType(): string
    {
        return self::TYPE;
    }

    /**
     * Returns the name of the type
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return self::NAME;
    }

    /**
     * Returns True, if the Browser is a Bot
     *
     * @return bool
     */
    public function isBot(): bool
    {
        return self::BOT;
    }

    /**
     * Returns True, if the Browser is a Syndication Reader
     *
     * @return bool
     */
    public function isSyndicationReader(): bool
    {
        return self::READER;
    }

    /**
     * Returns True, if the Browser uses a transcoding webservice
     *
     * @return bool
     */
    public function isTranscoder(): bool
    {
        return self::TRANSCODER;
    }
}
