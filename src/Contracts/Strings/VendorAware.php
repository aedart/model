<?php

namespace Aedart\Model\Contracts\Strings;

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
     * @param string|null $vendor Name or path of a vendor
     *
     * @return self
     */
    public function setVendor(?string $vendor);

    /**
     * Get vendor
     *
     * If no "vendor" value has been set, this method will
     * set and return a default "vendor" value,
     * if any such value is available
     *
     * @see getDefaultVendor()
     *
     * @return string|null vendor or null if no vendor has been set
     */
    public function getVendor() : ?string ;

    /**
     * Check if "vendor" has been set
     *
     * @return bool True if "vendor" has been set, false if not
     */
    public function hasVendor() : bool;

    /**
     * Get a default "vendor" value, if any is available
     *
     * @return string|null Default "vendor" value or null if no default value is available
     */
    public function getDefaultVendor() : ?string;
}