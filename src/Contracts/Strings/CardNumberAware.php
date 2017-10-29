<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Card Number Aware</h1>
 *
 * Component is aware of a string "card number" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface CardNumberAware
{
    /**
     * Set card number
     *
     * @param string|null $number Numeric or Alphanumeric card number, e.g. for credit cards or other types of cards
     *
     * @return self
     */
    public function setCardNumber(?string $number);

    /**
     * Get card number
     *
     * If no "card number" value has been set, this method will
     * set and return a default "card number" value,
     * if any such value is available
     *
     * @see getDefaultCardNumber()
     *
     * @return string|null card number or null if no card number has been set
     */
    public function getCardNumber() : ?string ;

    /**
     * Check if "card number" has been set
     *
     * @return bool True if "card number" has been set, false if not
     */
    public function hasCardNumber() : bool;

    /**
     * Get a default "card number" value, if any is available
     *
     * @return string|null Default "card number" value or null if no default value is available
     */
    public function getDefaultCardNumber() : ?string;
}