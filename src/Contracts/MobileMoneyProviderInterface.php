<?php

namespace GloCurrency\MiddlewareBlocks\Contracts;

interface MobileMoneyProviderInterface
{
    public function getId(): string;
    public function getCode(): string;
    public function getCountryCode(): string;
    public function getName(): string;
}