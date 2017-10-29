<?php

namespace Aedart\Model\Contracts\Integers;

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
     * @param int|null $amount Length of something
     *
     * @return self
     */
    public function setLength(?int $amount);

    /**
     * Get length
     *
     * If no "length" value has been set, this method will
     * set and return a default "length" value,
     * if any such value is available
     *
     * @see getDefaultLength()
     *
     * @return int|null length or null if no length has been set
     */
    public function getLength() : ?int ;

    /**
     * Check if "length" has been set
     *
     * @return bool True if "length" has been set, false if not
     */
    public function hasLength() : bool;

    /**
     * Get a default "length" value, if any is available
     *
     * @return int|null Default "length" value or null if no default value is available
     */
    public function getDefaultLength() : ?int;
}