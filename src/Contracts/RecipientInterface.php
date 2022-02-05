<?php

namespace GloCurrency\MiddlewareBlocks\Contracts;

use GloCurrency\MiddlewareBlocks\Enums\RecipientStateCodeEnum;

interface RecipientInterface
{
    public function getId(): string;
    public function getStateCode(): RecipientStateCodeEnum;
    public function getStateCodeReason(): ?string;
    public function getName(): string;
    public function getBankCode(): ?string;
    public function getBankAccount(): ?string;
}