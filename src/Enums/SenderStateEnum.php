<?php

namespace GloCurrency\MiddlewareBlocks\Enums;

enum SenderStateEnum: string
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
     * Get the Webhook event type based on Sender state.
     */
    public function getWebhookEvent(): WebhookEventEnum
    {
        return match ($this) {
            self::INITIAL => WebhookEventEnum::SENDER_CREATED,
            self::VERIFIED => WebhookEventEnum::SENDER_VERIFIED,
            self::APPROVED => WebhookEventEnum::SENDER_APPROVED,
            self::BANNED => WebhookEventEnum::SENDER_BANNED,
            self::REJECTED => WebhookEventEnum::SENDER_REJECTED,
            self::DISABLED => WebhookEventEnum::SENDER_DISABLED,
        };
    }
}
