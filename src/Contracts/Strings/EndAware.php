<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>End Aware</h1>
 *
 * Component is aware of a string "end" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface EndAware
{
    /**
     * Set end
     *
     * @param string $location Location, index or other identifier of when something ends
     *
     * @return void
     */
    public function setEnd($location);

    /**
     * Get end
     *
     * If no "end" value has been set, this method will
     * set and return a default "end" value,
     * if any such value is available
     *
     * @see getDefaultEnd()
     *
     * @return string|null "end" value or null if no "end" value has been set
     */
    public function getEnd();

    /**
     * Get a default "end" value, if any is available
     *
     * @return string|null A default "end" value or null if no default value is available
     */
    public function getDefaultEnd();

    /**
     * Check if "end" has been set
     *
     * @return bool True if "end" value has been set, false if not
     */
    public function hasEnd();

    /**
     * Check if a default "end" is available or not
     *
     * @return bool True of a default "end" value is available, false if not
     */
    public function hasDefaultEnd();
}