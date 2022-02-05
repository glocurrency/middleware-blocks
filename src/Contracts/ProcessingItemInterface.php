<?php

namespace GloCurrency\MiddlewareBlocks\Contracts;

use GloCurrency\MiddlewareBlocks\Enums\ProcessingItemStateCodeEnum;
use GloCurrency\MiddlewareBlocks\Contracts\TransactionInterface;

interface ProcessingItemInterface
{
    public function getId(): string;
    public function getStateCode(): ProcessingItemStateCodeEnum;
    public function getStateCodeReason(): ?string;
    public function updateStateCode(ProcessingItemStateCodeEnum $stateCode, ?string $stateCodeReason): bool;
    public function getTransaction(): ?TransactionInterface;
}