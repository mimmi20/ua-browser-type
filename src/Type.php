<?php
/**
 * This file is part of the ua-browser-type package.
 *
 * Copyright (c) 2015-2018, Thomas Mueller <mimmi20@live.de>
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
class Type implements TypeInterface
{
    /**
     * the type name of the browser
     *
     * @var string
     */
    private $type;

    /**
     * the name of the browser
     *
     * @var string|null
     */
    private $name;

    /**
     * the Browser is a Bot
     *
     * @var bool
     */
    private $bot = false;

    /**
     * the Browser is a Syndication Reader
     *
     * @var bool
     */
    private $reader = false;

    /**
     * the Browser uses a transcoding webservice
     *
     * @var bool
     */
    private $transcoder = false;

    /**
     * @param string      $type
     * @param string|null $name
     * @param bool        $bot
     * @param bool        $reader
     * @param bool        $transcoder
     */
    public function __construct(
        string $type,
        ?string $name = null,
        bool $bot = false,
        bool $reader = false,
        bool $transcoder = false
    ) {
        $this->type       = $type;
        $this->name       = $name;
        $this->bot        = $bot;
        $this->reader     = $reader;
        $this->transcoder = $transcoder;
    }

    /**
     * Returns the type name of the browser
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Returns the name of the type
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Returns True, if the Browser is a Bot
     *
     * @return bool
     */
    public function isBot(): bool
    {
        return $this->bot;
    }

    /**
     * Returns True, if the Browser is a Syndication Reader
     *
     * @return bool
     */
    public function isSyndicationReader(): bool
    {
        return $this->reader;
    }

    /**
     * Returns True, if the Browser uses a transcoding webservice
     *
     * @return bool
     */
    public function isTranscoder(): bool
    {
        return $this->transcoder;
    }
}
