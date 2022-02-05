<?php

namespace GloCurrency\MiddlewareBlocks\Contracts;

interface SenderInterface
{
    public function getId(): string;
    public function getStateCode(): \BackedEnum;
    public function getStateCodeReason(): ?string;
}