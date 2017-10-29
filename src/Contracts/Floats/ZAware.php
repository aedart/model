<?php

namespace Aedart\Model\Contracts\Floats;

/**
 * <h1>Z Aware</h1>
 *
 * Component is aware of a float "z" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Floats
 */
interface ZAware
{
    /**
     * Set z
     *
     * @param float|null $value Co-ordinate or value
     *
     * @return self
     */
    public function setZ(?float $value);

    /**
     * Get z
     *
     * If no "z" value has been set, this method will
     * set and return a default "z" value,
     * if any such value is available
     *
     * @see getDefaultZ()
     *
     * @return float|null z or null if no z has been set
     */
    public function getZ() : ?float ;

    /**
     * Check if "z" has been set
     *
     * @return bool True if "z" has been set, false if not
     */
    public function hasZ() : bool;

    /**
     * Get a default "z" value, if any is available
     *
     * @return float|null Default "z" value or null if no default value is available
     */
    public function getDefaultZ() : ?float;
}