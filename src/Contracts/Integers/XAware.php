<?php namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>X Aware</h1>
 *
 * Component is aware of a int "x" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface XAware
{
    /**
     * Set x
     *
     * @param int $value Co-ordinate or value
     *
     * @return void
     */
    public function setX($value);

    /**
     * Get x
     *
     * If no "x" value has been set, this method will
     * set and return a default "x" value,
     * if any such value is available
     *
     * @see getDefaultX()
     *
     * @return int|null "x" value or null if no "x" value has been set
     */
    public function getX();

    /**
     * Get a default "x" value, if any is available
     *
     * @return int|null A default "x" value or null if no default value is available
     */
    public function getDefaultX();

    /**
     * Check if "x" has been set
     *
     * @return bool True if "x" value has been set, false if not
     */
    public function hasX();

    /**
     * Check if a default "x" is available or not
     *
     * @return bool True of a default "x" value is available, false if not
     */
    public function hasDefaultX();
}