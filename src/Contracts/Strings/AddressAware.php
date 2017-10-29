<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Address Aware</h1>
 *
 * Component is aware of a string "address" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface AddressAware
{
    /**
     * Set address
     *
     * @param string|null $address Address to someone or something
     *
     * @return self
     */
    public function setAddress(?string $address);

    /**
     * Get address
     *
     * If no "address" value has been set, this method will
     * set and return a default "address" value,
     * if any such value is available
     *
     * @see getDefaultAddress()
     *
     * @return string|null address or null if no address has been set
     */
    public function getAddress() : ?string ;

    /**
     * Check if "address" has been set
     *
     * @return bool True if "address" has been set, false if not
     */
    public function hasAddress() : bool;

    /**
     * Get a default "address" value, if any is available
     *
     * @return string|null Default "address" value or null if no default value is available
     */
    public function getDefaultAddress() : ?string;
}