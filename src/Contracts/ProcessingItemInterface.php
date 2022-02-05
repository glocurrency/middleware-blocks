<?php

namespace GloCurrency\MiddlewareBlocks\Contracts;

use GloCurrency\MiddlewareBlocks\Contracts\TransactionInterface;

interface ProcessingItemInterface
{
    public function getId(): string;
    public function getStateCode(): \BackedEnum;
    public function getStateCodeReason(): ?string;
    public function getTransaction(): ?TransactionInterface;
}