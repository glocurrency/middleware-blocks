<?php

namespace GloCurrency\MiddlewareBlocks\Enums;

enum RecipientStateCodeEnum: string
{
    /**
     * When a recipient is created and has not been through any checking.
     */
    case INITIAL = 'initial';

    /**
     * The recipient has passed checks.
     */
    case APPROVED = 'approved';

    /**
     * Get the RecipientState based on RecipientStateCode.
     */
    public function getRecipientState(): RecipientStateEnum
    {
        return match ($this) {
            self::INITIAL => RecipientStateEnum::INITIAL,
            self::APPROVED => RecipientStateEnum::APPROVED,
        };
    }
}
