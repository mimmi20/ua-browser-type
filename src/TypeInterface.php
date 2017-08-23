<?php
/**
 * This file is part of the ua-browser-type package.
 *
 * Copyright (c) 2015-2017, Thomas Mueller <mimmi20@live.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);
namespace UaBrowserType;

/**
 * @category  BrowserDetector
 *
 * @copyright 2012-2017 Thomas Mueller
 * @license   http://www.opensource.org/licenses/MIT MIT License
 */
interface TypeInterface
{
    /**
     * Returns the type name of the browser
     *
     * @return string
     */
    public function getType(): string;

    /**
     * Returns the name of the browser
     *
     * @return string|null
     */
    public function getName(): ?string;

    /**
     * Returns True, if the Browser is a Bot
     *
     * @return bool
     */
    public function isBot(): bool;

    /**
     * Returns True, if the Browser is a Syndication Reader
     *
     * @return bool
     */
    public function isSyndicationReader(): bool;

    /**
     * Returns True, if the Browser uses a transcoding webservice
     *
     * @return bool
     */
    public function isTranscoder(): bool;
}
