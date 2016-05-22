<?php namespace Aedart\Model\Contracts\Strings;


/**
 * <h1>Vendor Aware</h1>
 *
 * Component is able to obtain and specify a vendor name
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
interface VendorAware
{
    /**
     * Set the given vendor
     *
     * @param string $name Name of a vendor
     *
     * @return void
     */
    public function setVendor($name);

    /**
     * Get the given vendor
     *
     * If no vendor has been set, this method will
     * set and return a default vendor, if any such
     * value is available
     *
     * @see getDefaultVendor()
     *
     * @return string|null vendor or null if none vendor has been set
     */
    public function getVendor();

    /**
     * Get a default vendor value, if any is available
     *
     * @return string|null A default vendor value or Null if no default value is available
     */
    public function getDefaultVendor();

    /**
     * Check if vendor has been set
     *
     * @return bool True if vendor has been set, false if not
     */
    public function hasVendor();

    /**
     * Check if a default vendor is available or not
     *
     * @return bool True of a default vendor is available, false if not
     */
    public function hasDefaultVendor();
}