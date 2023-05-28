<?php

namespace GloCurrency\MiddlewareBlocks\Contracts;

interface NotificationInterface
{
    public static function makeFor(string $countryCode, string $phoneNumber, string $message): self;
    public function wasSent(): bool;
    public function getText(): string;
}
