<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Value Aware</h1>
 *
 * Components implementing this interface contain a value,
 * which can be specified and obtained
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
interface ValueAware
{
    /**
     * Set the given value
     *
     * @param string $value The value of this component
     *
     * @return void
     */
    public function setValue($value);

    /**
     * Get the given value
     *
     * If no value has been set, this method will
     * set and return a default value, if any such
     * value is available
     *
     * @see getDefaultValue()
     *
     * @return string|null value or null if none value has been set
     */
    public function getValue();

    /**
     * Get a default value value, if any is available
     *
     * @return string|null A default value value or Null if no default value is available
     */
    public function getDefaultValue();

    /**
     * Check if value has been set
     *
     * @return bool True if value has been set, false if not
     */
    public function hasValue();

    /**
     * Check if a default value is available or not
     *
     * @return bool True of a default value is available, false if not
     */
    public function hasDefaultValue();
}