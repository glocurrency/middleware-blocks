<?php

namespace GloCurrency\MiddlewareBlocks\Contracts;

use GloCurrency\MiddlewareBlocks\Enums\SenderTypeEnum;
use GloCurrency\MiddlewareBlocks\Enums\SenderStateCodeEnum;
use GloCurrency\MiddlewareBlocks\Enums\IdentificationTypeEnum;
use GloCurrency\MiddlewareBlocks\Enums\GenderTypeEnum;

interface SenderInterface
{
    public function getId(): string;
    public function getType(): SenderTypeEnum;
    public function getStateCode(): SenderStateCodeEnum;
    public function getStateCodeReason(): ?string;
    public function getName(): string;
    public function getFirstName(): string;
    public function getLastName(): string;
    public function getBirthDate(): \Carbon\CarbonInterface;
    public function getGender(): ?GenderTypeEnum;
    public function getIdentificationType(): ?IdentificationTypeEnum;
    public function getIdentificationNumber(): ?string;
    public function getIdentificationExpiry(): ?\Carbon\CarbonInterface;
    public function getCountryCode(): string;
    public function getCountryCodeAlpha2(): string;
    public function getStreet(): ?string;
    public function getPostalCode(): ?string;
    public function getCity(): ?string;
    public function getPhoneNumber(): ?string;
    public function getEmail(): ?string;
    public function getIp(): ?string;
    public function getExternalId(): string;
}