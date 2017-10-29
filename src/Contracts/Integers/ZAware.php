<?php

namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Z Aware</h1>
 *
 * Component is aware of a int "z" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface ZAware
{
    /**
     * Set z
     *
     * @param int|null $value Co-ordinate or value
     *
     * @return self
     */
    public function setZ(?int $value);

    /**
     * Get z
     *
     * If no "z" value has been set, this method will
     * set and return a default "z" value,
     * if any such value is available
     *
     * @see getDefaultZ()
     *
     * @return int|null z or null if no z has been set
     */
    public function getZ() : ?int ;

    /**
     * Check if "z" has been set
     *
     * @return bool True if "z" has been set, false if not
     */
    public function hasZ() : bool;

    /**
     * Get a default "z" value, if any is available
     *
     * @return int|null Default "z" value or null if no default value is available
     */
    public function getDefaultZ() : ?int;
}