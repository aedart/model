<?php namespace Aedart\Model\Contracts\Strings;

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
     * @param string $address Media Access Control Address (MAC Address)
     *
     * @return void
     */
    public function setMacAddress($address);

    /**
     * Get mac address
     *
     * If no "mac address" value has been set, this method will
     * set and return a default "mac address" value,
     * if any such value is available
     *
     * @see getDefaultMacAddress()
     *
     * @return string|null "mac address" value or null if no "mac address" value has been set
     */
    public function getMacAddress();

    /**
     * Get a default "mac address" value, if any is available
     *
     * @return string|null A default "mac address" value or null if no default value is available
     */
    public function getDefaultMacAddress();

    /**
     * Check if "mac address" has been set
     *
     * @return bool True if "mac address" value has been set, false if not
     */
    public function hasMacAddress();

    /**
     * Check if a default "mac address" is available or not
     *
     * @return bool True of a default "mac address" value is available, false if not
     */
    public function hasDefaultMacAddress();
}