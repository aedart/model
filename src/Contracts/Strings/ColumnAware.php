<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Column Aware</h1>
 *
 * Component is aware of a string "column" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface ColumnAware
{
    /**
     * Set column
     *
     * @param string $name Name of a column
     *
     * @return void
     */
    public function setColumn($name);

    /**
     * Get column
     *
     * If no "column" value has been set, this method will
     * set and return a default "column" value,
     * if any such value is available
     *
     * @see getDefaultColumn()
     *
     * @return string|null "column" value or null if no "column" value has been set
     */
    public function getColumn();

    /**
     * Get a default "column" value, if any is available
     *
     * @return string|null A default "column" value or null if no default value is available
     */
    public function getDefaultColumn();

    /**
     * Check if "column" has been set
     *
     * @return bool True if "column" value has been set, false if not
     */
    public function hasColumn();

    /**
     * Check if a default "column" is available or not
     *
     * @return bool True of a default "column" value is available, false if not
     */
    public function hasDefaultColumn();
}