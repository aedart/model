<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Table Aware</h1>
 *
 * Component is aware of a string "table" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface TableAware
{
    /**
     * Set table
     *
     * @param string|null $name Name of table
     *
     * @return self
     */
    public function setTable(?string $name);

    /**
     * Get table
     *
     * If no "table" value has been set, this method will
     * set and return a default "table" value,
     * if any such value is available
     *
     * @see getDefaultTable()
     *
     * @return string|null table or null if no table has been set
     */
    public function getTable() : ?string ;

    /**
     * Check if "table" has been set
     *
     * @return bool True if "table" has been set, false if not
     */
    public function hasTable() : bool;

    /**
     * Get a default "table" value, if any is available
     *
     * @return string|null Default "table" value or null if no default value is available
     */
    public function getDefaultTable() : ?string;
}