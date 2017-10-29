<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Zone Aware</h1>
 *
 * Component is aware of a string "zone" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface ZoneAware
{
    /**
     * Set zone
     *
     * @param string|null $identifier Name or identifier of area, district or division
     *
     * @return self
     */
    public function setZone(?string $identifier);

    /**
     * Get zone
     *
     * If no "zone" value has been set, this method will
     * set and return a default "zone" value,
     * if any such value is available
     *
     * @see getDefaultZone()
     *
     * @return string|null zone or null if no zone has been set
     */
    public function getZone() : ?string ;

    /**
     * Check if "zone" has been set
     *
     * @return bool True if "zone" has been set, false if not
     */
    public function hasZone() : bool;

    /**
     * Get a default "zone" value, if any is available
     *
     * @return string|null Default "zone" value or null if no default value is available
     */
    public function getDefaultZone() : ?string;
}