<?php

namespace GloCurrency\MiddlewareBlocks\Contracts;

interface BankInterface
{
    public function getId(): string;
    public function getCode(): string;
    public function getSwiftCode(): string;
    public function getCountryCode(): string;
    public function getName(): string;
    public function getShortName(): string;
}