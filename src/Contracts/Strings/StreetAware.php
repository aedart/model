<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Street Aware</h1>
 *
 * Component is aware of a string "street" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface StreetAware
{
    /**
     * Set street
     *
     * @param string $address Full street address, which might include building or appartment number(s)
     *
     * @return void
     */
    public function setStreet($address);

    /**
     * Get street
     *
     * If no "street" value has been set, this method will
     * set and return a default "street" value,
     * if any such value is available
     *
     * @see getDefaultStreet()
     *
     * @return string|null "street" value or null if no "street" value has been set
     */
    public function getStreet();

    /**
     * Get a default "street" value, if any is available
     *
     * @return string|null A default "street" value or null if no default value is available
     */
    public function getDefaultStreet();

    /**
     * Check if "street" has been set
     *
     * @return bool True if "street" value has been set, false if not
     */
    public function hasStreet();

    /**
     * Check if a default "street" is available or not
     *
     * @return bool True of a default "street" value is available, false if not
     */
    public function hasDefaultStreet();
}