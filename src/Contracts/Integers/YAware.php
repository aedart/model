<?php namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Y Aware</h1>
 *
 * Component is aware of a int "y" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface YAware
{
    /**
     * Set y
     *
     * @param int $value Co-ordinate or value
     *
     * @return void
     */
    public function setY($value);

    /**
     * Get y
     *
     * If no "y" value has been set, this method will
     * set and return a default "y" value,
     * if any such value is available
     *
     * @see getDefaultY()
     *
     * @return int|null "y" value or null if no "y" value has been set
     */
    public function getY();

    /**
     * Get a default "y" value, if any is available
     *
     * @return int|null A default "y" value or null if no default value is available
     */
    public function getDefaultY();

    /**
     * Check if "y" has been set
     *
     * @return bool True if "y" value has been set, false if not
     */
    public function hasY();

    /**
     * Check if a default "y" is available or not
     *
     * @return bool True of a default "y" value is available, false if not
     */
    public function hasDefaultY();
}