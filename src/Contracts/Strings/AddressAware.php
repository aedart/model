<?php namespace Aedart\Model\Contracts\Strings;

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
     * @param string $address Address to something. Can be formatted.
     *
     * @return void
     */
    public function setAddress($address);

    /**
     * Get address
     *
     * If no "address" value has been set, this method will
     * set and return a default "address" value,
     * if any such value is available
     *
     * @see getDefaultAddress()
     *
     * @return string|null "address" value or null if no "address" value has been set
     */
    public function getAddress();

    /**
     * Get a default "address" value, if any is available
     *
     * @return string|null A default "address" value or null if no default value is available
     */
    public function getDefaultAddress();

    /**
     * Check if "address" has been set
     *
     * @return bool True if "address" value has been set, false if not
     */
    public function hasAddress();

    /**
     * Check if a default "address" is available or not
     *
     * @return bool True of a default "address" value is available, false if not
     */
    public function hasDefaultAddress();
}