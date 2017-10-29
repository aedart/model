<?php

namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Y Aware</h1>
 *
 * Component is aware of a int "y" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface YAware
{
    /**
     * Set y
     *
     * @param int|null $value Co-ordinate or value
     *
     * @return self
     */
    public function setY(?int $value);

    /**
     * Get y
     *
     * If no "y" value has been set, this method will
     * set and return a default "y" value,
     * if any such value is available
     *
     * @see getDefaultY()
     *
     * @return int|null y or null if no y has been set
     */
    public function getY() : ?int ;

    /**
     * Check if "y" has been set
     *
     * @return bool True if "y" has been set, false if not
     */
    public function hasY() : bool;

    /**
     * Get a default "y" value, if any is available
     *
     * @return int|null Default "y" value or null if no default value is available
     */
    public function getDefaultY() : ?int;
}