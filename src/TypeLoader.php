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

use BrowserDetector\Loader\LoaderInterface;
use BrowserDetector\Loader\NotFoundException;

/**
 * Browser detection class
 *
 * @category  BrowserDetector
 *
 * @copyright 2012-2016 Thomas Mueller
 * @license   http://www.opensource.org/licenses/MIT MIT License
 */
class TypeLoader implements LoaderInterface
{
    private const OPTIONS = [
        Application::TYPE          => Application::class,
        Bot::TYPE                  => Bot::class,
        BotSyndicationReader::TYPE => BotSyndicationReader::class,
        BotTrancoder::TYPE         => BotTrancoder::class,
        Browser::TYPE              => Browser::class,
        EmailClient::TYPE          => EmailClient::class,
        FeedReader::TYPE           => FeedReader::class,
        MultimediaPlayer::TYPE     => MultimediaPlayer::class,
        OfflineBrowser::TYPE       => OfflineBrowser::class,
        Pim::TYPE                  => Pim::class,
        Tool::TYPE                 => Tool::class,
        Transcoder::TYPE           => Transcoder::class,
        Unknown::TYPE              => Unknown::class,
        UseragentAnonymizer::TYPE  => UseragentAnonymizer::class,
        Validator::TYPE            => Validator::class,
        WapBrowser::TYPE           => WapBrowser::class,
    ];

    /**
     * @param string $key
     *
     * @return bool
     */
    public function has(string $key): bool
    {
        return array_key_exists($key, self::OPTIONS);
    }

    /**
     * @param string $key
     *
     * @throws \BrowserDetector\Loader\NotFoundException
     *
     * @return \UaBrowserType\TypeInterface
     */
    public function load(string $key): TypeInterface
    {
        if (!$this->has($key)) {
            throw new NotFoundException('the browser type with key "' . $key . '" was not found');
        }

        $class = self::OPTIONS[$key];

        return new $class();
    }
}
