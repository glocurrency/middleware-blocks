<?php

namespace GloCurrency\MiddlewareBlocks\Contracts;

interface ModelWithStateCodeInterface
{
    public function getStateCode(): \BackedEnum;
    public function getStateCodeReason(): ?string;
}
