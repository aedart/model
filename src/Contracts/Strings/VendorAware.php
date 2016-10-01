<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Vendor Aware</h1>
 *
 * Component is aware of a string "vendor" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface VendorAware
{
    /**
     * Set vendor
     *
     * @param string $name Name of a vendor
     *
     * @return void
     */
    public function setVendor($name);

    /**
     * Get vendor
     *
     * If no "vendor" value has been set, this method will
     * set and return a default "vendor" value,
     * if any such value is available
     *
     * @see getDefaultVendor()
     *
     * @return string|null "vendor" value or null if no "vendor" value has been set
     */
    public function getVendor();

    /**
     * Get a default "vendor" value, if any is available
     *
     * @return string|null A default "vendor" value or null if no default value is available
     */
    public function getDefaultVendor();

    /**
     * Check if "vendor" has been set
     *
     * @return bool True if "vendor" value has been set, false if not
     */
    public function hasVendor();

    /**
     * Check if a default "vendor" is available or not
     *
     * @return bool True of a default "vendor" value is available, false if not
     */
    public function hasDefaultVendor();
}