<?php

namespace Witify\LaravelSeoAttributes;

use Illuminate\Support\Facades\View;

class SeoAttributeManager
{
    public function setTitle(string $title)
    {
        $this->setSeo('title', $title);
    }

    public function setDescription(string $description)
    {
        $this->setSeo('description', $description);
    }

    public function setRelCanonical(string $relCanonical)
    {
        $this->setSeo('rel_canonical', $relCanonical);
    }

    private function setSeo(string $key, string $value)
    {
        $this->seo[$key] = $value;
        $this->share();
    }
    
    private function share()
    {
        View::share('seo', $this->seo);
    }
}
