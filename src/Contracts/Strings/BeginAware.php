<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Begin Aware</h1>
 *
 * Component is aware of a string "begin" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface BeginAware
{
    /**
     * Set begin
     *
     * @param string $location Location, index or some other identifier of where something begins
     *
     * @return void
     */
    public function setBegin($location);

    /**
     * Get begin
     *
     * If no "begin" value has been set, this method will
     * set and return a default "begin" value,
     * if any such value is available
     *
     * @see getDefaultBegin()
     *
     * @return string|null "begin" value or null if no "begin" value has been set
     */
    public function getBegin();

    /**
     * Get a default "begin" value, if any is available
     *
     * @return string|null A default "begin" value or null if no default value is available
     */
    public function getDefaultBegin();

    /**
     * Check if "begin" has been set
     *
     * @return bool True if "begin" value has been set, false if not
     */
    public function hasBegin();

    /**
     * Check if a default "begin" is available or not
     *
     * @return bool True of a default "begin" value is available, false if not
     */
    public function hasDefaultBegin();
}