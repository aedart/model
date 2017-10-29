<?php

namespace Aedart\Model\Contracts\Floats;

/**
 * <h1>Height Aware</h1>
 *
 * Component is aware of a float "height" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Floats
 */
interface HeightAware
{
    /**
     * Set height
     *
     * @param float|null $amount Height of something
     *
     * @return self
     */
    public function setHeight(?float $amount);

    /**
     * Get height
     *
     * If no "height" value has been set, this method will
     * set and return a default "height" value,
     * if any such value is available
     *
     * @see getDefaultHeight()
     *
     * @return float|null height or null if no height has been set
     */
    public function getHeight() : ?float ;

    /**
     * Check if "height" has been set
     *
     * @return bool True if "height" has been set, false if not
     */
    public function hasHeight() : bool;

    /**
     * Get a default "height" value, if any is available
     *
     * @return float|null Default "height" value or null if no default value is available
     */
    public function getDefaultHeight() : ?float;
}