<?php

namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Row Aware</h1>
 *
 * Component is aware of a int "row" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface RowAware
{
    /**
     * Set row
     *
     * @param int|null $identifier A row identifier
     *
     * @return self
     */
    public function setRow(?int $identifier);

    /**
     * Get row
     *
     * If no "row" value has been set, this method will
     * set and return a default "row" value,
     * if any such value is available
     *
     * @see getDefaultRow()
     *
     * @return int|null row or null if no row has been set
     */
    public function getRow() : ?int ;

    /**
     * Check if "row" has been set
     *
     * @return bool True if "row" has been set, false if not
     */
    public function hasRow() : bool;

    /**
     * Get a default "row" value, if any is available
     *
     * @return int|null Default "row" value or null if no default value is available
     */
    public function getDefaultRow() : ?int;
}