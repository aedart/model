<?php namespace Aedart\Model\Contracts\Integers;

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
     * @param int $value Co-ordinate or value
     *
     * @return void
     */
    public function setZ($value);

    /**
     * Get z
     *
     * If no "z" value has been set, this method will
     * set and return a default "z" value,
     * if any such value is available
     *
     * @see getDefaultZ()
     *
     * @return int|null "z" value or null if no "z" value has been set
     */
    public function getZ();

    /**
     * Get a default "z" value, if any is available
     *
     * @return int|null A default "z" value or null if no default value is available
     */
    public function getDefaultZ();

    /**
     * Check if "z" has been set
     *
     * @return bool True if "z" value has been set, false if not
     */
    public function hasZ();

    /**
     * Check if a default "z" is available or not
     *
     * @return bool True of a default "z" value is available, false if not
     */
    public function hasDefaultZ();
}