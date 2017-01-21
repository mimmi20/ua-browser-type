<?php

namespace UaBrowserTypeTest;

use UaBrowserType\TypeFactory;

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
        $this->object = new TypeFactory();
    }

    /**
     * @uses UaBrowserType\Type::__construct
     * @uses UaBrowserType\Type::getName
     * @uses UaBrowserType\Type::isBot
     * @uses UaBrowserType\Type::isSyndicationReader
     * @uses UaBrowserType\Type::isTranscoder
     * @uses UaBrowserType\TypeLoader::__construct
     * @covers UaBrowserType\TypeFactory::__construct
     * @covers UaBrowserType\TypeFactory::fromArray
     */
    public function testFromArray()
    {
        $name       = 'test1';
        $bot        = true;
        $reader     = false;
        $transcoder = false;

        $data = [
            'name'       => $name,
            'bot'        => $bot,
            'reader'     => $reader,
            'transcoder' => $transcoder,
        ];

        $type = $this->object->fromArray($data);

        self::assertInstanceOf('\UaBrowserType\Type', $type);
        self::assertSame($name, $type->getName());
        self::assertTrue($type->isBot());
        self::assertFalse($type->isSyndicationReader());
        self::assertFalse($type->isTranscoder());
    }

    /**
     * @uses UaBrowserType\Type::__construct
     * @uses UaBrowserType\Type::getName
     * @uses UaBrowserType\Type::isBot
     * @uses UaBrowserType\Type::isSyndicationReader
     * @uses UaBrowserType\Type::isTranscoder
     * @uses UaBrowserType\TypeLoader::__construct
     * @covers UaBrowserType\TypeFactory::__construct
     * @covers UaBrowserType\TypeFactory::fromArray
     * @covers UaBrowserType\TypeFactory::fromJson
     */
    public function testFromJson()
    {
        $name       = 'test1';
        $bot        = true;
        $reader     = false;
        $transcoder = false;

        $data = [
            'name'       => $name,
            'bot'        => $bot,
            'reader'     => $reader,
            'transcoder' => $transcoder,
        ];

        $type = $this->object->fromJson(json_encode($data));

        self::assertInstanceOf('\UaBrowserType\Type', $type);
        self::assertSame($name, $type->getName());
        self::assertTrue($type->isBot());
        self::assertFalse($type->isSyndicationReader());
        self::assertFalse($type->isTranscoder());
    }
}
