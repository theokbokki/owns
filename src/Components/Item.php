<?php

namespace Theokbokki\Owns\Components;

use Theokbokki\Owns\Components\IsComponent;
use Theokbokki\Owns\Components\Component;

class Item implements Component
{
    use IsComponent;

    public function __construct(
        public string $title,
        public string $img,
        public string $alt,
    ) {}

    public function render(): string
    {
        return <<<HTML
            <article class="item">
                <h2 class="item__title">{$this->title}</h2>
                <img class="item__img" src="/assets/img/{$this->img}" alt="{$this->alt}">
            </article>
        HTML;
    }
}
