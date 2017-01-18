<?php

namespace UaBrowserTypeTest;

use UaBrowserType\TypeFactory;
use UaBrowserType\TypeLoader;
use Cache\Adapter\Filesystem\FilesystemCachePool;
use League\Flysystem\Filesystem;
use League\Flysystem\Adapter\Local;

/**
 * Test class for \BrowserDetector\Detector\Device\Mobile\GeneralMobile
 */
class TypeFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \UaBrowserType\TypeFactory
     */
    private $object = null;

    /**
     * Sets up the fixture, for example, open a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $adapter      = new Local(__DIR__ . '/../../cache/');
        $cache        = new FilesystemCachePool(new Filesystem($adapter));
        $loader       = new TypeLoader($cache);
        $this->object = new TypeFactory($cache, $loader);
    }

    /**
     * @uses UaBrowserType\TypeLoader::has
     * @uses UaBrowserType\TypeLoader::load
     * @covers UaBrowserType\TypeFactory::detect
     */
    public function testLoadUnknown()
    {
        $type = $this->object->detect('unknown');

        self::assertInstanceOf('\UaBrowserType\Type', $type);
        self::assertNull($type->getName());
    }

    /**
     * @expectedException \BrowserDetector\Loader\NotFoundException
     * @expectedExceptionMessage the browser type with key "does not exist" was not found
     *
     * @uses UaBrowserType\TypeLoader::has
     * @uses UaBrowserType\TypeLoader::load
     * @covers UaBrowserType\TypeFactory::detect
     */
    public function testLoadNotAvailable()
    {
        $this->object->detect('does not exist');
    }

    /**
     * @covers UaBrowserType\TypeFactory::fromArray
     */
    public function testFromArray()
    {
        $name       = 'test1';
        $bot        = true;
        $reader     = false;
        $transcoder = false;

        $data = [
            'name' => $name,
            'bot' => $bot,
            'reader' => $reader,
            'transcoder' => $transcoder
        ];

        $type = $this->object->fromArray($data);

        self::assertInstanceOf('\UaBrowserType\Type', $type);
        self::assertSame($name, $type->getName());
        self::assertTrue($type->isBot());
        self::assertFalse($type->isSyndicationReader());
        self::assertFalse($type->isTranscoder());
    }

    /**
     * @uses UaBrowserType\TypeFactory::fromArray
     * @covers UaBrowserType\TypeFactory::fromJson
     */
    public function testFromJson()
    {
        $name       = 'test1';
        $bot        = true;
        $reader     = false;
        $transcoder = false;

        $data = [
            'name' => $name,
            'bot' => $bot,
            'reader' => $reader,
            'transcoder' => $transcoder
        ];

        $type = $this->object->fromJson(json_encode($data));

        self::assertInstanceOf('\UaBrowserType\Type', $type);
        self::assertSame($name, $type->getName());
        self::assertTrue($type->isBot());
        self::assertFalse($type->isSyndicationReader());
        self::assertFalse($type->isTranscoder());
    }
}
