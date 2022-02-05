<?php

namespace GloCurrency\MiddlewareBlocks\Contracts;

interface ProcessingFacilityInterface
{
    public function getId(): string;
    public function getName(): string;
    public function getShortName(): string;
    public function getCountryCode(): string;
}
