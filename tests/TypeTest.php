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

namespace UaBrowserTypeTest;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\ExpectationFailedException;
use PHPUnit\Framework\TestCase;
use UaBrowserType\Type;

use function sprintf;

final class TypeTest extends TestCase
{
    /**
     * tests the constructor and the getter
     *
     * @throws ExpectationFailedException
     */
    #[DataProvider('provider')]
    public function testType(
        string $type,
        string $name,
        bool $isBot,
        bool $isSyndicationReader,
        bool $isTranscoder,
    ): void {
        $result = Type::tryFrom($type);

        if ($result === null) {
            self::fail(sprintf('unknown type %s', $type));
        }

        self::assertSame($type, $result->getType());
        self::assertSame($name, $result->getName());
        self::assertSame($isBot, $result->isBot());
        self::assertSame($isSyndicationReader, $result->isSyndicationReader());
        self::assertSame($isTranscoder, $result->isTranscoder());

        $result3 = Type::fromName($type);

        self::assertSame($type, $result3->getType());
        self::assertSame($name, $result3->getName());
        self::assertSame($isBot, $result3->isBot());
        self::assertSame($isSyndicationReader, $result3->isSyndicationReader());
        self::assertSame($isTranscoder, $result3->isTranscoder());

        $result2 = Type::fromName($name);

        self::assertSame($type, $result2->getType());
        self::assertSame($name, $result2->getName());
        self::assertSame($isBot, $result2->isBot());
        self::assertSame($isSyndicationReader, $result2->isSyndicationReader());
        self::assertSame($isTranscoder, $result2->isTranscoder());

        $result4 = Type::fromName($result->value);

        self::assertSame($type, $result4->getType());
        self::assertSame($name, $result4->getName());
        self::assertSame($isBot, $result4->isBot());
        self::assertSame($isSyndicationReader, $result4->isSyndicationReader());
        self::assertSame($isTranscoder, $result4->isTranscoder());

        $result5 = Type::fromName($result->name);

        self::assertSame($type, $result5->getType());
        self::assertSame($name, $result5->getName());
        self::assertSame($isBot, $result5->isBot());
        self::assertSame($isSyndicationReader, $result5->isSyndicationReader());
        self::assertSame($isTranscoder, $result5->isTranscoder());
    }

    /**
     * @return array<int, array{type: string, name: string, isBot: bool, isSyndicationReader: bool, isTranscoder: bool}>
     *
     * @throws void
     */
    public static function provider(): array
    {
        return [
            [
                'type' => 'application',
                'name' => 'Application',
                'isBot' => false,
                'isSyndicationReader' => false,
                'isTranscoder' => false,
            ],
            [
                'type' => 'bot',
                'name' => 'Bot',
                'isBot' => true,
                'isSyndicationReader' => false,
                'isTranscoder' => false,
            ],
            [
                'type' => 'bot-syndication-reader',
                'name' => 'BotSyndicationReader',
                'isBot' => true,
                'isSyndicationReader' => true,
                'isTranscoder' => false,
            ],
            [
                'type' => 'bot-trancoder',
                'name' => 'BotTrancoder',
                'isBot' => true,
                'isSyndicationReader' => false,
                'isTranscoder' => true,
            ],
            [
                'type' => 'browser',
                'name' => 'Browser',
                'isBot' => false,
                'isSyndicationReader' => false,
                'isTranscoder' => false,
            ],
            [
                'type' => 'crawler',
                'name' => 'Crawler',
                'isBot' => true,
                'isSyndicationReader' => false,
                'isTranscoder' => false,
            ],
            [
                'type' => 'download-managers',
                'name' => 'Download Manager',
                'isBot' => true,
                'isSyndicationReader' => false,
                'isTranscoder' => false,
            ],
            [
                'type' => 'email-client',
                'name' => 'Email Client',
                'isBot' => false,
                'isSyndicationReader' => false,
                'isTranscoder' => false,
            ],
            [
                'type' => 'feed-reader',
                'name' => 'Feed Reader',
                'isBot' => false,
                'isSyndicationReader' => true,
                'isTranscoder' => false,
            ],
            [
                'type' => 'library',
                'name' => 'Library',
                'isBot' => false,
                'isSyndicationReader' => false,
                'isTranscoder' => false,
            ],
            [
                'type' => 'link-checker',
                'name' => 'Link Checker',
                'isBot' => true,
                'isSyndicationReader' => false,
                'isTranscoder' => false,
            ],
            [
                'type' => 'mobile-application',
                'name' => 'Mobile Application',
                'isBot' => false,
                'isSyndicationReader' => false,
                'isTranscoder' => false,
            ],
            [
                'type' => 'multimedia-player',
                'name' => 'Multimedia Player',
                'isBot' => false,
                'isSyndicationReader' => false,
                'isTranscoder' => false,
            ],
            [
                'type' => 'offline-browser',
                'name' => 'Offline Browser',
                'isBot' => false,
                'isSyndicationReader' => false,
                'isTranscoder' => false,
            ],
            [
                'type' => 'pim',
                'name' => 'Personal Information Manager',
                'isBot' => false,
                'isSyndicationReader' => false,
                'isTranscoder' => false,
            ],
            [
                'type' => 'search-bot',
                'name' => 'Search Bot',
                'isBot' => true,
                'isSyndicationReader' => false,
                'isTranscoder' => false,
            ],
            [
                'type' => 'search-engine',
                'name' => 'Search Engine',
                'isBot' => true,
                'isSyndicationReader' => false,
                'isTranscoder' => false,
            ],
            [
                'type' => 'security-checker',
                'name' => 'Security Checker',
                'isBot' => true,
                'isSyndicationReader' => false,
                'isTranscoder' => false,
            ],
            [
                'type' => 'security-search-bot',
                'name' => 'Security Search Bot',
                'isBot' => true,
                'isSyndicationReader' => false,
                'isTranscoder' => false,
            ],
            [
                'type' => 'seo-analytics',
                'name' => 'SEO & Analytics',
                'isBot' => false,
                'isSyndicationReader' => false,
                'isTranscoder' => false,
            ],
            [
                'type' => 'service-agent',
                'name' => 'Service Agent',
                'isBot' => true,
                'isSyndicationReader' => false,
                'isTranscoder' => false,
            ],
            [
                'type' => 'site-monitor',
                'name' => 'Site Monitor',
                'isBot' => true,
                'isSyndicationReader' => false,
                'isTranscoder' => false,
            ],
            [
                'type' => 'social-media-agent',
                'name' => 'Social Media Agent',
                'isBot' => true,
                'isSyndicationReader' => false,
                'isTranscoder' => false,
            ],
            [
                'type' => 'tool',
                'name' => 'Tool',
                'isBot' => true,
                'isSyndicationReader' => false,
                'isTranscoder' => false,
            ],
            [
                'type' => 'transcoder',
                'name' => 'Transcoder',
                'isBot' => false,
                'isSyndicationReader' => false,
                'isTranscoder' => true,
            ],
            [
                'type' => 'useragent-anonymizer',
                'name' => 'Useragent Anonymizer',
                'isBot' => true,
                'isSyndicationReader' => false,
                'isTranscoder' => false,
            ],
            [
                'type' => 'validator',
                'name' => 'Validator',
                'isBot' => false,
                'isSyndicationReader' => false,
                'isTranscoder' => false,
            ],
            [
                'type' => 'wap-browser',
                'name' => 'Wap Browser',
                'isBot' => false,
                'isSyndicationReader' => false,
                'isTranscoder' => false,
            ],
            [
                'type' => 'unknown',
                'name' => 'Unknown',
                'isBot' => false,
                'isSyndicationReader' => false,
                'isTranscoder' => false,
            ],
        ];
    }
}
