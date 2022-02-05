<?php

namespace GloCurrency\MiddlewareBlocks\Enums;

enum WebhookEventEnum: string
{
    case SENDER_CREATED = 'sender.initial';
    case SENDER_VERIFIED = 'sender.verified';
    case SENDER_APPROVED = 'sender.approved';
    case SENDER_BANNED = 'sender.banned';
    case SENDER_REJECTED = 'sender.rejected';
    case SENDER_DISABLED = 'sender.disabled';

    case TRANSACTION_CREATED = 'transaction.initial';
    case TRANSACTION_VERIFIED = 'transaction.verified';
    case TRANSACTION_APPROVED = 'transaction.approved';
    case TRANSACTION_PENDING = 'transaction.pending';
    case TRANSACTION_MISPAID = 'transaction.mispaid';
    case TRANSACTION_RECEIVED = 'transaction.received';
    case TRANSACTION_PROCESSING = 'transaction.processing';
    case TRANSACTION_MANUAL = 'transaction.manual';
    case TRANSACTION_PAID = 'transaction.paid';
    case TRANSACTION_CANCELED = 'transaction.canceled';
    case TRANSACTION_REFUNDED = 'transaction.refunded';
    case TRANSACTION_EXCEPTION = 'transaction.exception';
    case TRANSACTION_ERROR = 'transaction.error';
    case TRANSACTION_STUCK = 'transaction.stuck';

    case PROCESSING_ITEM_CREATED = 'processing_item.initial';
    case PROCESSING_ITEM_PENDING = 'processing_item.pending';
    case PROCESSING_ITEM_ACCEPTED = 'processing_item.accepted';
    case PROCESSING_ITEM_PROCESSING = 'processing_item.processing';
    case PROCESSING_ITEM_MANUAL = 'processing_item.manual';
    case PROCESSING_ITEM_PROCESSED = 'processing_item.processed';
    case PROCESSING_ITEM_ABORTING = 'processing_item.aborting';
    case PROCESSING_ITEM_CANCELED = 'processing_item.canceled';
    case PROCESSING_ITEM_EXCEPTION = 'processing_item.exception';
    case PROCESSING_ITEM_ERROR = 'processing_item.error';
    case PROCESSING_ITEM_STUCK = 'processing_item.stuck';
}
