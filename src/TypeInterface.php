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

interface TypeInterface
{
    /**
     * Returns the type name of the browser
     *
     * @throws void
     */
    public function getType(): string;

    /**
     * Returns the name of the browser
     *
     * @throws void
     */
    public function getName(): string | null;

    /**
     * Returns True, if the Browser is a Bot
     *
     * @throws void
     */
    public function isBot(): bool;

    /**
     * Returns True, if the Browser is a Syndication Reader
     *
     * @throws void
     */
    public function isSyndicationReader(): bool;

    /**
     * Returns True, if the Browser uses a transcoding webservice
     *
     * @throws void
     */
    public function isTranscoder(): bool;
}
