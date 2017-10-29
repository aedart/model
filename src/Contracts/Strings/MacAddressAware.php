<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Mac Address Aware</h1>
 *
 * Component is aware of a string "mac address" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface MacAddressAware
{
    /**
     * Set mac address
     *
     * @param string|null $address Media Access Control Address (MAC Address)
     *
     * @return self
     */
    public function setMacAddress(?string $address);

    /**
     * Get mac address
     *
     * If no "mac address" value has been set, this method will
     * set and return a default "mac address" value,
     * if any such value is available
     *
     * @see getDefaultMacAddress()
     *
     * @return string|null mac address or null if no mac address has been set
     */
    public function getMacAddress() : ?string ;

    /**
     * Check if "mac address" has been set
     *
     * @return bool True if "mac address" has been set, false if not
     */
    public function hasMacAddress() : bool;

    /**
     * Get a default "mac address" value, if any is available
     *
     * @return string|null Default "mac address" value or null if no default value is available
     */
    public function getDefaultMacAddress() : ?string;
}