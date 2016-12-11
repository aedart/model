<?php namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Height Aware</h1>
 *
 * Component is aware of a int "height" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface HeightAware
{
    /**
     * Set height
     *
     * @param int $amount Height of something
     *
     * @return void
     */
    public function setHeight($amount);

    /**
     * Get height
     *
     * If no "height" value has been set, this method will
     * set and return a default "height" value,
     * if any such value is available
     *
     * @see getDefaultHeight()
     *
     * @return int|null "height" value or null if no "height" value has been set
     */
    public function getHeight();

    /**
     * Get a default "height" value, if any is available
     *
     * @return int|null A default "height" value or null if no default value is available
     */
    public function getDefaultHeight();

    /**
     * Check if "height" has been set
     *
     * @return bool True if "height" value has been set, false if not
     */
    public function hasHeight();

    /**
     * Check if a default "height" is available or not
     *
     * @return bool True of a default "height" value is available, false if not
     */
    public function hasDefaultHeight();
}