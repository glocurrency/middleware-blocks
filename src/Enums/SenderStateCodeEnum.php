<?php

namespace GloCurrency\MiddlewareBlocks\Enums;

enum SenderStateCodeEnum: string
{
    /**
     * When a sender is created and has not been through any KYC checking (cannot transact).
     */
    case INITIAL = 'initial';

    /**
     * A sender has passed sanction list checks (cannot transact).
     */
    case VERIFIED = 'verified';

    /**
     * The sender has passed both KYC and sanction checks (can transact).
     */
    case APPROVED = 'approved';

    /**
     * An admin has banned the sender (cannot transact).
     */
    case BANNED = 'banned';

    /**
     * The sender has failed sanction list checks (cannot transact).
     */
    case REJECTED = 'rejected';

    /**
     * A sender is put into this state as a result of a delete request via the API (cannot transact).
     */
    case DISABLED = 'disabled';

    /**
     * Get the SenderState based on SenderStateCode.
     */
    public function getSenderState(): SenderStateEnum
    {
        return match ($this) {
            self::INITIAL => SenderStateEnum::INITIAL,
            self::VERIFIED => SenderStateEnum::VERIFIED,
            self::APPROVED => SenderStateEnum::APPROVED,
            self::BANNED => SenderStateEnum::BANNED,
            self::REJECTED => SenderStateEnum::REJECTED,
            self::DISABLED => SenderStateEnum::DISABLED,
        };
    }
}
