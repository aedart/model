<?php namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Width Aware</h1>
 *
 * Component is aware of a int "width" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface WidthAware
{
    /**
     * Set width
     *
     * @param int $amount Width of something
     *
     * @return void
     */
    public function setWidth($amount);

    /**
     * Get width
     *
     * If no "width" value has been set, this method will
     * set and return a default "width" value,
     * if any such value is available
     *
     * @see getDefaultWidth()
     *
     * @return int|null "width" value or null if no "width" value has been set
     */
    public function getWidth();

    /**
     * Get a default "width" value, if any is available
     *
     * @return int|null A default "width" value or null if no default value is available
     */
    public function getDefaultWidth();

    /**
     * Check if "width" has been set
     *
     * @return bool True if "width" value has been set, false if not
     */
    public function hasWidth();

    /**
     * Check if a default "width" is available or not
     *
     * @return bool True of a default "width" value is available, false if not
     */
    public function hasDefaultWidth();
}