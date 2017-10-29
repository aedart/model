<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Currency Aware</h1>
 *
 * Component is aware of a string "currency" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface CurrencyAware
{
    /**
     * Set currency
     *
     * @param string|null $identifier Name, code or other identifier of currency
     *
     * @return self
     */
    public function setCurrency(?string $identifier);

    /**
     * Get currency
     *
     * If no "currency" value has been set, this method will
     * set and return a default "currency" value,
     * if any such value is available
     *
     * @see getDefaultCurrency()
     *
     * @return string|null currency or null if no currency has been set
     */
    public function getCurrency() : ?string ;

    /**
     * Check if "currency" has been set
     *
     * @return bool True if "currency" has been set, false if not
     */
    public function hasCurrency() : bool;

    /**
     * Get a default "currency" value, if any is available
     *
     * @return string|null Default "currency" value or null if no default value is available
     */
    public function getDefaultCurrency() : ?string;
}