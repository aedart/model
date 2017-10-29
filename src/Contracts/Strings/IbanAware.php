<?php

namespace Aedart\Model\Contracts\Strings;

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
     * @param string|null $number International Bank Account Number (IBAN)
     *
     * @return self
     */
    public function setIban(?string $number);

    /**
     * Get iban
     *
     * If no "iban" value has been set, this method will
     * set and return a default "iban" value,
     * if any such value is available
     *
     * @see getDefaultIban()
     *
     * @return string|null iban or null if no iban has been set
     */
    public function getIban() : ?string ;

    /**
     * Check if "iban" has been set
     *
     * @return bool True if "iban" has been set, false if not
     */
    public function hasIban() : bool;

    /**
     * Get a default "iban" value, if any is available
     *
     * @return string|null Default "iban" value or null if no default value is available
     */
    public function getDefaultIban() : ?string;
}