<?php

namespace Witify\LaravelSeoAttributes;

use Witify\LaravelSeoAttributes\SeoAttributeManager;

trait SeoTrait
{
    private $seoAttributeManager;

    public function seo()
    {
        if ($this->seoAttributeManager === null) {
            $this->seoAttributeManager = new SeoAttributeManager();
        }

        return $this->seoAttributeManager;
    }
}
