<?php

namespace GloCurrency\MiddlewareBlocks\Contracts;

interface RecipientInterface
{
    public function getId(): string;
    public function getStateCode(): \BackedEnum;
    public function getStateCodeReason(): ?string;
    public function getName(): string;
    public function getBankCode(): ?string;
    public function getBankAccount(): ?string;
}