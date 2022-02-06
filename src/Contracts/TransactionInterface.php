<?php

namespace GloCurrency\MiddlewareBlocks\Contracts;

use Money\Money;
use GloCurrency\MiddlewareBlocks\Enums\TransactionTypeEnum;
use GloCurrency\MiddlewareBlocks\Enums\TransactionStateCodeEnum;
use GloCurrency\MiddlewareBlocks\Contracts\SenderInterface;
use GloCurrency\MiddlewareBlocks\Contracts\RecipientInterface;

interface TransactionInterface
{
    public function getId(): string;
    public function getReferenceForHumans(): string;
    public function getType(): TransactionTypeEnum;
    public function getStateCode(): TransactionStateCodeEnum;
    public function getStateCodeReason(): ?string;
    public function getSender(): ?SenderInterface;
    public function getRecipient(): ?RecipientInterface;
    public function getOutputAmount(): Money;
    public function getExternalId(): string;
}