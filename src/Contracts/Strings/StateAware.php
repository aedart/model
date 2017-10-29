<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>State Aware</h1>
 *
 * Component is aware of a string "state" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface StateAware
{
    /**
     * Set state
     *
     * @param string|null $state State of this component or what it represents. Alternative, state address
     *
     * @return self
     */
    public function setState(?string $state);

    /**
     * Get state
     *
     * If no "state" value has been set, this method will
     * set and return a default "state" value,
     * if any such value is available
     *
     * @see getDefaultState()
     *
     * @return string|null state or null if no state has been set
     */
    public function getState() : ?string ;

    /**
     * Check if "state" has been set
     *
     * @return bool True if "state" has been set, false if not
     */
    public function hasState() : bool;

    /**
     * Get a default "state" value, if any is available
     *
     * @return string|null Default "state" value or null if no default value is available
     */
    public function getDefaultState() : ?string;
}