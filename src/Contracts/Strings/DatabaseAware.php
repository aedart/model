<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Database Aware</h1>
 *
 * Component is aware of a string "database" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface DatabaseAware
{
    /**
     * Set database
     *
     * @param string $name Name of a database
     *
     * @return void
     */
    public function setDatabase($name);

    /**
     * Get database
     *
     * If no "database" value has been set, this method will
     * set and return a default "database" value,
     * if any such value is available
     *
     * @see getDefaultDatabase()
     *
     * @return string|null "database" value or null if no "database" value has been set
     */
    public function getDatabase();

    /**
     * Get a default "database" value, if any is available
     *
     * @return string|null A default "database" value or null if no default value is available
     */
    public function getDefaultDatabase();

    /**
     * Check if "database" has been set
     *
     * @return bool True if "database" value has been set, false if not
     */
    public function hasDatabase();

    /**
     * Check if a default "database" is available or not
     *
     * @return bool True of a default "database" value is available, false if not
     */
    public function hasDefaultDatabase();
}