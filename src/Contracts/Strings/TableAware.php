<?php namespace Aedart\Model\Contracts\Strings;

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
     * @param string $name Name of a table
     *
     * @return void
     */
    public function setTable($name);

    /**
     * Get table
     *
     * If no "table" value has been set, this method will
     * set and return a default "table" value,
     * if any such value is available
     *
     * @see getDefaultTable()
     *
     * @return string|null "table" value or null if no "table" value has been set
     */
    public function getTable();

    /**
     * Get a default "table" value, if any is available
     *
     * @return string|null A default "table" value or null if no default value is available
     */
    public function getDefaultTable();

    /**
     * Check if "table" has been set
     *
     * @return bool True if "table" value has been set, false if not
     */
    public function hasTable();

    /**
     * Check if a default "table" is available or not
     *
     * @return bool True of a default "table" value is available, false if not
     */
    public function hasDefaultTable();
}