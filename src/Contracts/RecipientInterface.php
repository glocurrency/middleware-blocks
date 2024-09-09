<?php

namespace GloCurrency\MiddlewareBlocks\Contracts;

use GloCurrency\MiddlewareBlocks\Enums\RecipientTypeEnum;
use GloCurrency\MiddlewareBlocks\Enums\RecipientStateCodeEnum;
use GloCurrency\MiddlewareBlocks\Enums\IdentificationTypeEnum;
use GloCurrency\MiddlewareBlocks\Enums\GenderTypeEnum;
use GloCurrency\MiddlewareBlocks\Enums\BankAccountTypeEnum;

interface RecipientInterface
{
    public function getId(): string;
    public function getType(): RecipientTypeEnum;
    public function getStateCode(): RecipientStateCodeEnum;
    public function getStateCodeReason(): ?string;
    public function getName(): string;
    public function getFirstName(): string;
    public function getLastName(): string;
    public function getBirthDate(): ?\Carbon\CarbonInterface;
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
    public function getMobileProvider(): ?string;
    public function getEmail(): ?string;
    public function getBankCode(): ?string;
    public function getBankAccount(): ?string;
    public function getBankAccountType(): ?BankAccountTypeEnum;
    public function getIban(): ?string;
    public function getBic(): ?string;
    public function getSortCode(): ?string;
    public function getExternalId(): string;
}