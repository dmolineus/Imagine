<?php

/*
 * This file is part of the Imagine package.
 *
 * (c) Bulat Shakirzyanov <mallluhuct@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Imagine\Gd;

class ImageFactoryTest extends \PHPUnit_Framework_TestCase
{
    private $factory;

    protected function setUp()
    {
        $this->factory = new ImageFactory();
    }

    public function testShouldCreateEmptyImage() {
        $image = $this->factory->create(50, 50);

        $this->assertInstanceOf('Imagine\ImageInterface', $image);
        $this->assertEquals(50, $image->getWidth());
        $this->assertEquals(50, $image->getHeight());
    }

    public function testShouldOpenAnImage()
    {
        $image = $this->factory->open('tests/Imagine/Fixtures/google.png');

        $this->assertInstanceOf('Imagine\ImageInterface', $image);
        $this->assertEquals(364, $image->getWidth());
        $this->assertEquals(126, $image->getHeight());
    }
}