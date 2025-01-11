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

enum Type: string implements TypeInterface
{
    case Application = 'application';

    case Bot = 'bot';

    case BotSyndicationReader = 'bot-syndication-reader';

    case BotTrancoder = 'bot-trancoder';

    case Browser = 'browser';

    case Crawler = 'crawler';

    case DownloadManager = 'download-managers';

    case EmailClient = 'email-client';

    case FeedReader = 'feed-reader';

    case Library = 'library';

    case LinkChecker = 'link-checker';

    case MobileApplication = 'mobile-application';

    case MultimediaPlayer = 'multimedia-player';

    case OfflineBrowser = 'offline-browser';

    case Pim = 'pim';

    case SearchBot = 'search-bot';

    case SearchEngine = 'search-engine';

    case SecurityChecker = 'security-checker';

    case SecuritySearchBot = 'security-search-bot';

    case SeoAnalytics = 'seo-analytics';

    case ServiceAgent = 'service-agent';

    case SiteMonitor = 'site-monitor';

    case SocialMediaAgent = 'social-media-agent';

    case Tool = 'tool';

    case Transcoder = 'transcoder';

    case UseragentAnonymizer = 'useragent-anonymizer';

    case Validator = 'validator';

    case WapBrowser = 'wap-browser';

    case Unknown = 'unknown';

    /**
     * @throws void
     *
     * @api
     */
    public static function fromName(string | null $name): self
    {
        return match ($name) {
            'Application', 'application' => self::Application,
            'Bot', 'bot' => self::Bot,
            'BotSyndicationReader', 'bot-syndication-reader' => self::BotSyndicationReader,
            'BotTrancoder', 'bot-trancoder' => self::BotTrancoder,
            'Browser', 'browser' => self::Browser,
            'Crawler', 'crawler' => self::Crawler,
            'DownloadManager', 'download-managers', 'Download Manager' => self::DownloadManager,
            'EmailClient', 'email-client', 'Email Client' => self::EmailClient,
            'FeedReader', 'feed-reader', 'Feed Reader' => self::FeedReader,
            'Library', 'library' => self::Library,
            'LinkChecker', 'link-checker', 'Link Checker' => self::LinkChecker,
            'MobileApplication', 'mobile-application', 'Mobile Application' => self::MobileApplication,
            'MultimediaPlayer', 'multimedia-player', 'Multimedia Player' => self::MultimediaPlayer,
            'OfflineBrowser', 'offline-browser', 'Offline Browser' => self::OfflineBrowser,
            'Pim', 'pim', 'Personal Information Manager' => self::Pim,
            'SearchBot', 'search-bot', 'Search Bot' => self::SearchBot,
            'SearchEngine', 'search-engine', 'Search Engine' => self::SearchEngine,
            'SecurityChecker', 'security-checker', 'Security Checker' => self::SecurityChecker,
            'SecuritySearchBot', 'security-search-bot', 'Security Search Bot' => self::SecuritySearchBot,
            'SeoAnalytics', 'seo-analytics', 'SEO & Analytics' => self::SeoAnalytics,
            'ServiceAgent', 'service-agent', 'Service Agent' => self::ServiceAgent,
            'SiteMonitor', 'site-monitor', 'Site Monitor' => self::SiteMonitor,
            'SocialMediaAgent', 'social-media-agent', 'Social Media Agent' => self::SocialMediaAgent,
            'Tool', 'tool' => self::Tool,
            'Transcoder', 'transcoder' => self::Transcoder,
            'UseragentAnonymizer', 'useragent-anonymizer', 'Useragent Anonymizer' => self::UseragentAnonymizer,
            'Validator', 'validator' => self::Validator,
            'WapBrowser', 'wap-browser', 'Wap Browser' => self::WapBrowser,
            default => self::Unknown,
        };
    }

    /**
     * Returns the type name of the browser
     *
     * @throws void
     */
    #[Override]
    public function getType(): string
    {
        return $this->value;
    }

    /**
     * Returns the name of the type
     *
     * @throws void
     */
    #[Override]
    public function getName(): string
    {
        return match ($this) {
            self::DownloadManager => 'Download Manager',
            self::EmailClient => 'Email Client',
            self::FeedReader => 'Feed Reader',
            self::LinkChecker => 'Link Checker',
            self::MobileApplication => 'Mobile Application',
            self::MultimediaPlayer => 'Multimedia Player',
            self::OfflineBrowser => 'Offline Browser',
            self::Pim => 'Personal Information Manager',
            self::SearchBot => 'Search Bot',
            self::SearchEngine => 'Search Engine',
            self::SecurityChecker => 'Security Checker',
            self::SecuritySearchBot => 'Security Search Bot',
            self::SeoAnalytics => 'SEO & Analytics',
            self::ServiceAgent => 'Service Agent',
            self::SiteMonitor => 'Site Monitor',
            self::SocialMediaAgent => 'Social Media Agent',
            self::UseragentAnonymizer => 'Useragent Anonymizer',
            self::WapBrowser => 'Wap Browser',
            default => $this->name,
        };
    }

    /**
     * Returns True, if the Browser is a Bot
     *
     * @throws void
     */
    #[Override]
    public function isBot(): bool
    {
        return match ($this) {
            self::Bot, self::BotSyndicationReader, self::BotTrancoder, self::Crawler, self::DownloadManager, self::LinkChecker, self::SearchBot, self::SearchEngine, self::SecurityChecker, self::SecuritySearchBot, self::ServiceAgent, self::SiteMonitor, self::SocialMediaAgent, self::Tool, self::UseragentAnonymizer => true,
            default => false,
        };
    }

    /**
     * Returns True, if the Browser is a Syndication Reader
     *
     * @throws void
     */
    #[Override]
    public function isSyndicationReader(): bool
    {
        return match ($this) {
            self::FeedReader, self::BotSyndicationReader => true,
            default => false,
        };
    }

    /**
     * Returns True, if the Browser uses a transcoding webservice
     *
     * @throws void
     */
    #[Override]
    public function isTranscoder(): bool
    {
        return match ($this) {
            self::Transcoder, self::BotTrancoder => true,
            default => false,
        };
    }
}
