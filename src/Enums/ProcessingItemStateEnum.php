<?php

namespace GloCurrency\MiddlewareBlocks\Enums;

enum ProcessingItemStateEnum: string
{
    /**
     * ProcessingItem is created.
     */
    case INITIAL = 'initial';

    /**
     * ProcessingItem waiting to be accepted by processing facility.
     */
    case PENDING = 'pending';

    /**
     * ProcessingItem is accepted by processing facility.
     * For `cash` transactions only.
     */
    case ACCEPTED = 'accepted';

    /**
     * ProcessingItem has been sent to the processing facility.
     * Waiting for a response from the processing facility.
     */
    case PROCESSING = 'processing';

    /**
     * Payment to the recipient have run into issues.
     * Please check the Transaction statuse for more information.
     */
    case MANUAL = 'manual';

    /**
     * ProcessingItem is processed by processing facility.
     */
    case PROCESSED = 'processed';

    /**
     * ProcessingItem has been accepted by processing facility but now it has been requested to be cancelled.
     * Awaiting processing facility approval for cancellation or rejection of cancellation request.
     */
    case ABORTING = 'aborting';

    /**
     * ProcessingItem has been canceled by processing facility.
     */
    case CANCELED = 'canceled';

    /**
     * An exception happened during the processing of the ProcessingItem.
     */
    case EXCEPTION = 'exception';

    /**
     * There was an error, you can find more details in the `state_reason` attribute.
     */
    case ERROR = 'error';

    /**
     * We didn’t receive a response from the processing facility in time,
     * and we don’t know whether it has been paid our not.
     */
    case STUCK = 'stuck';

    /**
     * Get the Webhook event type based on ProcessingItem state.
     */
    public function getWebhookEvent(): WebhookEventEnum
    {
        return match ($this) {
            self::INITIAL => WebhookEventEnum::PROCESSING_ITEM_CREATED,
            self::PENDING => WebhookEventEnum::PROCESSING_ITEM_PENDING,
            self::ACCEPTED => WebhookEventEnum::PROCESSING_ITEM_ACCEPTED,
            self::PROCESSING => WebhookEventEnum::PROCESSING_ITEM_PROCESSING,
            self::MANUAL => WebhookEventEnum::PROCESSING_ITEM_MANUAL,
            self::PROCESSED => WebhookEventEnum::PROCESSING_ITEM_PROCESSED,
            self::ABORTING => WebhookEventEnum::PROCESSING_ITEM_ABORTING,
            self::CANCELED => WebhookEventEnum::PROCESSING_ITEM_CANCELED,
            self::EXCEPTION => WebhookEventEnum::PROCESSING_ITEM_EXCEPTION,
            self::ERROR => WebhookEventEnum::PROCESSING_ITEM_ERROR,
            self::STUCK => WebhookEventEnum::PROCESSING_ITEM_STUCK,
        };
    }
}
