<?php namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Length Aware</h1>
 *
 * Component is aware of a int "length" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface LengthAware
{
    /**
     * Set length
     *
     * @param int $amount Length of something
     *
     * @return void
     */
    public function setLength($amount);

    /**
     * Get length
     *
     * If no "length" value has been set, this method will
     * set and return a default "length" value,
     * if any such value is available
     *
     * @see getDefaultLength()
     *
     * @return int|null "length" value or null if no "length" value has been set
     */
    public function getLength();

    /**
     * Get a default "length" value, if any is available
     *
     * @return int|null A default "length" value or null if no default value is available
     */
    public function getDefaultLength();

    /**
     * Check if "length" has been set
     *
     * @return bool True if "length" value has been set, false if not
     */
    public function hasLength();

    /**
     * Check if a default "length" is available or not
     *
     * @return bool True of a default "length" value is available, false if not
     */
    public function hasDefaultLength();
}