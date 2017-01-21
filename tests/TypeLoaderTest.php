<?php

namespace UaBrowserTypeTest;

use Cache\Adapter\Filesystem\FilesystemCachePool;
use League\Flysystem\Adapter\Local;
use League\Flysystem\Filesystem;
use UaBrowserType\TypeLoader;

/**
 * Test class for \BrowserDetector\Loader\BrowserLoader
 */
class TypeLoaderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \UaBrowserType\TypeLoader
     */
    private $object = null;

    /**
     * Sets up the fixture, for example, open a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $adapter      = new Local(__DIR__ . '/../cache/');
        $cache        = new FilesystemCachePool(new Filesystem($adapter));
        $cache->clear();
        $this->object = new TypeLoader($cache);
    }

    /**
     *
     */
    public function testHasUnknown()
    {
        self::assertTrue($this->object->has('unknown'));
    }

    /**
     *
     */
    public function testLoadUnknown()
    {
        $type = $this->object->load('unknown');

        self::assertInstanceOf('\UaBrowserType\Type', $type);
        self::assertNull($type->getName());
    }

    /**
     * @expectedException \BrowserDetector\Loader\NotFoundException
     * @expectedExceptionMessage the browser type with key "does not exist" was not found
     */
    public function testLoadNotAvailable()
    {
        $this->object->load('does not exist');
    }
}
