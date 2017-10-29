<?php

namespace Aedart\Model\Contracts\Floats;

/**
 * <h1>Y Aware</h1>
 *
 * Component is aware of a float "y" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Floats
 */
interface YAware
{
    /**
     * Set y
     *
     * @param float|null $value Co-ordinate or value
     *
     * @return self
     */
    public function setY(?float $value);

    /**
     * Get y
     *
     * If no "y" value has been set, this method will
     * set and return a default "y" value,
     * if any such value is available
     *
     * @see getDefaultY()
     *
     * @return float|null y or null if no y has been set
     */
    public function getY() : ?float ;

    /**
     * Check if "y" has been set
     *
     * @return bool True if "y" has been set, false if not
     */
    public function hasY() : bool;

    /**
     * Get a default "y" value, if any is available
     *
     * @return float|null Default "y" value or null if no default value is available
     */
    public function getDefaultY() : ?float;
}