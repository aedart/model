<?php

namespace Aedart\Model\Contracts\Strings;

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
     * @param string|null $name Name of database
     *
     * @return self
     */
    public function setDatabase(?string $name);

    /**
     * Get database
     *
     * If no "database" value has been set, this method will
     * set and return a default "database" value,
     * if any such value is available
     *
     * @see getDefaultDatabase()
     *
     * @return string|null database or null if no database has been set
     */
    public function getDatabase() : ?string ;

    /**
     * Check if "database" has been set
     *
     * @return bool True if "database" has been set, false if not
     */
    public function hasDatabase() : bool;

    /**
     * Get a default "database" value, if any is available
     *
     * @return string|null Default "database" value or null if no default value is available
     */
    public function getDefaultDatabase() : ?string;
}