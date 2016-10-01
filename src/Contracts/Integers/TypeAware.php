<?php namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Type Aware</h1>
 *
 * Component is aware of a int "type" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface TypeAware
{
    /**
     * Set type
     *
     * @param int $number The type number of something
     *
     * @return void
     */
    public function setType($number);

    /**
     * Get type
     *
     * If no "type" value has been set, this method will
     * set and return a default "type" value,
     * if any such value is available
     *
     * @see getDefaultType()
     *
     * @return int|null "type" value or null if no "type" value has been set
     */
    public function getType();

    /**
     * Get a default "type" value, if any is available
     *
     * @return int|null A default "type" value or null if no default value is available
     */
    public function getDefaultType();

    /**
     * Check if "type" has been set
     *
     * @return bool True if "type" value has been set, false if not
     */
    public function hasType();

    /**
     * Check if a default "type" is available or not
     *
     * @return bool True of a default "type" value is available, false if not
     */
    public function hasDefaultType();
}