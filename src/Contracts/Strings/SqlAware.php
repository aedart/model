<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Sql Aware</h1>
 *
 * Component is aware of a string "sql" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface SqlAware
{
    /**
     * Set sql
     *
     * @param string $query A Structured Query Language (SQL) query
     *
     * @return void
     */
    public function setSql($query);

    /**
     * Get sql
     *
     * If no "sql" value has been set, this method will
     * set and return a default "sql" value,
     * if any such value is available
     *
     * @see getDefaultSql()
     *
     * @return string|null "sql" value or null if no "sql" value has been set
     */
    public function getSql();

    /**
     * Get a default "sql" value, if any is available
     *
     * @return string|null A default "sql" value or null if no default value is available
     */
    public function getDefaultSql();

    /**
     * Check if "sql" has been set
     *
     * @return bool True if "sql" value has been set, false if not
     */
    public function hasSql();

    /**
     * Check if a default "sql" is available or not
     *
     * @return bool True of a default "sql" value is available, false if not
     */
    public function hasDefaultSql();
}