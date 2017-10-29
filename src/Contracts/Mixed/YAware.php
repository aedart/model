<?php

namespace Aedart\Model\Contracts\Mixed;

/**
 * <h1>Y Aware</h1>
 *
 * Component is aware of a mixed "y" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Mixed
 */
interface YAware
{
    /**
     * Set y
     *
     * @param mixed $value Some kind of value
     *
     * @return self
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
     * @return mixed|null "y" value or null if no "y" value has been set
     */
    public function getY();

    /**
     * Check if "y" has been set
     *
     * @return bool True if "y" value has been set, false if not
     */
    public function hasY() : bool ;

    /**
     * Get a default "y" value, if any is available
     *
     * @return mixed|null A default "y" value or null if no default value is available
     */
    public function getDefaultY();
}