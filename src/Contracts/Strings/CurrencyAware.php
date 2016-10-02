<?php namespace Aedart\Model\Contracts\Strings;

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
     * @param string $identifier Name, code or other identifier of a currency
     *
     * @return void
     */
    public function setCurrency($identifier);

    /**
     * Get currency
     *
     * If no "currency" value has been set, this method will
     * set and return a default "currency" value,
     * if any such value is available
     *
     * @see getDefaultCurrency()
     *
     * @return string|null "currency" value or null if no "currency" value has been set
     */
    public function getCurrency();

    /**
     * Get a default "currency" value, if any is available
     *
     * @return string|null A default "currency" value or null if no default value is available
     */
    public function getDefaultCurrency();

    /**
     * Check if "currency" has been set
     *
     * @return bool True if "currency" value has been set, false if not
     */
    public function hasCurrency();

    /**
     * Check if a default "currency" is available or not
     *
     * @return bool True of a default "currency" value is available, false if not
     */
    public function hasDefaultCurrency();
}