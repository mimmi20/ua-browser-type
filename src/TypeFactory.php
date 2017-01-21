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

use BrowserDetector\Factory\FactoryInterface;
use BrowserDetector\Loader\LoaderInterface;
use Psr\Cache\CacheItemPoolInterface;

/**
 * @category  BrowserDetector
 *
 * @copyright 2012-2017 Thomas Mueller
 * @license   http://www.opensource.org/licenses/MIT MIT License
 */
class TypeFactory implements FactoryInterface
{
    const APPLICATION            = 'application';
    const BOT                    = 'bot';
    const BOT_SYNDICATION_READER = 'bot-syndication-reader';
    const BOT_TRANCODER          = 'bot-trancoder';
    const BROWSER                = 'browser';
    const EMAIL_CLIENT           = 'email-client';
    const FEED_READER            = 'feed-reader';
    const MULTIMEDIA_PLAYER      = 'multimedia-player';
    const OFFLINE_BROWSER        = 'offline-browser';
    const PIM                    = 'pim';
    const TOOL                   = 'tool';
    const TRANSCODER             = 'transcoder';
    const UNKNOWN                = 'unknown';
    const USERAGENT_ANONYMIZER   = 'useragent-anonymizer';
    const VALIDATOR              = 'validator';
    const WAP_BROWSER            = 'wap-browser';

    /**
     * @var \Psr\Cache\CacheItemPoolInterface|null
     */
    private $cache = null;

    /**
     * @var \BrowserDetector\Loader\LoaderInterface|null
     */
    private $loader = null;

    /**
     * @param \Psr\Cache\CacheItemPoolInterface       $cache
     * @param \BrowserDetector\Loader\LoaderInterface $loader
     */
    public function __construct(CacheItemPoolInterface $cache, LoaderInterface $loader)
    {
        $this->cache  = $cache;
        $this->loader = $loader;
    }

    /**
     * Gets the information about the browser type
     *
     * @param string $type
     *
     * @return \UaBrowserType\TypeInterface
     */
    public function detect($type)
    {
        return $this->loader->load($type);
    }

    /**
     * @param array $data
     *
     * @return \UaBrowserType\TypeInterface
     */
    public function fromArray(array $data)
    {
        $name       = array_key_exists('name', $data) ? $data['name'] : null;
        $bot        = array_key_exists('bot', $data) ? $data['bot'] : false;
        $reader     = array_key_exists('reader', $data) ? $data['reader'] : false;
        $transcoder = array_key_exists('transcoder', $data) ? $data['transcoder'] : false;

        return new Type($name, $bot, $reader, $transcoder);
    }

    /**
     * @param string $json
     *
     * @return \UaBrowserType\TypeInterface
     */
    public function fromJson($json)
    {
        return $this->fromArray((array) json_decode($json));
    }
}
