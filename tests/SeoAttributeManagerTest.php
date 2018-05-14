<?php

namespace Witify\LaravelSeoAttributes\Tests;

use Orchestra\Testbench\TestCase;
use Witify\LaravelSeoAttributes\SeoAttributeManager;

class SeoAttributeManagerTest extends TestCase
{
    private $object;

    public function setUp()
    {
        parent::setUp();
        $this->object = new SeoAttributeManager();
    }

    public function test_title()
    {
        $title = 'test title';
        $this->object->setTitle($title);
        $this->assertEquals(view()->getShared()['seo']['title'], $title);
    }

    public function test_description()
    {
        $description = 'test title';
        $this->object->setDescription($description);
        $this->assertEquals(view()->getShared()['seo']['description'], $description);
    }

    public function test_rel_canonical()
    {
        $canonical = 'https://test.com';
        $this->object->setRelCanonical($canonical);
        $this->assertEquals(view()->getShared()['seo']['rel_canonical'], $canonical);
    }
}
