<?php

namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Depth Aware</h1>
 *
 * Component is aware of a int "depth" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface DepthAware
{
    /**
     * Set depth
     *
     * @param int|null $amount Depth of something
     *
     * @return self
     */
    public function setDepth(?int $amount);

    /**
     * Get depth
     *
     * If no "depth" value has been set, this method will
     * set and return a default "depth" value,
     * if any such value is available
     *
     * @see getDefaultDepth()
     *
     * @return int|null depth or null if no depth has been set
     */
    public function getDepth() : ?int ;

    /**
     * Check if "depth" has been set
     *
     * @return bool True if "depth" has been set, false if not
     */
    public function hasDepth() : bool;

    /**
     * Get a default "depth" value, if any is available
     *
     * @return int|null Default "depth" value or null if no default value is available
     */
    public function getDefaultDepth() : ?int;
}