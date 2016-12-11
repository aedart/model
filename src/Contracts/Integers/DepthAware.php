<?php namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Depth Aware</h1>
 *
 * Component is aware of a int "depth" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface DepthAware
{
    /**
     * Set depth
     *
     * @param int $amount Depth of something
     *
     * @return void
     */
    public function setDepth($amount);

    /**
     * Get depth
     *
     * If no "depth" value has been set, this method will
     * set and return a default "depth" value,
     * if any such value is available
     *
     * @see getDefaultDepth()
     *
     * @return int|null "depth" value or null if no "depth" value has been set
     */
    public function getDepth();

    /**
     * Get a default "depth" value, if any is available
     *
     * @return int|null A default "depth" value or null if no default value is available
     */
    public function getDefaultDepth();

    /**
     * Check if "depth" has been set
     *
     * @return bool True if "depth" value has been set, false if not
     */
    public function hasDepth();

    /**
     * Check if a default "depth" is available or not
     *
     * @return bool True of a default "depth" value is available, false if not
     */
    public function hasDefaultDepth();
}