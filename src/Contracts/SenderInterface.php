<?php

namespace GloCurrency\MiddlewareBlocks\Contracts;

use GloCurrency\MiddlewareBlocks\Enums\TransactionStateCodeEnum;

interface SenderInterface
{
    public function getId(): string;
    public function getStateCode(): TransactionStateCodeEnum;
    public function getStateCodeReason(): ?string;
}