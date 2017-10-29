<?php

namespace Aedart\Model\Contracts\Floats;

/**
 * <h1>X Aware</h1>
 *
 * Component is aware of a float "x" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Floats
 */
interface XAware
{
    /**
     * Set x
     *
     * @param float|null $value Co-ordinate or value
     *
     * @return self
     */
    public function setX(?float $value);

    /**
     * Get x
     *
     * If no "x" value has been set, this method will
     * set and return a default "x" value,
     * if any such value is available
     *
     * @see getDefaultX()
     *
     * @return float|null x or null if no x has been set
     */
    public function getX() : ?float ;

    /**
     * Check if "x" has been set
     *
     * @return bool True if "x" has been set, false if not
     */
    public function hasX() : bool;

    /**
     * Get a default "x" value, if any is available
     *
     * @return float|null Default "x" value or null if no default value is available
     */
    public function getDefaultX() : ?float;
}