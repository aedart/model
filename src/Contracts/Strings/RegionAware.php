<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Region Aware</h1>
 *
 * Component is aware of a string "region" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface RegionAware
{
    /**
     * Set region
     *
     * @param string|null $name Name of a region, state or province
     *
     * @return self
     */
    public function setRegion(?string $name);

    /**
     * Get region
     *
     * If no "region" value has been set, this method will
     * set and return a default "region" value,
     * if any such value is available
     *
     * @see getDefaultRegion()
     *
     * @return string|null region or null if no region has been set
     */
    public function getRegion() : ?string ;

    /**
     * Check if "region" has been set
     *
     * @return bool True if "region" has been set, false if not
     */
    public function hasRegion() : bool;

    /**
     * Get a default "region" value, if any is available
     *
     * @return string|null Default "region" value or null if no default value is available
     */
    public function getDefaultRegion() : ?string;
}