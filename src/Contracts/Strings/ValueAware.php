<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Value Aware</h1>
 *
 * Component is aware of a string "value" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface ValueAware
{
    /**
     * Set value
     *
     * @param string|null $value Value
     *
     * @return self
     */
    public function setValue(?string $value);

    /**
     * Get value
     *
     * If no "value" value has been set, this method will
     * set and return a default "value" value,
     * if any such value is available
     *
     * @see getDefaultValue()
     *
     * @return string|null value or null if no value has been set
     */
    public function getValue() : ?string ;

    /**
     * Check if "value" has been set
     *
     * @return bool True if "value" has been set, false if not
     */
    public function hasValue() : bool;

    /**
     * Get a default "value" value, if any is available
     *
     * @return string|null Default "value" value or null if no default value is available
     */
    public function getDefaultValue() : ?string;
}