<?php

namespace GloCurrency\MiddlewareBlocks\Enums;

enum RecipientStateEnum: string
{
    /**
     * When a recipient is created and has not been through any checking.
     */
    case INITIAL = 'initial';

    /**
     * The recipient has passed checks.
     */
    case APPROVED = 'approved';
}
