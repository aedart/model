<?php

namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>X Aware</h1>
 *
 * Component is aware of a int "x" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface XAware
{
    /**
     * Set x
     *
     * @param int|null $value Co-ordinate or value
     *
     * @return self
     */
    public function setX(?int $value);

    /**
     * Get x
     *
     * If no "x" value has been set, this method will
     * set and return a default "x" value,
     * if any such value is available
     *
     * @see getDefaultX()
     *
     * @return int|null x or null if no x has been set
     */
    public function getX() : ?int ;

    /**
     * Check if "x" has been set
     *
     * @return bool True if "x" has been set, false if not
     */
    public function hasX() : bool;

    /**
     * Get a default "x" value, if any is available
     *
     * @return int|null Default "x" value or null if no default value is available
     */
    public function getDefaultX() : ?int;
}