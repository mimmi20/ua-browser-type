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

use Override;

trait BrowserTypeTrait
{
    /**
     * Returns the type name of the browser
     *
     * @throws void
     */
    #[Override]
    public function getType(): string
    {
        return self::TYPE;
    }

    /**
     * Returns the name of the type
     *
     * @throws void
     */
    #[Override]
    public function getName(): string | null
    {
        return self::NAME;
    }

    /**
     * Returns True, if the Browser is a Bot
     *
     * @throws void
     */
    #[Override]
    public function isBot(): bool
    {
        return self::BOT;
    }

    /**
     * Returns True, if the Browser is a Syndication Reader
     *
     * @throws void
     */
    #[Override]
    public function isSyndicationReader(): bool
    {
        return self::READER;
    }

    /**
     * Returns True, if the Browser uses a transcoding webservice
     *
     * @throws void
     */
    #[Override]
    public function isTranscoder(): bool
    {
        return self::TRANSCODER;
    }
}
