<?php namespace Aedart\Model\Contracts\Strings;

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
     * @param string $state The state of this component or what it represents
     *
     * @return void
     */
    public function setState($state);

    /**
     * Get state
     *
     * If no "state" value has been set, this method will
     * set and return a default "state" value,
     * if any such value is available
     *
     * @see getDefaultState()
     *
     * @return string|null "state" value or null if no "state" value has been set
     */
    public function getState();

    /**
     * Get a default "state" value, if any is available
     *
     * @return string|null A default "state" value or null if no default value is available
     */
    public function getDefaultState();

    /**
     * Check if "state" has been set
     *
     * @return bool True if "state" value has been set, false if not
     */
    public function hasState();

    /**
     * Check if a default "state" is available or not
     *
     * @return bool True of a default "state" value is available, false if not
     */
    public function hasDefaultState();
}