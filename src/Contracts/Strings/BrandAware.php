<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Brand Aware</h1>
 *
 * Component is aware of a string "brand" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface BrandAware
{
    /**
     * Set brand
     *
     * @param string|null $identifier Name or identifier of a brand that is associated with a product or service
     *
     * @return self
     */
    public function setBrand(?string $identifier);

    /**
     * Get brand
     *
     * If no "brand" value has been set, this method will
     * set and return a default "brand" value,
     * if any such value is available
     *
     * @see getDefaultBrand()
     *
     * @return string|null brand or null if no brand has been set
     */
    public function getBrand() : ?string ;

    /**
     * Check if "brand" has been set
     *
     * @return bool True if "brand" has been set, false if not
     */
    public function hasBrand() : bool;

    /**
     * Get a default "brand" value, if any is available
     *
     * @return string|null Default "brand" value or null if no default value is available
     */
    public function getDefaultBrand() : ?string;
}