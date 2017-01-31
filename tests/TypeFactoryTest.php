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
     *
     */
    public function testFromArray()
    {
        $type       = 'testType';
        $name       = 'test1';
        $bot        = true;
        $reader     = false;
        $transcoder = false;

        $data = [
            'type'       => $type,
            'name'       => $name,
            'bot'        => $bot,
            'reader'     => $reader,
            'transcoder' => $transcoder,
        ];

        $result = $this->object->fromArray($data);

        self::assertInstanceOf('\UaBrowserType\Type', $result);
        self::assertSame($type, $result->getType());
        self::assertSame($name, $result->getName());
        self::assertTrue($result->isBot());
        self::assertFalse($result->isSyndicationReader());
        self::assertFalse($result->isTranscoder());
    }

    /**
     *
     */
    public function testFromJson()
    {
        $type       = 'testType';
        $name       = 'test1';
        $bot        = true;
        $reader     = false;
        $transcoder = false;

        $data = [
            'type'       => $type,
            'name'       => $name,
            'bot'        => $bot,
            'reader'     => $reader,
            'transcoder' => $transcoder,
        ];

        $result = $this->object->fromJson(json_encode($data));

        self::assertInstanceOf('\UaBrowserType\Type', $result);
        self::assertSame($type, $result->getType());
        self::assertSame($name, $result->getName());
        self::assertTrue($result->isBot());
        self::assertFalse($result->isSyndicationReader());
        self::assertFalse($result->isTranscoder());
    }
}
