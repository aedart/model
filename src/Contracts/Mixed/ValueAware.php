<?php

namespace Aedart\Model\Contracts\Mixed;

/**
 * <h1>Value Aware</h1>
 *
 * Component is aware of a mixed "value" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Mixed
 */
interface ValueAware
{
    /**
     * Set value
     *
     * @param mixed $value The value of this component
     *
     * @return self
     */
    public function setValue($value);

    /**
     * Get value
     *
     * If no "value" value has been set, this method will
     * set and return a default "value" value,
     * if any such value is available
     *
     * @see getDefaultValue()
     *
     * @return mixed|null "value" value or null if no "value" value has been set
     */
    public function getValue();

    /**
     * Check if "value" has been set
     *
     * @return bool True if "value" value has been set, false if not
     */
    public function hasValue() : bool ;

    /**
     * Get a default "value" value, if any is available
     *
     * @return mixed|null A default "value" value or null if no default value is available
     */
    public function getDefaultValue();
}