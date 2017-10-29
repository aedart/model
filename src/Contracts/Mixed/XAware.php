<?php namespace Aedart\Model\Contracts\Mixed;

/**
 * <h1>X Aware</h1>
 *
 * Component is aware of a mixed "x" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Mixed
 */
interface XAware
{
    /**
     * Set x
     *
     * @param mixed $value Some kind of value
     *
     * @return self
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
     * @return mixed|null "x" value or null if no "x" value has been set
     */
    public function getX();

    /**
     * Check if "x" has been set
     *
     * @return bool True if "x" value has been set, false if not
     */
    public function hasX() : bool ;

    /**
     * Get a default "x" value, if any is available
     *
     * @return mixed|null A default "x" value or null if no default value is available
     */
    public function getDefaultX();
}