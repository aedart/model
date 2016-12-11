<?php namespace Aedart\Model\Contracts\Floats;

/**
 * <h1>Y Aware</h1>
 *
 * Component is aware of a float "y" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Floats
 */
interface YAware
{
    /**
     * Set y
     *
     * @param float $value Co-ordinate or value
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
     * @return float|null "y" value or null if no "y" value has been set
     */
    public function getY();

    /**
     * Get a default "y" value, if any is available
     *
     * @return float|null A default "y" value or null if no default value is available
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