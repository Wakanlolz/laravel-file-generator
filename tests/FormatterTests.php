<?php

namespace Tests;

use PHPUnit_Framework_TestCase;
use Skyronic\Cookie\Format;

class FormatterTests extends PHPUnit_Framework_TestCase
{
    public function testBasename () {
        $this->assertEquals('input', Format::baseName("foo/bar/input.txt"));
        $this->assertEquals('input', Format::baseName("FOO/BAr/input"));
        $this->assertEquals('input', Format::baseName("foo\\bar\\input"));
    }

    public function testNamespace () {
        $this->assertEquals("App\\Tmp\\Foo", Format::getNamespace("app/Tmp/Foo.php"));
        $this->assertEquals("Test\\Unit\\Tmp\\Foo", Format::getNamespace("test/Tmp/Foo.php", "test", "Test\\Unit"));

        $this->assertEquals("App\\Tmp\\Foo", Format::getNamespace("app\\Tmp\\Foo.php"));
        $this->assertEquals("Test\\Unit\\Tmp\\Foo", Format::getNamespace("test\\Tmp\\Foo.php", "test", "Test\\Unit"));
    }

}