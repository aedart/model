<?php

namespace Aedart\Model\Contracts\Floats;

/**
 * <h1>Length Aware</h1>
 *
 * Component is aware of a float "length" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Floats
 */
interface LengthAware
{
    /**
     * Set length
     *
     * @param float|null $amount Length of something
     *
     * @return self
     */
    public function setLength(?float $amount);

    /**
     * Get length
     *
     * If no "length" value has been set, this method will
     * set and return a default "length" value,
     * if any such value is available
     *
     * @see getDefaultLength()
     *
     * @return float|null length or null if no length has been set
     */
    public function getLength() : ?float ;

    /**
     * Check if "length" has been set
     *
     * @return bool True if "length" has been set, false if not
     */
    public function hasLength() : bool;

    /**
     * Get a default "length" value, if any is available
     *
     * @return float|null Default "length" value or null if no default value is available
     */
    public function getDefaultLength() : ?float;
}