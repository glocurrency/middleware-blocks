<?php

namespace GloCurrency\MiddlewareBlocks\Contracts;

interface ConsumingServiceInterface
{
    public function getId(): string;
    public function getCodename(): string;
}