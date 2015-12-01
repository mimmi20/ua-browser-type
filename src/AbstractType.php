<?php
/**
 * Copyright (c) 2012-2015, Thomas Mueller <t_mueller_stolzenhain@yahoo.de>
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
 * @package   BrowserDetector
 * @author    Thomas Mueller <t_mueller_stolzenhain@yahoo.de>
 * @copyright 2012-2015 Thomas Mueller
 * @license   http://www.opensource.org/licenses/MIT MIT License
 * @link      https://github.com/mimmi20/BrowserDetector
 */

namespace UaBrowserType;

/**
 * @category  BrowserDetector
 * @package   BrowserDetector
 * @copyright 2012-2015 Thomas Mueller
 * @license   http://www.opensource.org/licenses/MIT MIT License
 */
abstract class AbstractType implements TypeInterface
{
    /**
     * the name of the browser
     *
     * @var string
     */
    protected $name = null;

    /**
     * the Browser is a Bot
     *
     * @var boolean
     */
    protected $bot = false;

    /**
     * the Browser is a Syndication Reader
     *
     * @var boolean
     */
    protected $reader = false;

    /**
     * the Browser uses a transcoding webservice
     *
     * @var boolean
     */
    protected $transcoder = null;

    /**
     * the Browser should be banned
     *
     * @return boolean
     */
    protected $banned = null;

    /**
     * Returns the name of the type
     *
     * @return string
     */
    public function __toString()
    {
        return (string)$this->getName();
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
     * @return boolean
     */
    public function isBot()
    {
        return $this->bot;
    }

    /**
     * Returns True, if the Browser is a Syndication Reader
     *
     * @return boolean
     */
    public function isSyndicationReader()
    {
        return $this->reader;
    }

    /**
     * Returns True, if the Browser uses a transcoding webservice
     *
     * @return boolean
     */
    public function isTranscoder()
    {
        return $this->transcoder;
    }

    /**
     * Returns True, if the Browser should be banned
     *
     * @return boolean
     */
    public function isBanned()
    {
        return $this->banned;
    }
}
