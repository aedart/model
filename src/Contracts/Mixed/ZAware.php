<?php

namespace Aedart\Model\Contracts\Mixed;

/**
 * <h1>Z Aware</h1>
 *
 * Component is aware of a mixed "z" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Mixed
 */
interface ZAware
{
    /**
     * Set z
     *
     * @param mixed $value Some kind of value
     *
     * @return self
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
     * @return mixed|null "z" value or null if no "z" value has been set
     */
    public function getZ();

    /**
     * Check if "z" has been set
     *
     * @return bool True if "z" value has been set, false if not
     */
    public function hasZ() : bool ;

    /**
     * Get a default "z" value, if any is available
     *
     * @return mixed|null A default "z" value or null if no default value is available
     */
    public function getDefaultZ();
}