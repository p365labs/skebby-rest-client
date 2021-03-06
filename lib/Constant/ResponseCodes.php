<?php

namespace Fazland\SkebbyRestClient\Constant;

/**
 * @author Massimiliano Braglia <massimiliano.braglia@fazland.com>
 */
class ResponseCodes
{
    /**
     * Represents a generic error.
     *
     * @const
     */
    const GENERIC_ERROR = 10;

    /**
     * Represents invalid charset error.
     *
     * @const
     */
    const INVALID_CHARSET = 11;

    /**
     * Represents some mandatory parameter in the request is not specified error.
     *
     * @const
     */
    const MISSING_MANDATORY_PARAM = 12;

    /**
     * Represents invalid parameters in the request error.
     *
     * @const
     */
    const INVALID_PARAMETERS = 20;

    /**
     * Represents invalid username or password error.
     *
     * @const
     */
    const INVALID_USERNAME_OR_PASSWORD = 21;

    /**
     * Represents invalid sender syntax error.
     *
     * @const
     */
    const INVALID_SENDER = 22;

    /**
     * Represents sender character length too long error.
     *
     * @const
     */
    const SENDER_LENGTH_TOO_LONG = 23;

    /**
     * Represents SMS body is too long error.
     *
     * @const
     */
    const TEXT_TOO_LONG = 24;

    /**
     * Represents invalid recipient syntax error.
     *
     * @const
     */
    const INVALID_RECIPIENT = 25;

    /**
     * Represents missing sender error.
     *
     * @const
     */
    const MISSING_SENDER = 26;

    /**
     * Represents too many recipients error.
     *
     * @const
     */
    const TOO_MANY_RECIPIENTS = 27;

    /**
     * Represents account is not configured to use the Skebby SMS gateway error.
     *
     * @const
     */
    const ACCOUNT_UNABLE_TO_USE_SMS_GATEWAY = 29;

    /**
     * Represents insufficient credit error.
     *
     * @const
     */
    const INSUFFICIENT_CREDIT = 30;

    /**
     * Represents invalid request method (only POST is accepted) error.
     *
     * @const
     */
    const INVALID_REQUEST_METHOD = 31;

    /**
     * Represents invalid format of delivery_start parameter error.
     *
     * @const
     */
    const INVALID_DELIVERY_START_PARAM = 32;

    /**
     * Represents invalid encoding_scheme parameter error.
     *
     * @const
     */
    const INVALID_ENCODING_SCHEME = 33;

    /**
     * Represents invalid validity_period (it MUST be an int, 5 <= validity_period <= 2880) parameter error.
     *
     * @const
     */
    const INVALID_VALIDITY_PERIOD = 34;

    /**
     * Represents invalid user_reference error.
     *
     * @const
     */
    const INVALID_USER_REFERENCE = 35;

    /**
     * Represents missing user_reference error.
     *
     * @const
     */
    const MISSING_USER_REFERENCE = 36;

    /**
     * Represents characters not in current charset error.
     *
     * @const
     */
    const CHARACTERS_NOT_IN_CURRENT_CHARSET = 37;

    /**
     * Represents too many alias with same VAT number error.
     *
     * @const
     */
    const TOO_MANY_ALIAS_WITH_SAME_VAT = 38;

    /**
     * Represents invalid VAT number error.
     *
     * @const
     */
    const INVALID_VAT = 39;

    /**
     * Represent alpha numeric sender names are allowed only for business plans error.
     *
     * @const
     */
    const ALPHA_NUMERIC_SENDER_ALLOWED_ONLY_FOR_BUSINESS_PLANS = 40;

    /**
     * Represents already registered alpha numeric sender error.
     *
     * @const
     */
    const ALPHA_NUMERIC_SENDER_ALREADY_REGISTERED = 41;
}
