<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Iban Aware</h1>
 *
 * Component is aware of a string "iban" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface IbanAware
{
    /**
     * Set iban
     *
     * @param string $number International Bank Account Number (IBAN)
     *
     * @return void
     */
    public function setIban($number);

    /**
     * Get iban
     *
     * If no "iban" value has been set, this method will
     * set and return a default "iban" value,
     * if any such value is available
     *
     * @see getDefaultIban()
     *
     * @return string|null "iban" value or null if no "iban" value has been set
     */
    public function getIban();

    /**
     * Get a default "iban" value, if any is available
     *
     * @return string|null A default "iban" value or null if no default value is available
     */
    public function getDefaultIban();

    /**
     * Check if "iban" has been set
     *
     * @return bool True if "iban" value has been set, false if not
     */
    public function hasIban();

    /**
     * Check if a default "iban" is available or not
     *
     * @return bool True of a default "iban" value is available, false if not
     */
    public function hasDefaultIban();
}