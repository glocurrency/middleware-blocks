<?php

namespace GloCurrency\MiddlewareBlocks\Enums;

enum FeeTypeEnum: string
{
    case FLAT = 'flat';
    case PERCENT = 'percent';
}
