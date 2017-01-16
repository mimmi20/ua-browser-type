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

namespace UaBrowserTypeTest;

use UaBrowserType\Type;
use UaBrowserType\TypeFactory;

class TypeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * tests the constructor and the getter
     *
     * @covers UaBrowserType\Type::__construct()
     * @covers UaBrowserType\Type::getName()
     * @covers UaBrowserType\Type::isBot()
     * @covers UaBrowserType\Type::isSyndicationReader()
     * @covers UaBrowserType\Type::isTranscoder()
     */
    public function testSetterGetter()
    {
        $name       = 'test1';
        $bot        = true;
        $reader     = false;
        $transcoder = null;

        $type = new Type($name, $bot, $reader, $transcoder);

        self::assertSame($name, $type->getName());
        self::assertTrue($type->isBot());
        self::assertFalse($type->isSyndicationReader());
        self::assertNull($type->isTranscoder());

        return $type;
    }

    /**
     * tests the __toString function
     *
     * @covers UaBrowserType\Type::__toString()
     */
    public function testTostring()
    {
        $name = false;
        $type = new Type($name);

        self::assertSame('', (string) $type);
    }

    /**
     * tests the serialize and the unserialize functions
     *
     * @param \UaBrowserType\Type $type
     *
     * @depends testSetterGetter
     * @covers UaBrowserType\Type::serialize()
     * @covers UaBrowserType\Type::unserialize()
     */
    public function testSerialize(Type $type)
    {
        $serialized = serialize($type);
        self::assertEquals($type, unserialize($serialized));
    }

    /**
     * tests the toJson function
     *
     * @param \UaBrowserType\Type $type
     *
     * @depends testSetterGetter
     * @covers UaBrowserType\Type::toJson()
     * @covers UaBrowserType\TypeFactory::__construct
     * @covers UaBrowserType\TypeFactory::fromJson
     */
    public function testTojson(Type $type)
    {
        $json = $type->toJson();
        self::assertEquals($type, (new TypeFactory())->fromJson($json));
    }

    /**
     * tests the toArray function
     *
     * @param \UaBrowserType\Type $type
     *
     * @depends testSetterGetter
     * @covers UaBrowserType\Type::toJson()
     * @covers UaBrowserType\TypeFactory::__construct
     * @covers UaBrowserType\TypeFactory::fromArray
     */
    public function testToarray(Type $type)
    {
        $array = $type->toArray();
        self::assertEquals($type, (new TypeFactory())->fromArray($array));
    }
}
