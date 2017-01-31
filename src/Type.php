<?php
/**
 * Copyright (c) 2012-2017, Thomas Mueller <t_mueller_stolzenhain@yahoo.de>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a
 * copy of this software and associated documentation files (the "Software"),
 * to deal in the Software without restriction, including without limitation
 * the rights to use, copy, modify, merge, publish, distribute, sublicense,
 * and/or sell copies of the Software, and to permit persons to whom the
 * Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included
 * in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS
 * OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @category  BrowserDetector
 *
 * @author    Thomas Mueller <t_mueller_stolzenhain@yahoo.de>
 * @copyright 2012-2017 Thomas Mueller
 * @license   http://www.opensource.org/licenses/MIT MIT License
 *
 * @link      https://github.com/mimmi20/BrowserDetector
 */

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
     * @var string|null
     */
    private $type = null;

    /**
     * the name of the browser
     *
     * @var string
     */
    private $name = null;

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
    private $transcoder = null;

    /**
     * @param string $type
     * @param string $name
     * @param bool   $bot
     * @param bool   $reader
     * @param bool   $transcoder
     */
    public function __construct($type, $name, $bot = false, $reader = false, $transcoder = false)
    {
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
    public function getType()
    {
        return $this->type;
    }

    /**
     * Returns the name of the type
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns True, if the Browser is a Bot
     *
     * @return bool
     */
    public function isBot()
    {
        return $this->bot;
    }

    /**
     * Returns True, if the Browser is a Syndication Reader
     *
     * @return bool
     */
    public function isSyndicationReader()
    {
        return $this->reader;
    }

    /**
     * Returns True, if the Browser uses a transcoding webservice
     *
     * @return bool
     */
    public function isTranscoder()
    {
        return $this->transcoder;
    }
}
