<?php

namespace GloCurrency\MiddlewareBlocks\Contracts;

interface ApiUserInterface
{
    public function getId(): string;
    public function getApiSecret(): string;
}
