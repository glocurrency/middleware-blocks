<?php

namespace GloCurrency\MiddlewareBlocks\Enums;

enum TransactionStateEnum: string
{
    /**
     * Transaction is created, but not yet ready to receive payments
     * (waiting for validation and approving).
     */
    case INITIAL = 'initial';

    /**
     * Transaction is created, both sender and receipient passed additional validation.
     */
    case VERIFIED = 'verified';

    /**
     * Transaction is created, both sender and recipient are approved. Payment can be received.
     */
    case APPROVED = 'approved';

    /**
     * Transaction has received a payin, and it’s waiting for the funds to clear.
     */
    case PENDING = 'pending';

    /**
     * Transaction received funds, but not the requested amount.
     * Transaction will be resized, and will start payout based on the received funds.
     */
    case MISPAID = 'mispaid';

    /**
     * Transaction has received the correct payin amount and will start processing the payouts.
     */
    case RECEIVED = 'received';

    /**
     * Payout has been initiated and we’re waiting from a response from the provider.
     * Transaction cannot be cancelled.
     */
    case PROCESSING = 'processing';

    /**
     * Payment to the recipient have run into issues.
     * Please check the Transaction state_reason for more information.
     */
    case MANUAL = 'manual';

    /**
     * Transaction has received correct payins and has performed payout to recipient.
     * No further steps required.
     */
    case PAID = 'paid';

    /**
     * Transaction has been cancelled.
     * Transactions are cancelled automatically after one hour if there was no funds received.
     * Once transactions are funded they can be cancelled by the API user unless the recipient have been paid out.
     */
    case CANCELED = 'canceled';

    /**
     * Transaction has been cancelled after it has been funded,
     * but the funds have been returned now to the sender either partially or fully.
     */
    case REFUNDED = 'refunded';

    /**
     * An exception happened during the processing of the transaction.
     */
    case EXCEPTION = 'exception';

    /**
     * There was an error, you can find more details in the `state_reason` attribute.
     * We will usually retry the transaction at a later date.
     * You can either wait or cancel the transaction.
     */
    case ERROR = 'error';

    /**
     * We didn’t receive a response from the provider in time,
     * and we don’t know whether it has been paid our not.
     * Please contact us for further details.
     */
    case STUCK = 'stuck';

    /**
     * Get the Webhook event type based on Transaction state.
     */
    public function getWebhookEvent(): WebhookEventEnum
    {
        return match ($this) {
            self::INITIAL => WebhookEventEnum::TRANSACTION_CREATED,
            self::VERIFIED => WebhookEventEnum::TRANSACTION_VERIFIED,
            self::APPROVED => WebhookEventEnum::TRANSACTION_APPROVED,
            self::PENDING => WebhookEventEnum::TRANSACTION_PENDING,
            self::MISPAID => WebhookEventEnum::TRANSACTION_MISPAID,
            self::RECEIVED => WebhookEventEnum::TRANSACTION_RECEIVED,
            self::PROCESSING => WebhookEventEnum::TRANSACTION_PROCESSING,
            self::MANUAL => WebhookEventEnum::TRANSACTION_MANUAL,
            self::PAID => WebhookEventEnum::TRANSACTION_PAID,
            self::CANCELED => WebhookEventEnum::TRANSACTION_CANCELED,
            self::REFUNDED => WebhookEventEnum::TRANSACTION_REFUNDED,
            self::EXCEPTION => WebhookEventEnum::TRANSACTION_EXCEPTION,
            self::ERROR => WebhookEventEnum::TRANSACTION_ERROR,
            self::STUCK => WebhookEventEnum::TRANSACTION_STUCK,
        };
    }
}
