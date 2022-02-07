<?php

namespace GloCurrency\MiddlewareBlocks\Enums;

enum ProcessingItemStateCodeEnum: string
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
     * ProcessingItem is processed by processing facility.
     */
    case PROCESSED = 'processed';

    /**
     * An exception happened during the processing of the ProcessingItem.
     */
    case EXCEPTION = 'exception';

    /**
     * Corridor can not be obtained.
     */
    case NO_CORRIDOR = 'no_corridor';

    /**
     * Collection pin or password can not be obtained.
     * TODO: rename to `no_collection_password`
     */
    case NO_COLLECTION_PIN = 'no_collection_pin';

    /**
     * Bank can not be obtained.
     */
    case NO_BANK = 'no_bank';

    /**
     * Transaction can not be obtained.
     */
    case NO_TRANSACTION = 'no_transaction';

    /**
     * Transaction `type` is not be allowed.
     */
    case TRANSACTION_TYPE_NOT_ALLOWED = 'transaction_type_not_allowed';

    /**
     * Transaction `type` is not be allowed.
     */
    case TRANSACTION_STATE_NOT_ALLOWED = 'transaction_state_not_allowed';

    /**
     * TransactionSender can not be obtained.
     */
    case NO_TRANSACTION_SENDER = 'no_transaction_sender';

    /**
     * TransactionRecipient can not be obtained.
     */
    case NO_TRANSACTION_RECIPIENT = 'no_transaction_recipient';

    /**
     * TransactionRecipient `bank_code` can not be obtained.
     */
    case NO_TRANSACTION_RECIPIENT_BANK_CODE = 'no_transaction_recipient_bank_code';

    /**
     * TransactionRecipient `bank_account` can not be obtained.
     */
    case NO_TRANSACTION_RECIPIENT_BANK_ACCOUNT = 'no_transaction_recipient_bank_account';

    /**
     * TransactionRecipient `phone_number` can not be obtained.
     */
    case NO_TRANSACTION_RECIPIENT_PHONE_NUMBER = 'no_transaction_recipient_phone_number';

    /**
     * TransactionRecipient Country can not be obtained.
     */
    case NO_TRANSACTION_RECIPIENT_COUNTRY = 'no_transaction_recipient_country';

    /**
     * Target transaction already exist.
     */
    case DUPLICATE_TARGET_TRANSACTION = 'duplicate_target_transaction';

    /**
     * Target debit account can not be obtained.
     */
    case NO_TARGET_DEBIT_ACCOUNT = 'no_target_debit_account';

    /**
     * Target bank code can not be obtained.
     */
    case NO_TARGET_BANK_CODE = 'no_target_bank_code';

    /**
     * Target routing tag can not be obtained.
     */
    case NO_TARGET_ROUTING_TAG = 'no_target_routing_tag';

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
     * Recipient mobile number is not registered on the network.
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
     * Get the ProcessingItemState state based on ProcessingItemStateCode.
     */
    public function getProcessingItemState(): ProcessingItemStateEnum
    {
        return match ($this) {
            self::INITIAL => ProcessingItemStateEnum::INITIAL,
            self::PENDING => ProcessingItemStateEnum::PENDING,
            self::ACCEPTED => ProcessingItemStateEnum::ACCEPTED,
            self::PROCESSED => ProcessingItemStateEnum::PROCESSED,
            self::EXCEPTION => ProcessingItemStateEnum::EXCEPTION,
            self::NO_CORRIDOR => ProcessingItemStateEnum::EXCEPTION,
            self::NO_COLLECTION_PIN => ProcessingItemStateEnum::EXCEPTION,
            self::NO_BANK => ProcessingItemStateEnum::EXCEPTION,
            self::NO_TRANSACTION => ProcessingItemStateEnum::EXCEPTION,
            self::TRANSACTION_TYPE_NOT_ALLOWED => ProcessingItemStateEnum::EXCEPTION,
            self::TRANSACTION_STATE_NOT_ALLOWED => ProcessingItemStateEnum::EXCEPTION,
            self::NO_TRANSACTION_SENDER => ProcessingItemStateEnum::EXCEPTION,
            self::NO_TRANSACTION_RECIPIENT => ProcessingItemStateEnum::EXCEPTION,
            self::NO_TRANSACTION_RECIPIENT_BANK_CODE => ProcessingItemStateEnum::EXCEPTION,
            self::NO_TRANSACTION_RECIPIENT_BANK_ACCOUNT => ProcessingItemStateEnum::EXCEPTION,
            self::NO_TRANSACTION_RECIPIENT_PHONE_NUMBER => ProcessingItemStateEnum::EXCEPTION,
            self::NO_TRANSACTION_RECIPIENT_COUNTRY => ProcessingItemStateEnum::EXCEPTION,
            self::DUPLICATE_TARGET_TRANSACTION => ProcessingItemStateEnum::EXCEPTION,
            self::NO_TARGET_DEBIT_ACCOUNT => ProcessingItemStateEnum::EXCEPTION,
            self::NO_TARGET_BANK_CODE => ProcessingItemStateEnum::EXCEPTION,
            self::NO_TARGET_ROUTING_TAG => ProcessingItemStateEnum::EXCEPTION,
            self::PROVIDER_PENDING => ProcessingItemStateEnum::PROCESSING,
            self::PROVIDER_TIMEOUT => ProcessingItemStateEnum::STUCK,
            self::PROVIDER_NOT_ACCEPTING_TRANSACTIONS => ProcessingItemStateEnum::ERROR,
            self::RECIPIENT_BANK_NOT_ACCEPTING_TRANSACTIONS => ProcessingItemStateEnum::ERROR,
            self::MANUAL_RECONCILIATION_REQUIRED => ProcessingItemStateEnum::MANUAL,
            self::SENDER_DETAILS_INVALID => ProcessingItemStateEnum::ERROR,
            self::SENDER_NOT_ALLOWED_TO_TRANSACT => ProcessingItemStateEnum::ERROR,
            self::SENDER_AML_SUSPICION => ProcessingItemStateEnum::ERROR,
            self::SENDER_PHONE_NUMBER_INVALID => ProcessingItemStateEnum::ERROR,
            self::SENDER_TRANSFER_LIMIT_EXCEEDED => ProcessingItemStateEnum::ERROR,
            self::RECIPIENT_DETAILS_INVALID => ProcessingItemStateEnum::ERROR,
            self::RECIPIENT_PHONE_NUMBER_INVALID => ProcessingItemStateEnum::ERROR,
            self::RECIPIENT_PHONE_NUMBER_NOT_REGISTERED_ON_NETWORK => ProcessingItemStateEnum::ERROR,
            self::RECIPIENT_PHONE_NUMBER_NOT_ALLOWED_FOR_MOBILE_MONEY => ProcessingItemStateEnum::ERROR,
            self::RECIPIENT_BANK_ACCOUNT_INVALID => ProcessingItemStateEnum::ERROR,
            self::RECIPIENT_BANK_CODE_INVALID => ProcessingItemStateEnum::ERROR,
            self::RECIPIENT_NAME_VALIDATION_FAILED => ProcessingItemStateEnum::ERROR,
            self::RECIPIENT_TRANSFER_LIMIT_EXCEEDED => ProcessingItemStateEnum::ERROR,
            self::RECIPIENT_DAILY_TRANSFER_LIMIT_EXCEEDED => ProcessingItemStateEnum::ERROR,
            self::RECIPIENT_NOT_ALLOWED_TO_RECEIVE_MONEY => ProcessingItemStateEnum::ERROR,
            self::TRANSACTION_DETAILS_INVALID => ProcessingItemStateEnum::ERROR,
            self::TRANSACTION_REFERENCE_ALREADY_USED => ProcessingItemStateEnum::ERROR,
            self::TRANSACTION_AMOUNT_INVALID => ProcessingItemStateEnum::ERROR,
            self::TRANSACTION_CANCEL_REQUESTED_BY_PROVIDER => ProcessingItemStateEnum::ABORTING,
            self::TRANSACTION_CANCELED_BY_PROVIDER => ProcessingItemStateEnum::CANCELED,
            self::TRANSACTION_CANCELED_BY_SENDER => ProcessingItemStateEnum::CANCELED,
            self::TRANSACTION_CANCELED_BY_RECIPIENT => ProcessingItemStateEnum::CANCELED,
        };
    }

    /**
     * Get the TransactionStateCodeEnum state based on ProcessingItemStateCode.
     */
    public function getTransactionStateCode(): TransactionStateCodeEnum
    {
        return match ($this) {
            self::INITIAL => TransactionStateCodeEnum::INITIAL,
            self::PENDING => TransactionStateCodeEnum::PROCESSING, // TODO: do we need the regular `pending` ?
            self::ACCEPTED => TransactionStateCodeEnum::PROVIDER_PENDING,
            self::PROCESSED => TransactionStateCodeEnum::PAID,
            self::EXCEPTION => TransactionStateCodeEnum::MANUAL_RECONCILIATION_REQUIRED,
            self::NO_CORRIDOR => TransactionStateCodeEnum::MANUAL_RECONCILIATION_REQUIRED,
            self::NO_COLLECTION_PIN => TransactionStateCodeEnum::MANUAL_RECONCILIATION_REQUIRED,
            self::NO_BANK => TransactionStateCodeEnum::MANUAL_RECONCILIATION_REQUIRED,
            self::NO_TRANSACTION => TransactionStateCodeEnum::MANUAL_RECONCILIATION_REQUIRED,
            self::TRANSACTION_TYPE_NOT_ALLOWED => TransactionStateCodeEnum::MANUAL_RECONCILIATION_REQUIRED,
            self::TRANSACTION_STATE_NOT_ALLOWED => TransactionStateCodeEnum::MANUAL_RECONCILIATION_REQUIRED,
            self::NO_TRANSACTION_SENDER => TransactionStateCodeEnum::MANUAL_RECONCILIATION_REQUIRED,
            self::NO_TRANSACTION_RECIPIENT => TransactionStateCodeEnum::MANUAL_RECONCILIATION_REQUIRED,
            self::NO_TRANSACTION_RECIPIENT_BANK_CODE => TransactionStateCodeEnum::MANUAL_RECONCILIATION_REQUIRED,
            self::NO_TRANSACTION_RECIPIENT_BANK_ACCOUNT => TransactionStateCodeEnum::MANUAL_RECONCILIATION_REQUIRED,
            self::NO_TRANSACTION_RECIPIENT_PHONE_NUMBER => TransactionStateCodeEnum::MANUAL_RECONCILIATION_REQUIRED,
            self::NO_TRANSACTION_RECIPIENT_COUNTRY => TransactionStateCodeEnum::MANUAL_RECONCILIATION_REQUIRED,
            self::DUPLICATE_TARGET_TRANSACTION => TransactionStateCodeEnum::MANUAL_RECONCILIATION_REQUIRED,
            self::NO_TARGET_DEBIT_ACCOUNT => TransactionStateCodeEnum::MANUAL_RECONCILIATION_REQUIRED,
            self::NO_TARGET_BANK_CODE => TransactionStateCodeEnum::MANUAL_RECONCILIATION_REQUIRED,
            self::NO_TARGET_ROUTING_TAG => TransactionStateCodeEnum::MANUAL_RECONCILIATION_REQUIRED,

            self::PROVIDER_PENDING => TransactionStateCodeEnum::PROVIDER_PENDING,
            self::PROVIDER_TIMEOUT => TransactionStateCodeEnum::PROVIDER_TIMEOUT,
            self::PROVIDER_NOT_ACCEPTING_TRANSACTIONS => TransactionStateCodeEnum::PROVIDER_NOT_ACCEPTING_TRANSACTIONS,
            self::RECIPIENT_BANK_NOT_ACCEPTING_TRANSACTIONS => TransactionStateCodeEnum::RECIPIENT_BANK_NOT_ACCEPTING_TRANSACTIONS,
            self::MANUAL_RECONCILIATION_REQUIRED => TransactionStateCodeEnum::MANUAL_RECONCILIATION_REQUIRED,
            self::SENDER_DETAILS_INVALID => TransactionStateCodeEnum::SENDER_DETAILS_INVALID,
            self::SENDER_NOT_ALLOWED_TO_TRANSACT => TransactionStateCodeEnum::SENDER_NOT_ALLOWED_TO_TRANSACT,
            self::SENDER_AML_SUSPICION => TransactionStateCodeEnum::SENDER_AML_SUSPICION,
            self::SENDER_PHONE_NUMBER_INVALID => TransactionStateCodeEnum::SENDER_PHONE_NUMBER_INVALID,
            self::SENDER_TRANSFER_LIMIT_EXCEEDED => TransactionStateCodeEnum::SENDER_TRANSFER_LIMIT_EXCEEDED,
            self::RECIPIENT_DETAILS_INVALID => TransactionStateCodeEnum::RECIPIENT_DETAILS_INVALID,
            self::RECIPIENT_PHONE_NUMBER_INVALID => TransactionStateCodeEnum::RECIPIENT_PHONE_NUMBER_INVALID,
            self::RECIPIENT_PHONE_NUMBER_NOT_REGISTERED_ON_NETWORK => TransactionStateCodeEnum::RECIPIENT_PHONE_NUMBER_NOT_REGISTERED_ON_NETWORK,
            self::RECIPIENT_PHONE_NUMBER_NOT_ALLOWED_FOR_MOBILE_MONEY => TransactionStateCodeEnum::RECIPIENT_PHONE_NUMBER_NOT_ALLOWED_FOR_MOBILE_MONEY,
            self::RECIPIENT_BANK_ACCOUNT_INVALID => TransactionStateCodeEnum::RECIPIENT_BANK_ACCOUNT_INVALID,
            self::RECIPIENT_BANK_CODE_INVALID => TransactionStateCodeEnum::RECIPIENT_BANK_CODE_INVALID,
            self::RECIPIENT_NAME_VALIDATION_FAILED => TransactionStateCodeEnum::RECIPIENT_NAME_VALIDATION_FAILED,
            self::RECIPIENT_TRANSFER_LIMIT_EXCEEDED => TransactionStateCodeEnum::RECIPIENT_TRANSFER_LIMIT_EXCEEDED,
            self::RECIPIENT_DAILY_TRANSFER_LIMIT_EXCEEDED => TransactionStateCodeEnum::RECIPIENT_DAILY_TRANSFER_LIMIT_EXCEEDED,
            self::RECIPIENT_NOT_ALLOWED_TO_RECEIVE_MONEY => TransactionStateCodeEnum::RECIPIENT_NOT_ALLOWED_TO_RECEIVE_MONEY,
            self::TRANSACTION_DETAILS_INVALID => TransactionStateCodeEnum::TRANSACTION_DETAILS_INVALID,
            self::TRANSACTION_REFERENCE_ALREADY_USED => TransactionStateCodeEnum::TRANSACTION_REFERENCE_ALREADY_USED,
            self::TRANSACTION_AMOUNT_INVALID => TransactionStateCodeEnum::TRANSACTION_AMOUNT_INVALID,
            self::TRANSACTION_CANCEL_REQUESTED_BY_PROVIDER => TransactionStateCodeEnum::TRANSACTION_CANCEL_REQUESTED_BY_PROVIDER,
            self::TRANSACTION_CANCELED_BY_PROVIDER => TransactionStateCodeEnum::TRANSACTION_CANCELED_BY_PROVIDER,
            self::TRANSACTION_CANCELED_BY_SENDER => TransactionStateCodeEnum::TRANSACTION_CANCELED_BY_SENDER,
            self::TRANSACTION_CANCELED_BY_RECIPIENT => TransactionStateCodeEnum::TRANSACTION_CANCELED_BY_RECIPIENT,
        };
    }
}
