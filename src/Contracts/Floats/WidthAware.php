<?php

namespace Aedart\Model\Contracts\Floats;

/**
 * <h1>Width Aware</h1>
 *
 * Component is aware of a float "width" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Floats
 */
interface WidthAware
{
    /**
     * Set width
     *
     * @param float|null $amount Width of something
     *
     * @return self
     */
    public function setWidth(?float $amount);

    /**
     * Get width
     *
     * If no "width" value has been set, this method will
     * set and return a default "width" value,
     * if any such value is available
     *
     * @see getDefaultWidth()
     *
     * @return float|null width or null if no width has been set
     */
    public function getWidth() : ?float ;

    /**
     * Check if "width" has been set
     *
     * @return bool True if "width" has been set, false if not
     */
    public function hasWidth() : bool;

    /**
     * Get a default "width" value, if any is available
     *
     * @return float|null Default "width" value or null if no default value is available
     */
    public function getDefaultWidth() : ?float;
}