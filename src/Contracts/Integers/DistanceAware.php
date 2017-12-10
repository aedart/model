<?php

namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Distance Aware</h1>
 *
 * Component is aware of a int "distance" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface DistanceAware
{
    /**
     * Set distance
     *
     * @param int|null $length Distance to or from something
     *
     * @return self
     */
    public function setDistance(?int $length);

    /**
     * Get distance
     *
     * If no "distance" value has been set, this method will
     * set and return a default "distance" value,
     * if any such value is available
     *
     * @see getDefaultDistance()
     *
     * @return int|null distance or null if no distance has been set
     */
    public function getDistance() : ?int ;

    /**
     * Check if "distance" has been set
     *
     * @return bool True if "distance" has been set, false if not
     */
    public function hasDistance() : bool;

    /**
     * Get a default "distance" value, if any is available
     *
     * @return int|null Default "distance" value or null if no default value is available
     */
    public function getDefaultDistance() : ?int;
}