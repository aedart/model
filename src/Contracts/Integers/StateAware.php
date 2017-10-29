<?php

namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>State Aware</h1>
 *
 * Component is aware of a int "state" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface StateAware
{
    /**
     * Set state
     *
     * @param int|null $state State of this component or what it represents
     *
     * @return self
     */
    public function setState(?int $state);

    /**
     * Get state
     *
     * If no "state" value has been set, this method will
     * set and return a default "state" value,
     * if any such value is available
     *
     * @see getDefaultState()
     *
     * @return int|null state or null if no state has been set
     */
    public function getState() : ?int ;

    /**
     * Check if "state" has been set
     *
     * @return bool True if "state" has been set, false if not
     */
    public function hasState() : bool;

    /**
     * Get a default "state" value, if any is available
     *
     * @return int|null Default "state" value or null if no default value is available
     */
    public function getDefaultState() : ?int;
}