<?php
/**
 * This file is part of the ua-browser-type package.
 *
 * Copyright (c) 2015-2024, Thomas Mueller <mimmi20@live.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace UaBrowserType;

use UaBrowserType\Exception\NotFoundException;

use function array_key_exists;

final class TypeLoader implements TypeLoaderInterface
{
    private const OPTIONS = [
        Application::TYPE => Application::class,
        Bot::TYPE => Bot::class,
        BotSyndicationReader::TYPE => BotSyndicationReader::class,
        BotTrancoder::TYPE => BotTrancoder::class,
        Browser::TYPE => Browser::class,
        Crawler::TYPE => Crawler::class,
        DownloadManager::TYPE => DownloadManager::class,
        EmailClient::TYPE => EmailClient::class,
        FeedReader::TYPE => FeedReader::class,
        Library::TYPE => Library::class,
        LinkChecker::TYPE => LinkChecker::class,
        MobileApplication::TYPE => MobileApplication::class,
        MultimediaPlayer::TYPE => MultimediaPlayer::class,
        OfflineBrowser::TYPE => OfflineBrowser::class,
        Pim::TYPE => Pim::class,
        SearchBot::TYPE => SearchBot::class,
        SearchEngine::TYPE => SearchEngine::class,
        SecurityChecker::TYPE => SecurityChecker::class,
        SecuritySearchBot::TYPE => SecuritySearchBot::class,
        SeoAnalytics::TYPE => SeoAnalytics::class,
        ServiceAgent::TYPE => ServiceAgent::class,
        SiteMonitor::TYPE => SiteMonitor::class,
        SocialMediaAgent::TYPE => SocialMediaAgent::class,
        Tool::TYPE => Tool::class,
        Transcoder::TYPE => Transcoder::class,
        Unknown::TYPE => Unknown::class,
        UseragentAnonymizer::TYPE => UseragentAnonymizer::class,
        Validator::TYPE => Validator::class,
        WapBrowser::TYPE => WapBrowser::class,
    ];

    /**
     * @throws void
     *
     * @api
     */
    public function has(string $key): bool
    {
        return array_key_exists($key, self::OPTIONS);
    }

    /** @throws NotFoundException */
    public function load(string $key): TypeInterface
    {
        if (!$this->has($key)) {
            throw new NotFoundException('the browser type with key "' . $key . '" was not found');
        }

        $class = self::OPTIONS[$key];

        return new $class();
    }
}
