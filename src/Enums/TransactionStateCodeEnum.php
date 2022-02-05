<?php

namespace GloCurrency\MiddlewareBlocks\Enums;

enum TransactionStateCodeEnum: string
{
    /**
     * Transaction is created.
     */
    case INITIAL = 'initial';

    /**
     * Transaction is created, both sender and receipient passed additional validation.
     */
    case SENDER_AND_RECIPIENT_VERIFIED = 'sender_and_recipient_verified';

    /**
     * Transaction is created, both sender and recipient are approved.
     */
    case SENDER_AND_RECIPIENT_APPROVED = 'sender_and_recipient_approved';

    /**
     * Transaction has received a payin, and it’s waiting for the funds to clear.
     */
    case PAYIN_RECEIVED = 'payin_received';

    /**
     * Transaction received funds, but not the requested amount.
     * Transaction will be resized, and will start payout based on the received funds.
     */
    case PAYIN_MISPAID = 'payin_mispaid';

    /**
     * Payout has been initiated and we’re waiting from a response from the provider.
     */
    case PROCESSING = 'processing';

    /**
     * Transaction was paid to the recipient.
     */
    case PAID = 'paid';

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
     * Transaction is awaiting a status update from the provider.
     */
    case PROVIDER_PENDING = 'provider_pending';

    /**
     * Transaction is awaiting a status update from the provider.
     */
    case PROVIDER_TIMEOUT = 'provider_timeout';

    /**
     * The payment provider is not accepting transactions at the moment.
     */
    case PROVIDER_NOT_ACCEPTING_TRANSACTIONS = 'provider_not_accepting_transactions';

    /**
     * The recipient bank is not accepting payments at the moment.
     */
    case RECIPIENT_BANK_NOT_ACCEPTING_TRANSACTIONS = 'recipient_bank_not_accepting_transactions';

    /**
     * Transaction requires manual verification. Please wait until this is done.
     */
    case MANUAL_RECONCILIATION_REQUIRED = 'manual_reconciliation_required';

    /**
     * Phone validation provider unresponsive.
     */
    case PHONE_VALIDATION_PROVIDER_UNRESPONSIVE = 'phone_validation_provider_unresponsive';

    /**
     * Invalid sender details provided.
     */
    case SENDER_DETAILS_INVALID = 'sender_details_invalid';

    /**
     * Sender is not allowed to transact.
     */
    case SENDER_NOT_ALLOWED_TO_TRANSACT = 'sender_not_allowed_to_transact';

    /**
     * An AML suspicion alert was raised.
     */
    case SENDER_AML_SUSPICION = 'sender_aml_suspicion';

    /**
     * Transaction sender phone_number invalid.
     */
    case SENDER_PHONE_NUMBER_INVALID = 'sender_phone_number_invalid';

    /**
     * Transaction sender has exceeded transfer limits.
     */
    case SENDER_TRANSFER_LIMIT_EXCEEDED = 'sender_transfer_limit_exceeded';

    /**
     * Invalid recipient details provided.
     */
    case RECIPIENT_DETAILS_INVALID = 'recipient_details_invalid';

    /**
     * Transaction recipient phone_number invalid.
     */
    case RECIPIENT_PHONE_NUMBER_INVALID = 'recipient_phone_number_invalid';

    /**
     * Recipient mobile number is not registered on the network.
     */
    case RECIPIENT_PHONE_NUMBER_NOT_REGISTERED_ON_NETWORK = 'recipient_phone_number_not_registered_on_network';

    /**
     * Recipient mobile number is not registered for mobile money.
     */
    case RECIPIENT_PHONE_NUMBER_NOT_ALLOWED_FOR_MOBILE_MONEY = 'recipient_phone_number_not_allowed_for_mobile_money';

    /**
     * Recipient bank account has invalid status.
     */
    case RECIPIENT_BANK_ACCOUNT_INVALID = 'recipient_bank_account_invalid';

    /**
     * Recipient bank code has invalid status.
     */
    case RECIPIENT_BANK_CODE_INVALID = 'recipient_bank_code_invalid';

    /**
     * Recipient name has failed name validation against the account holder name.
     */
    case RECIPIENT_NAME_VALIDATION_FAILED = 'recipient_name_validation_failed';

    /**
     * Recipient has exceeded transfer limits.
     */
    case RECIPIENT_TRANSFER_LIMIT_EXCEEDED = 'recipient_transfer_limit_exceeded';

    /**
     * Recipient has exceeded daily transfer limits.
     */
    case RECIPIENT_DAILY_TRANSFER_LIMIT_EXCEEDED = 'recipient_daily_transfer_limit_exceeded';

    /**
     * Recipient not allowed to receive funds.
     */
    case RECIPIENT_NOT_ALLOWED_TO_RECEIVE_MONEY = 'recipient_not_allowed_to_receive_money';

    /**
     * Invalid transaction details provided.
     */
    case TRANSACTION_DETAILS_INVALID = 'transaction_details_invalid';

    /**
     * Cannot assign cash collection id for transaction.
     */
    case CANNOT_ASSIGN_COLLECTION_ID_FOR_TRANSACTION = 'cannot_assign_collection_id_for_transaction';

    /**
     * Transaction reeference was already used.
     */
    case TRANSACTION_REFERENCE_ALREADY_USED = 'transaction_reference_already_used';

    /**
     * Transaction amount invalid.
     */
    case TRANSACTION_AMOUNT_INVALID = 'transaction_amount_invalid';

    /**
     * Transaction was requested to be cancelled at the provider.
     */
    case TRANSACTION_CANCEL_REQUESTED_BY_PROVIDER = 'transaction_cancel_requested_by_provider';

    /**
     * Transaction was requested to be cancelled at the provider.
     */
    case TRANSACTION_CANCELED_BY_PROVIDER = 'transaction_canceled_by_provider';

    /**
     * Transaction was cancelled by the sender.
     */
    case TRANSACTION_CANCELED_BY_SENDER = 'transaction_canceled_by_sender';

    /**
     * Transaction was cancelled by the recipient.
     */
    case TRANSACTION_CANCELED_BY_RECIPIENT = 'transaction_canceled_by_recipient';

    /**
     * Transaction was cancelled by the admin.
     */
    case TRANSACTION_CANCELED_BY_ADMIN = 'transaction_canceled_by_admin';

    /**
     * Transaction has not feen funded before `expires_at`.
     */
    case TRANSACTION_EXPIRED = 'transaction_expired';

    /**
     * Can transaction be updated.
     */
    public function canBeUpdated(): bool
    {
        return match($this) {
            self::INITIAL => true,
            self::SENDER_AND_RECIPIENT_APPROVED => true,
            default => false,
        };
    }

    /**
     * Can transaction be cancelled.
     */
    public function canBeCancelled(): bool
    {
        return match($this) {
            self::INITIAL => true,
            self::SENDER_AND_RECIPIENT_APPROVED => true,
            default => false,
        };
    }

    /**
     * Get the TransactionState based on TransactionStateCode.
     */
    public function getTransactionState(): TransactionStateEnum
    {
        return match ($this) {
            self::INITIAL => TransactionStateEnum::INITIAL,
            self::SENDER_AND_RECIPIENT_VERIFIED => TransactionStateEnum::VERIFIED,
            self::SENDER_AND_RECIPIENT_APPROVED => TransactionStateEnum::APPROVED,
            self::PAYIN_RECEIVED => TransactionStateEnum::RECEIVED,
            self::PAYIN_MISPAID => TransactionStateEnum::MISPAID,
            self::PROCESSING => TransactionStateEnum::PROCESSING,
            self::PAID => TransactionStateEnum::PAID,
            self::REFUNDED => TransactionStateEnum::REFUNDED,
            self::EXCEPTION => TransactionStateEnum::EXCEPTION,
            self::PROVIDER_PENDING => TransactionStateEnum::PROCESSING,
            self::PROVIDER_TIMEOUT => TransactionStateEnum::STUCK,
            self::PROVIDER_NOT_ACCEPTING_TRANSACTIONS => TransactionStateEnum::ERROR,
            self::RECIPIENT_BANK_NOT_ACCEPTING_TRANSACTIONS => TransactionStateEnum::ERROR,
            self::MANUAL_RECONCILIATION_REQUIRED => TransactionStateEnum::MANUAL,
            self::PHONE_VALIDATION_PROVIDER_UNRESPONSIVE => TransactionStateEnum::ERROR,
            self::SENDER_DETAILS_INVALID => TransactionStateEnum::ERROR,
            self::SENDER_NOT_ALLOWED_TO_TRANSACT => TransactionStateEnum::ERROR,
            self::SENDER_AML_SUSPICION => TransactionStateEnum::ERROR,
            self::SENDER_PHONE_NUMBER_INVALID => TransactionStateEnum::ERROR,
            self::SENDER_TRANSFER_LIMIT_EXCEEDED => TransactionStateEnum::ERROR,
            self::RECIPIENT_DETAILS_INVALID => TransactionStateEnum::ERROR,
            self::RECIPIENT_PHONE_NUMBER_INVALID => TransactionStateEnum::ERROR,
            self::RECIPIENT_PHONE_NUMBER_NOT_REGISTERED_ON_NETWORK => TransactionStateEnum::ERROR,
            self::RECIPIENT_PHONE_NUMBER_NOT_ALLOWED_FOR_MOBILE_MONEY => TransactionStateEnum::ERROR,
            self::RECIPIENT_BANK_ACCOUNT_INVALID => TransactionStateEnum::ERROR,
            self::RECIPIENT_BANK_CODE_INVALID => TransactionStateEnum::ERROR,
            self::RECIPIENT_NAME_VALIDATION_FAILED => TransactionStateEnum::ERROR,
            self::RECIPIENT_TRANSFER_LIMIT_EXCEEDED => TransactionStateEnum::ERROR,
            self::RECIPIENT_DAILY_TRANSFER_LIMIT_EXCEEDED => TransactionStateEnum::ERROR,
            self::RECIPIENT_NOT_ALLOWED_TO_RECEIVE_MONEY => TransactionStateEnum::ERROR,
            self::TRANSACTION_DETAILS_INVALID => TransactionStateEnum::ERROR,
            self::CANNOT_ASSIGN_COLLECTION_ID_FOR_TRANSACTION => TransactionStateEnum::ERROR,
            self::TRANSACTION_REFERENCE_ALREADY_USED => TransactionStateEnum::EXCEPTION,
            self::TRANSACTION_AMOUNT_INVALID => TransactionStateEnum::ERROR,
            self::TRANSACTION_CANCEL_REQUESTED_BY_PROVIDER => TransactionStateEnum::MANUAL,
            self::TRANSACTION_CANCELED_BY_PROVIDER => TransactionStateEnum::CANCELED,
            self::TRANSACTION_CANCELED_BY_SENDER => TransactionStateEnum::CANCELED,
            self::TRANSACTION_CANCELED_BY_RECIPIENT => TransactionStateEnum::CANCELED,
            self::TRANSACTION_CANCELED_BY_ADMIN => TransactionStateEnum::CANCELED,
            self::TRANSACTION_EXPIRED => TransactionStateEnum::CANCELED,
        };
    }

    /**
     * Get the Transaction state reason based on TransactionStateCode.
     */
    public function getTransactionStateReason(): string
    {
        return match ($this) {
            self::INITIAL => 'Transaction is created.',
            self::SENDER_AND_RECIPIENT_VERIFIED => 'Transaction sender and receipient passed additional validation.',
            self::SENDER_AND_RECIPIENT_APPROVED => 'Transaction sender and recipient have been approved.',
            self::PAYIN_RECEIVED => 'Transaction has received a payin, and it\'s waiting for the funds to clear.',
            self::PAYIN_MISPAID => 'Transaction has received funds, but not the requested amount.',
            self::PROCESSING => 'Transaction payout has been initiated and we\'re waiting for a response from the provider.',
            self::PAID => 'Transaction was paid to the recipient.',
            self::REFUNDED => 'Funds have been returned to the sender either partially or fully.',
            self::EXCEPTION => 'An exception happened during the processing of the transaction.',
            self::PROVIDER_PENDING => 'Transaction is awaiting a status update from the provider.',
            self::PROVIDER_TIMEOUT => 'Transaction is awaiting a status update from the provider.',
            self::PROVIDER_NOT_ACCEPTING_TRANSACTIONS => 'The payment provider is not accepting transactions at the moment.',
            self::RECIPIENT_BANK_NOT_ACCEPTING_TRANSACTIONS => 'Transaction recipient bank is not accepting payments at the moment.',
            self::MANUAL_RECONCILIATION_REQUIRED => 'Transaction requires manual verification. Please wait until this is done.',
            self::PHONE_VALIDATION_PROVIDER_UNRESPONSIVE => 'Phone validation provider temporarily unresponsive.',
            self::SENDER_DETAILS_INVALID => 'Transaction sender details invalid.',
            self::SENDER_NOT_ALLOWED_TO_TRANSACT => 'Transaction sender is not allowed to transact.',
            self::SENDER_AML_SUSPICION => 'Transaction sender has suspicious in AML.',
            self::SENDER_PHONE_NUMBER_INVALID => 'Transaction sender `phone_number` invalid.',
            self::SENDER_TRANSFER_LIMIT_EXCEEDED => 'Transaction sender has exceeded transfer limits.',
            self::RECIPIENT_DETAILS_INVALID => 'Transaction recipient details invalid.',
            self::RECIPIENT_PHONE_NUMBER_INVALID => 'Transaction recipient `phone_number` invalid.',
            self::RECIPIENT_PHONE_NUMBER_NOT_REGISTERED_ON_NETWORK => 'Transaction recipient `phone_number` is not registered on the network.',
            self::RECIPIENT_PHONE_NUMBER_NOT_ALLOWED_FOR_MOBILE_MONEY => 'Transaction recipient `phone_number` is not registered for mobile money.',
            self::RECIPIENT_BANK_ACCOUNT_INVALID => 'Transaction recipient `bank_account` invalid.',
            self::RECIPIENT_BANK_CODE_INVALID => 'Transaction recipient `bank_code` invalid.',
            self::RECIPIENT_NAME_VALIDATION_FAILED => 'Transaction recipient `name` has failed name validation against the account holder name.',
            self::RECIPIENT_TRANSFER_LIMIT_EXCEEDED => 'Transaction recipient has exceeded transfer limits.',
            self::RECIPIENT_DAILY_TRANSFER_LIMIT_EXCEEDED => 'Transaction recipient has exceeded daily transfer limits.',
            self::RECIPIENT_NOT_ALLOWED_TO_RECEIVE_MONEY => 'Transaction recipient not allowed to receive money.',
            self::TRANSACTION_DETAILS_INVALID => 'Transaction details invalid.',
            self::CANNOT_ASSIGN_COLLECTION_ID_FOR_TRANSACTION => 'Can not assign cash collection ID for transaction.',
            self::TRANSACTION_REFERENCE_ALREADY_USED => 'Transaction reference was already used.',
            self::TRANSACTION_AMOUNT_INVALID => 'Transaction amount invalid.',
            self::TRANSACTION_CANCEL_REQUESTED_BY_PROVIDER => 'Transaction was requested to be cancelled at the provider.',
            self::TRANSACTION_CANCELED_BY_PROVIDER => 'Transaction was cancelled by the provider.',
            self::TRANSACTION_CANCELED_BY_SENDER => 'Transaction was cancelled by the sender.',
            self::TRANSACTION_CANCELED_BY_RECIPIENT => 'Transaction was cancelled by the recipient.',
            self::TRANSACTION_CANCELED_BY_ADMIN => 'Transaction was cancelled by the admin.',
            self::TRANSACTION_EXPIRED => 'Transaction expired, and has been cancelled.',
        };
    }
}
