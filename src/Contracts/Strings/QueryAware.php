<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Query Aware</h1>
 *
 * Component is aware of a string "query" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface QueryAware
{
    /**
     * Set query
     *
     * @param string $query Query
     *
     * @return void
     */
    public function setQuery($query);

    /**
     * Get query
     *
     * If no "query" value has been set, this method will
     * set and return a default "query" value,
     * if any such value is available
     *
     * @see getDefaultQuery()
     *
     * @return string|null "query" value or null if no "query" value has been set
     */
    public function getQuery();

    /**
     * Get a default "query" value, if any is available
     *
     * @return string|null A default "query" value or null if no default value is available
     */
    public function getDefaultQuery();

    /**
     * Check if "query" has been set
     *
     * @return bool True if "query" value has been set, false if not
     */
    public function hasQuery();

    /**
     * Check if a default "query" is available or not
     *
     * @return bool True of a default "query" value is available, false if not
     */
    public function hasDefaultQuery();
}