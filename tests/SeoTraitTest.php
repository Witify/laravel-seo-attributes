<?php

namespace Witify\LaravelSeoAttributes\Tests;

use PHPUnit\Framework\TestCase;
use Witify\LaravelSeoAttributes\SeoTrait;
use Witify\LaravelSeoAttributes\SeoAttributeManager;

class SeoTraitTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();
    }

    public function test_seo_method_is_added()
    {
        $mock = $this->getMockForTrait(SeoTrait::class);
        $this->assertTrue(
            method_exists($mock, 'seo'),
            'Class does not have method seo'
        );
    }

    public function test_json_method_returns_a_response_factory_object()
    {
        $mock = $this->getMockForTrait(SeoTrait::class);
        $this->assertTrue(
            method_exists($mock->seo(), 'setTitle'), 
            'Class returned by seo() does not have method setTitle'
        );
        $this->assertInstanceOf(SeoAttributeManager::class, $mock->seo());
    }
}
