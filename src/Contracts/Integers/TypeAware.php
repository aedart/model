<?php namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Type Aware</h1>
 *
 * Component is aware of and able to specify a type
 * number.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
interface TypeAware
{
    /**
     * Set the given type
     *
     * @param int $number The type number of something
     *
     * @return void
     */
    public function setType($number);

    /**
     * Get the given type
     *
     * If no type has been set, this method will
     * set and return a default type, if any such
     * value is available
     *
     * @see getDefaultType()
     *
     * @return int|null type or null if none type has been set
     */
    public function getType();

    /**
     * Get a default type value, if any is available
     *
     * @return int|null A default type value or Null if no default value is available
     */
    public function getDefaultType();

    /**
     * Check if type has been set
     *
     * @return bool True if type has been set, false if not
     */
    public function hasType();

    /**
     * Check if a default type is available or not
     *
     * @return bool True of a default type is available, false if not
     */
    public function hasDefaultType();
}