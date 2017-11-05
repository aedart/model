<?php

namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Brand Aware</h1>
 *
 * Component is aware of a int "brand" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface BrandAware
{
    /**
     * Set brand
     *
     * @param int|null $identifier Name or identifier of a brand that is associated with a product or service
     *
     * @return self
     */
    public function setBrand(?int $identifier);

    /**
     * Get brand
     *
     * If no "brand" value has been set, this method will
     * set and return a default "brand" value,
     * if any such value is available
     *
     * @see getDefaultBrand()
     *
     * @return int|null brand or null if no brand has been set
     */
    public function getBrand() : ?int ;

    /**
     * Check if "brand" has been set
     *
     * @return bool True if "brand" has been set, false if not
     */
    public function hasBrand() : bool;

    /**
     * Get a default "brand" value, if any is available
     *
     * @return int|null Default "brand" value or null if no default value is available
     */
    public function getDefaultBrand() : ?int;
}